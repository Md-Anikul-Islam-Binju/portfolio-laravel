@extends('app')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="#">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Social Link</a></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Social Link Information Store</h2>
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
                            <label class="control-label" for="typeahead">Facebook</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="skill" name="facebook">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Linkedin</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="skill" name="linkedin">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Instagram</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="instagram">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">GitHub</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="github">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">GitLab(Optional)</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="gitlab">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Twitter</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="twitter">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Website(Optional)</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="website">
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
                <h2><i class="icon-tasks"></i><span class="break"></span>Social Link List</h2>
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
                        <th>Facebook</th>
                        <th>Linkedin</th>
                        <th>GitHub</th>
                        <th>GitLab(Optional)</th>
                        <th>Website(Optional)</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>http://127.0.0.1:8000/admin-user-details</td>
                        <td>http://127.0.0.1:8000/admin-user-details</td>
                        <td>http://127.0.0.1:8000/admin-user-details</td>
                        <td>http://127.0.0.1:8000/admin-user-details</td>
                        <td>http://127.0.0.1:8000/admin-user-details</td>
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
