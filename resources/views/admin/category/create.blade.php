@extends('admin.layout.all')
@section('body')
    <div class="col-md-10">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h1>Category  -  Danh Mục</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default bootstrap-admin-no-table-panel">
                    <div class="panel-heading">
                        <div class="text-muted bootstrap-admin-box-title">Tạo Danh Mục/div>
                    </div>
                    <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Tạo Danh Mục Mới</legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="selectError">Chọn danh mục cha</label>
                                    <div class="col-lg-10">
                                        <select id="selectError" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <span class="help-block" style="display: none;">Woohoo!</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="focusedInput">Tên Danh Mục</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="title" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="optionsCheckbox2">Lích Hoạt</label>
                                    <div class="col-lg-10">
                                        <label>
                                            <input type="checkbox" id="optionsCheckbox2" value="option1">
                                            Kích Hoạt
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-lg-2 control-label" for="inputError">Input with warning</label>
                                    <div class="col-lg-10">
                                        <input type="text" id="inputWarning" class="form-control">
                                        <span class="help-block">Something may have gone wrong</span>
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-lg-2 control-label" for="inputError">Input with error</label>
                                    <div class="col-lg-10">
                                        <input type="text" id="inputError" class="form-control">
                                        <span class="help-block">Please correct the error</span>
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-lg-2 control-label" for="inputError">Input group with error</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" id="inputError" class="form-control">
                                            <span class="input-group-addon">%</span>
                                        </div>
                                        <span class="help-block">Please correct the error</span>
                                    </div>
                                </div>
                                <div class="form-group has-success">
                                    <label class="col-lg-2 control-label" for="inputError">Input with success</label>
                                    <div class="col-lg-10">
                                        <input type="text" id="inputSuccess" class="form-control">
                                        <span class="help-block">Woohoo!</span>
                                    </div>
                                </div>
                                <div class="form-group has-success">
                                    <label class="col-lg-2 control-label" for="selectError">Select with success</label>
                                    <div class="col-lg-10">
                                        <select id="selectError" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <span class="help-block">Woohoo!</span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="reset" class="btn btn-default">Cancel</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default bootstrap-admin-no-table-panel">
                    <div class="panel-heading">
                        <div class="text-muted bootstrap-admin-box-title">Form Example</div>
                    </div>
                    <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Form Components</legend>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="typeahead">Text input </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control col-md-6" id="typeahead" autocomplete="off" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                        <p class="help-block">Start typing to activate auto complete!</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="date01">Date input</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control datepicker" id="date01" value="02/16/12">
                                        <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="optionsCheckbox">Checkbox</label>
                                    <div class="col-lg-10">
                                        <label class="uniform">
                                            <input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1">
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="select01">With Chosen plugin</label>
                                    <div class="col-lg-10">
                                        <select id="select01" class="chzn-select" style="width: 150px">
                                            <option>something</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="select02">With Selectize plugin</label>
                                    <div class="col-lg-10">
                                        <select id="select02" class="selectize-select" style="width: 150px">
                                            <option value="1">something</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="fileInput">File input</label>
                                    <div class="col-lg-10">
                                        <input class="form-control uniform_on" id="fileInput" type="file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="textarea-wysihtml5">Textarea WYSIWYG</label>
                                    <div class="col-lg-10">
                                        <textarea id="textarea-wysihtml5" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="reset" class="btn btn-default">Cancel</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default bootstrap-admin-no-table-panel">
                    <div class="panel-heading">
                        <div class="text-muted bootstrap-admin-box-title">Form Wizard</div>
                    </div>
                    <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                        <div id="rootwizard">
                            <div class="navbar">
                                <div class="container">
                                    <ul>
                                        <li><a href="#tab1" data-toggle="tab">Step 1</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Step 2</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Step 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="bar" class="progress progress-striped active">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="tab1">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput1">Name</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput1" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput2">Email</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput2" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput3">Phone</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput3" type="text" value="">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput4">Address</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput4" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput5">City</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput5" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput6">State</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput6" type="text" value="">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput7">Company Name</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput7" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput8">Contact Name</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput8" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="focusedInput9">Contact Phone</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="focusedInput9" type="text" value="">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <ul class="pager wizard">
                                    <li class="previous first" style="display:none;"><a href="javascript:void(0);">First</a></li>
                                    <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
                                    <li class="next"><a href="javascript:void(0);">Next</a></li>
                                    <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer_script')
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
@stop