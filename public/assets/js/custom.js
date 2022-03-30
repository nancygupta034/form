$(document).ready(function () {
    $(".builder-section").on('click', function (e) {
        $("#noFields").hide()
        $("#formBuilderArea").show()
        if ($(this).data('type') == 'input') {
            var numItems = ($('.input').length) + 1
            $("#formBuilderArea").append('<div id="input_' + numItems + '" class="input list-group-item mt-4 mb-4"><div class="title_icons_sec"><div class="row"><div class="col-7"></div><div class="col-5"><div class="text-right edit_delete_sec"><i class="fa fa-cog edit_btn input_edit_btn" aria-hidden="true"></i><i class="fa fa-trash delete_btn ml-2" aria-hidden="true"></i></div></div></div></div><div class="section_one_block"><div class="row"><div class="col-md-12"><h5>Input Label</h5><div class="inputData"><input type="text" class="form-control" /></div></div></div></div></div>');
        }
        else if ($(this).data('type') == 'radiobox') {
            var numItems = ($('.radiobox').length) + 1
            $("#formBuilderArea").append('<div id="radiobox_' + numItems + '" class="radiobox list-group-item mt-4 mb-4"><div class="title_icons_sec"><div class="row"><div class="col-7"></div><div class="col-5"><div class="text-right edit_delete_sec"><i class="fa fa-cog edit_btn radiobox_edit_btn" aria-hidden="true"></i><i class="ml-2 fa fa-trash delete_btn" aria-hidden="true"></i></div></div></div></div><div class="section_one_block"><div class="row"><div class="col-md-12"><h5>Radiobox Label</h5><div class="optionList"><input type="radio" class="radio-input" id="radiobox_' + numItems + '_1" /><label for="radiobox_' + numItems + '_1" class="radio-label">Option 1</label></div></div></div></div></div></div>');
        }
        else if ($(this).data('type') == 'checkbox') {
            var numItems = ($('.checkbox').length) + 1
            $("#formBuilderArea").append('<div id="checkbox_' + numItems + '" class="checkbox list-group-item mt-4 mb-4"><div class="title_icons_sec"><div class="row"><div class="col-7"></div><div class="col-5"><div class="text-right edit_delete_sec"><i class="fa fa-cog edit_btn checkbox_edit_btn" aria-hidden="true"></i><i class="ml-2 fa fa-trash delete_btn" aria-hidden="true"></i></div></div></div></div><div class="section_one_block"><div class="row"><div class="col-md-12"><h5>Checkbox Label</h5><div class="optionList"><input type="checkbox" class="checkbox-input" id="checkbox_' + numItems + '_1"><label for="checkbox_' + numItems + '_1"  class="radio-label">Option 1</label></div></div></div></div></div></div>');
        }
        else if ($(this).data('type') == 'textarea') {
            var numItems = ($('.textarea').length) + 1
            $("#formBuilderArea").append('<div id="textarea_' + numItems + '" class="textarea list-group-item mt-4 mb-4"><div class="title_icons_sec"><div class="row"><div class="col-7"></div><div class="col-5"><div class="text-right edit_delete_sec"><i class="fa fa-cog edit_btn textarea_edit_btn" aria-hidden="true"></i><i class="ml-2 fa fa-trash delete_btn" aria-hidden="true"></i></div></div></div></div><div class="section_one_block"><div class="row"><div class="col-md-12"><h5>Textarea Label</h5><div class="inputData"><textarea id="textarea_' + numItems + '_1" class="form-control" ></textarea></div></div></div></div></div>');
        }
        else {
            var numItems = ($('.button').length) + 1
            if (numItems == 1) {
                $("#formBuilderArea").append('<div id="button_' + numItems + '" class="button list-group-item mt-4 mb-4"><div class="title_icons_sec"><div class="row"><div class="col-7"></div><div class="col-5"><div class="text-right edit_delete_sec"><i class="fa fa-trash delete_btn" aria-hidden="true"></i></div></div></div></div><div class="section_one_block"><div class="row"><div class="col-md-6"><div class="buttonData"><button type="submit" class="btn btn-primary saveBtn">Submit</button></div></div></div></div></div>');
            }
            else {
                alert("Button can be added only once")
            }
        }
    })

    $(document).on('click', '.edit_btn', function (e) {
        if ($(this).hasClass('input_edit_btn') || $(this).hasClass('textarea_edit_btn')) {
            $('#input_modal').attr('data-info', $(this).closest('.list-group-item').attr('id'))
            $('#input_modal').find('.update_content_btn').attr('data-info', $(this).closest('.list-group-item').attr('id'))
            var type = $(this).hasClass('input_edit_btn') ? 'input' : 'textarea';
            $('#input_modal').find('.update_content_btn').attr('data-type', type)
            if (type == "input") {
                $('.input_type_field').show();
            }
            else {
                $('.input_type_field').hide();
            }
            $('#input_modal').modal('show');
        }
        else if ($(this).hasClass('checkbox_edit_btn') || $(this).hasClass('radiobox_edit_btn')) {
            $('#checkbox_modal').attr('data-info', $(this).closest('.list-group-item').attr('id'))
            $('#checkbox_modal').find('.update_content_btn').attr('data-info', $(this).closest('.list-group-item').attr('id'))
            var type = $(this).hasClass('checkbox_edit_btn') ? 'checkbox' : 'radiobox';
            $('#checkbox_modal').find('.update_content_btn').attr('data-type', type)
            $('#checkbox_modal').modal('show');
        }
        else {
            $('#button_modal').attr('data-info', $(this).closest('.list-group-item').attr('id'))
            $('#button_modal').find('.update_content_btn').attr('data-info', $(this).closest('.list-group-item').attr('id'))
            $('#button_modal').find('.update_content_btn').attr('data-type', 'button')
            $('#button_modal').modal('show');
        }
    })

    $(document).on('click', '.add_options', function (e) {
        e.preventDefault()
        var numItems = ($('.radiobox').length) + 1
        var html = '<div class="option mt-3"><input type="text" id="multiOptions[' + numItems + ']" class="option-values" placeholder="Enter value here" value=""/><button class="dlt_option ml-2"><i class="fa-solid fa-trash"></i></button></div>';
        $(".options-list").append(html);
    })

    $(document).on('click', '.dlt_option', function (e) {
        e.preventDefault()
        $(this).closest('.option').remove();
    })

    $(document).on('click', '.delete_btn', function (e) {
        e.preventDefault()
        $(this).closest('.list-group-item').remove();
    })

    $(document).on('click', '.update_content_btn', function (e) {
        e.preventDefault()
        var type = $(this).attr('data-type');
        if (type == 'input' || type == 'textarea') {
            $(".length-validation").hide();
            var dataId = $(this).attr('data-info');  
            var inputLabelTitle = $("#inputLabelTitle").val();
            var inputFieldName = $("#inputFieldName").val();
            var fieldType = $("#fieldType").val();
            var minlength = $("#minlength").val();
            var maxlength= $("#maxlength").val();
            var minValue = $("#minValue").val();
            var maxValue= $("#maxValue").val();
            var isRequired = $("#inputIsRequired").prop('checked') == true ? 'required' : '';
           
            $('#' + dataId).find("h5").html(inputLabelTitle);
            $('#' + dataId).find(".inputData").html('');
            if (type == 'textarea') {
                var html = '<textarea ' + isRequired + ' name="' + inputFieldName + '" id="' + dataId + '" class="form-control" minlength="' + minlength + '"  maxlength="' + maxlength + '"></textarea>'
            }
            else {
                if(fieldType == 'number') {
                    var html = '<input ' + isRequired + ' type="' + fieldType + '" name="' + inputFieldName + '" id="' + dataId + '" class="form-control" minlength="' + minlength + '"  maxlength="' + maxlength + '" min="' + minValue + '"  max="' + maxValue + '">'
                }
                else {
                    var html = '<input ' + isRequired + ' type="' + fieldType + '" name="' + inputFieldName + '" id="' + dataId + '" class="form-control" minlength="' + minlength + '"  maxlength="' + maxlength + '">'
                }
                
            }
            $('#' + dataId).find(".inputData").append(html);
            $("#inputModalFrm")[0].reset();
        }
        else if (type == 'checkbox' || type == 'radiobox') {
            var dataId = $(this).attr('data-info');
            var labelTitle = $("#multiOptionLabelTitle").val()
            var fieldName = $("#multiOptionFieldName").val()
            var isRequired = $("#multiOptionIsRequired").val()
            $('#' + dataId).find("h5").html(labelTitle);
            $('#' + dataId).find(".optionList").html('');
            $(".option-values").each(function (index) {
                var isChecked = index == 0 ? 'checked' : '';
                if (type == 'checkbox') {
                    var html = '<input type="checkbox" ' + isChecked + ' class="checkbox-input" name="' + fieldName + '" id="' + dataId + '_' + index + '" value="' + $(this).val() + '"><label class="checkbox-label" for="' + dataId + '_' + index + '" >' + $(this).val() + '</label>'
                }
                else {
                    var html = '<input type="radio" ' + isChecked + ' class="radio-input"  name="' + fieldName + '" id="' + dataId + '_' + index + '" value="' + $(this).val() + '"><label class="radio-label" for="' + dataId + '_' + index + '" >' + $(this).val() + '</label>'
                }

                $('#' + dataId).find(".optionList").append(html);
            });
            $("#multiOptionFrm")[0].reset();
        }
        else {
            var dataId = $(this).attr('data-info');
            $('#' + dataId).find(".buttonData").html('');
            let fieldsData = {
                type: 'button',
                buttonText: $("#buttonText").val(),
                dataId: dataId,
                buttonbgColor: $("#buttonbgColor").val(),
                buttonFontColor: $("#buttonFontColor").val()
            }
            var html = '<button type="submit" id="' + dataId + '" class="form-control submit_btn" style="background-color:' + fieldsData.buttonbgColor + ';color:' + fieldsData.buttonFontColor + '">' + fieldsData.buttonText + '</button>'
            $('#' + dataId).find(".buttonData").append(html);
            $('#' + dataId).find("input[name=" + dataId + "]").val(JSON.stringify(fieldsData));
        }

        $('#input_modal').modal('hide');
        $('#checkbox_modal').modal('hide');
        $('#button_modal').modal('hide');
    })

    $(document).on('click', '.updateFormcontentBtn', function (e) {
        e.preventDefault()
        var formTitle = $("#formTitle").val();
        var backgroundColor = $("#backgroundColor").val();
        $('.formHeader').html('');
        $('.formHeader').html('<h3>' + formTitle + '</h3>');
        $('#title').val(formTitle);
        $('#formBgColor').val(backgroundColor);
        $("body").css("background-color", backgroundColor);
        $('#information_modal').modal('hide');
    })

    $(document).on('change', '#fieldType', function (e) {
        if ($(this).val() == 'number') {
            $(".length-validation").show();
        }
        else {
            $(".length-validation").hide();
        }
    })

    $('#formData').on('submit', function (e) {
        e.preventDefault();
        var data = new FormData($('#formData')[0]);
        $.ajax({
            url: "/add-form",
            type: "POST",
            data: data,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                if (response) {
                    $("#formData")[0].reset();
                    Swal.fire({
                        text: response.message,
                    });
                    location.reload();
                }
            },
            error: function (response) {
                console.log(" error => ", response)
            }
        });
    });
});