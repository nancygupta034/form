$(document).ready(function(){
    $(".builder-section").on('click', function(e){
        console.log("here i am => ", $(this).data('type'))
        if($(this).data('type') == 'input'){
            var numItems = ($('.input').length) + 1
            $("#formBuilderArea").append('<div id="input_'+numItems+'" class="input list-group-item mt-4 mb-4"><div class="title_icons_sec"><div class="row"><div class="col-7"></div><div class="col-5"><div class="text-right edit_delete_sec"><i class="fa fa-cog edit_btn input_edit_btn" aria-hidden="true"></i><i class="fa fa-trash delete_btn" aria-hidden="true"></i></div></div></div></div><div style="background-color: rgb(255, 255, 255);"><div class="section_one_block"><div class="row"><div xs="6" class="col-sm-3 col-md-5 col-lg-5 col-xl-5"><label for="exampleInputEmail1">Form Title</label><input type="text" class="form-control" ></div></div></div></div></div>');
        }
        else if($(this).data('type') == 'radiobox') {
            var numItems = ($('.radiobox').length) + 1
            $("#formBuilderArea").append('<div id="radiobox_'+numItems+'" class="input list-group-item mt-4 mb-4"><div class="title_icons_sec"><div class="row"><div class="col-7"></div><div class="col-5"><div class="text-right edit_delete_sec"><i class="fa fa-cog edit_btn radiobox_edit_btn" aria-hidden="true"></i><i class="fa fa-trash delete_btn" aria-hidden="true"></i></div></div></div></div><div style="background-color: rgb(255, 255, 255);"><div class="section_one_block"><div class="row"><div xs="6" class="col-sm-3 col-md-5 col-lg-5 col-xl-5"><label for="exampleInputEmail1">Radio Box Label</label><input type="radio" id="radiobox_'+numItems+'_1" class="form-control" ><label  for="radiobox_'+numItems+'_1" >Test</label></div></div></div></div></div>');
        }
        else if($(this).data('type') == 'checkbox') {
            var numItems = ($('.checkbox').length) + 1
            $("#formBuilderArea").append('<div id="checkbox_'+numItems+'" class="input list-group-item mt-4 mb-4"><div class="title_icons_sec"><div class="row"><div class="col-7"></div><div class="col-5"><div class="text-right edit_delete_sec"><i class="fa fa-cog edit_btn checkbox_edit_btn" aria-hidden="true"></i><i class="fa fa-trash delete_btn" aria-hidden="true"></i></div></div></div></div><div style="background-color: rgb(255, 255, 255);"><div class="section_one_block"><div class="row"><div xs="6" class="col-sm-3 col-md-5 col-lg-5 col-xl-5"><label for="exampleInputEmail1">Checkbox Label</label><input type="checkbox" id="checkbox_'+numItems+'_1" class="form-control" ><label  for="checkbox_'+numItems+'_1" >Test</label></div></div></div></div></div>');
        }
        else if($(this).data('type') == 'textarea') {
            var numItems = ($('.textarea').length) + 1
            $("#formBuilderArea").append('<div id="textarea_'+numItems+'" class="input list-group-item mt-4 mb-4"><div class="title_icons_sec"><div class="row"><div class="col-7"></div><div class="col-5"><div class="text-right edit_delete_sec"><i class="fa fa-cog edit_btn textarea_edit_btn" aria-hidden="true"></i><i class="fa fa-trash delete_btn" aria-hidden="true"></i></div></div></div></div><div style="background-color: rgb(255, 255, 255);"><div class="section_one_block"><div class="row"><div xs="6" class="col-sm-3 col-md-5 col-lg-5 col-xl-5"><label for="exampleInputEmail1">Textarea Label</label><textarea id="textarea_'+numItems+'_1" class="form-control" ></textarea></div></div></div></div></div>');
        }
        else {

        }
        
    })

    $(document).on('click', '.edit_btn', function(e){
        console.log("here i am bhh => ", $(this).closest('.list-group-item').attr('id'))
        if($(this).hasClass('input_edit_btn') || $(this).hasClass('textarea_edit_btn')){
            $('#input_modal').attr('data-info', $(this).closest('.list-group-item').attr('id'))
            $('#input_modal').modal('show');
        }
        else if($(this).hasClass('checkbox_edit_btn') || $(this).hasClass('radiobox_edit_btn')) {
            $('#checkbox_modal').attr('data-info', $(this).closest('.list-group-item').attr('id'))
            $('#checkbox_modal').modal('show');
        }
        else {

        }
        
    })

    $(document).on('input', '.inputLabelTitle', function(e){
        var changedInput = $(this).closest('#input_modal').data('info');
        $("#"+ changedInput).find('label').html($(this).val())
    })

    $(document).on('input', '#inputName', function(e){
        var changedInput = $(this).closest('#input_modal').data('info');
        $("#"+ changedInput).find('input').attr('name', $(this).val())
    })
});