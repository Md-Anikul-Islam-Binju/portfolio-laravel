@extends('app')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="#">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Personal Information</a></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Personal Information Store</h2>
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
                            <label class="control-label" for="typeahead">Father Name</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="skill" name="father_name">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Mother Name</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="skill" name="mother_name">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Date Of Birth</label>
                            <div class="controls">
                                <input type="date" class="span6 typeahead" id="passing" name="birthdate">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Nationality</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="nationality">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Religion</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="religion">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Hobby</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="hobby">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Blood Group</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="blood_group">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">National Id</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="national_id">
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

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="icon-tasks"></i><span class="break"></span>Personal Information Details</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Date Of Birth</th>
                        <th>Nationality</th>
                        <th>Religion</th>
                        <th>Hobby</th>
                        <th>Blood Group</th>
                        <th>National Id</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Md Edris Mia</td>
                        <td>Amena Begum</td>
                        <td>01-01-1996</td>
                        <td>Bangladeshi</td>
                        <td>Islam</td>
                        <td>Football</td>
                        <td>O+</td>
                        <td>2587412586</td>
                        <td class="center">
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
