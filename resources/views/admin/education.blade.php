@extends('app')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="#">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Education</a></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Education Information Store</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form method="post" action="" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Degree Name</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="skill" name="name">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Institution Name</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="institution" name="institution">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Passing Year</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="passing">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Result</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="result" name="result">
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection