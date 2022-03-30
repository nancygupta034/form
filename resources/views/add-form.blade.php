@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-left">
                <div class="row">
                    <div class="col-md-6">
                        <div class="formHeader mt-3">
                            <h3>Form Title</h3>    
                        </div> 
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-info mt-3" title="Add fields" id="modal_view_right" data-toggle="modal" data-target="#information_modal">Add Fields</button>
                    </div>
                </div>
                <form id="formData">
                    @csrf   
                    <input type="hidden" name="formTitle" id="title" value="Form title" />
                    <input type="hidden" name="formBgColor" id="formBgColor" value="#ffffff" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div id="formBuilderArea" style="display:none;"></div>
                    <div id="noFields">No fields added yet</div>
                    <!-- <button type="submit" class="submitBtn">Submit</button> -->
                </form>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal modal_outer right_modal fade" id="information_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
        <div class="modal-dialog" role="document">
            <form method="post"  id="get_quote_frm">
            <div class="modal-content ">
                <!-- <input type="hidden" name="email_e" value="admin@filmscafe.in"> -->
                <div class="modal-header">
                    <h2 class="modal-title">Form builder</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body get_quote_view_modal_body">
                <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#formContent" role="tab">Content</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="formContent" role="tabpanel">
                            <div>
                                <div class="form-group">
                                    <label for="formTitle">Form Title</label>
                                    <input type="text" class="form-control" id="formTitle" placeholder="Enter form title here" value="Form Title">
                                </div>
                                
                                <h3>Select Field Type</h3>
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="builder-section" data-type="input">
                                            <img src="{{ asset('assets/images/column-text.cf4cbcb4.png') }}">
                                            <p>Input </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="builder-section" data-type="radiobox">
                                            <img src="{{ asset('assets/images/column-text.cf4cbcb4.png') }}">
                                            <p>Radio Box</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="builder-section" data-type="checkbox">
                                            <img src="{{ asset('assets/images/column-text.cf4cbcb4.png') }}">
                                            <p>Check Box</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="builder-section" data-type="textarea">
                                            <img src="{{ asset('assets/images/column-text.cf4cbcb4.png') }}">
                                            <p>Textarea</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="builder-section" data-type="button">
                                            <img src="{{ asset('assets/images/column-text.cf4cbcb4.png') }}">
                                            <p>Button</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="backgroundColor">Background Color</label>
                                    <input type="color" class="form-control" id="backgroundColor" name="background-color" value="#ffffff" />
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="updateFormcontentBtn btn btn-primary" data-type="" data-info="">Update</button>
                </div>
            </div><!-- //modal-content -->
            </form>
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- Input modal -->
    <div class="modal modal_outer right_modal fade" id="input_modal" data-info="" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="inputModalFrm">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body get_quote_view_modal_body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#multioptions-content" role="tab">Content</a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="multioptions-content" role="tabpanel">
                                <div>
                                
                                    <div class="form-group">
                                            <label>Label Title</label>
                                            <input type="text" id="inputLabelTitle" class="form-control" value="title" placeholder="Enter label title here">
                                        </div>
                                        <div class="form-group">
                                            <label>Field Name</label>
                                            <input type="text" id="inputFieldName" value="title" class="form-control" placeholder="Enter field name here">
                                        </div>
                                        <div class="form-group input_type_field" style="display:none;">
                                            <label>Type</label>
                                            <select id="fieldType">
                                                <option value="text">Text</option>
                                                <option value="number">Number</option>
                                                <option value="email">Email</option>
                                                <option value="password">Password</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputIsRequired">Is Required?</label>
                                            <input type="checkbox" id="inputIsRequired" value="1">
                                        </div>
                                        <div class="form-group">
                                            <label>Minimum Length</label>
                                            <input type="number" id="minlength" class="form-control" placeholder="Enter minimum length of field here">
                                        </div>
                                        <div class="form-group">
                                            <label>Maximum Length</label>
                                            <input type="number" id="maxlength" class="form-control" placeholder="Enter minimum length of field here">
                                        </div>
                                        <div class="length-validation" style="display:none;">
                                            <div class="form-group">
                                                <label>Minimum Value</label>
                                                <input type="number" id="minValue" class="form-control" placeholder="Enter minimum length of field here">
                                            </div>
                                            <div class="form-group">
                                                <label>Maximum Value</label>
                                                <input type="number" id="maxValue" class="form-control" placeholder="Enter minimum length of field here">
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="update_content_btn btn btn-primary" data-type="" data-info="">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- modal -->

    <div class="modal modal_outer right_modal fade" id="checkbox_modal" data-info="" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="multiOptionFrm">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body get_quote_view_modal_body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#multioptions-content" role="tab">Content</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="multioptions-content" role="tabpanel">
                            <div>
                                <div class="form-group">
                                    <label>Label Title</label>
                                    <input required type="text" id="multiOptionLabelTitle" value="title"  class="form-control" placeholder="Enter label title here">
                                </div>
                                <div class="form-group">
                                    <label>Field Name</label>
                                    <input required type="text" id="multiOptionFieldName" value="title" class="form-control" placeholder="Enter field name here">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8"><h5>Add Options</h5></div>
                                        <div class="col-md-4 text-right">
                                        <button class="add_options btn btn-primary"><i class="fa-solid fa-plus"></i></button></div>
                                    </div>
                                    <div class="options-list">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="update_content_btn btn btn-primary" data-type="" data-info="">Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
