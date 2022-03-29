<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <title>Dynamic Form</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Form Title</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-success mt-3" id="modal_view_right" data-toggle="modal" data-target="#information_modal"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div id="formBuilderArea">

                    </div>
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
                        <div class="form-row">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="content-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Content</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="style-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Style</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="content-tab">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Form Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter form title here">
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
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="style-tab">
                                <div class="form-group">
                                    <label for="backgroundColor">Background Color</label>
                                    <input type="color" class="form-control" id="backgroundColor" name="background-color">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-light mr-auto" data-dismiss="modal"><i class="fas fa-window-close mr-2"></i> Cancel</button>
                        <button type="submit" class="btn btn-primary" id="submit_btn">Submit</button>
                    </div>

                </div><!-- //modal-content -->
                </form>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!-- Input modal -->
        <div class="modal modal_outer right_modal fade" id="input_modal" data-info="" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <form id="inputFrm">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body get_quote_view_modal_body">
                            <div class="form-row">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="input-content-tab" data-toggle="tab" href="#content" role="tab" aria-controls="input-content-tab" aria-selected="true">Content</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="style-tab" data-toggle="tab" href="#validations" role="tab" aria-controls="input-validations-tab" aria-selected="false">Validations</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="content" role="tabpanel" aria-labelledby="input-content-tab">
                                        <div class="form-group">
                                            <label>Label Title</label>
                                            <input type="text" id="inputLabelTitle" class="form-control" data-info="" placeholder="Enter label title here">
                                        </div>
                                        <div class="form-group">
                                            <label>Field Name</label>
                                            <input type="text" id="inputFieldName" class="form-control" placeholder="Enter field name here">
                                        </div>
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select id="fieldType">
                                                <option value="text">Text</option>
                                                <option value="number">Number</option>
                                                <option value="email">Email</option>
                                                <option value="password">Password</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="validations  " role="tabpanel" aria-labelledby="input-validations-tab">
                                        <div class="form-group">
                                            <label for="inputIsRequired">Is Required?</label>
                                            <input type="checkbox" id="inputIsRequired" class="form-control" placeholder="Enter label title here" value="1">
                                        </div>
                                        <div class="form-group">
                                            <label>Minimum Length</label>
                                            <input type="number" id="minlength" class="form-control" placeholder="Enter minimum length of field here">
                                        </div>
                                        <div class="form-group">
                                            <label>Maximum Length</label>
                                            <input type="number" id="maxlength" class="form-control" placeholder="Enter minimum length of field here">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="update_content_btn btn btn-primary" data-type="" data-info="">Update</button>
                        </div>
                    </div><!-- //modal-content -->
                </form>
            </div><!-- modal-dialog -->
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
                        <div class="form-row">
                            <ul class="nav nav-tabs" id="multiOptionsTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="multioptions-content-tab" data-toggle="tab" href="#multioptions-content" role="tab" aria-controls="multioptions-content-tab" aria-selected="false">Content</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="multiOptionsValidationsTab" data-toggle="tab" href="#multiOptionsValidations" role="tab" aria-controls="multioptions-validations-tab" aria-selected="false">Validations</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="multiOptionsTabContent">
                                <div class="tab-pane fade show active" id="multioptions-content" role="tabpanel" aria-labelledby="multioptions-content-tab">
                                    <div>
                                        <div class="form-group">
                                            <label>Label Title</label>
                                            <input type="text" id="multiOptionLabelTitle" class="form-control" placeholder="Enter label title here">
                                        </div>
                                        <div class="form-group">
                                            <label>Field Name</label>
                                            <input type="text" id="multiOptionFieldName" class="form-control" placeholder="Enter field name here">
                                        </div>
                                        <div class="form-group">
                                            <h5>Add Options</h5>
                                            <button class="add_options"><i class="fa-solid fa-plus"></i></button>
                                            <div class="options-list">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="multiOptionsValidations" role="tabpanel" aria-labelledby="multioptions-validations-tab">
                                    <div class="form-group">
                                            <label for="multiOptionIsRequired">Is Required?</label>
                                            <input type="checkbox" name="isRequired" id="multiOptionIsRequired" class="form-control" placeholder="Enter label title here" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="update_content_btn btn btn-primary" data-type="" data-info="">Update</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <!-- Button Modal -->
        <div class="modal modal_outer right_modal fade" id="button_modal" data-info="" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <form id="multiOptionFrm">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body get_quote_view_modal_body">
                        <div class="form-row">
                            <ul class="nav nav-tabs" id="buttonTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="btn-content-tab" data-toggle="tab" href="#btnContent" role="tab" aria-controls="btn-content-tab" aria-selected="false">Content</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="buttonTabContent">
                                <div class="tab-pane fade show active" id="btnContent" role="tabpanel" aria-labelledby="btn-content-tab">
                                    <div>
                                        <div class="form-group">
                                            <label>Button Text</label>
                                            <input type="text" id="buttonText" class="form-control inputLabelTitle" placeholder="Enter button text here">
                                        </div>
                                        <div class="form-group">
                                            <label>Button Background Color</label>
                                            <input type="color" id="buttonbgColor" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Button Font Color</label>
                                            <input type="color" id="buttonFontColor" class="form-control">
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
                </div>
                </form>
            </div>
        </div>


        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>
