@extends('app')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="#">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">User Details</a></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>User Details Information Store</h2>
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
                            <label class="control-label" for="typeahead">Profile</label>
                            <div class="controls">
                                <input type="file" class="span6 typeahead" id="skill" name="profile">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Phone</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="institution" name="phone">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Emergency Contact</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="passing" name="mobile">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Email(Optional)</label>
                            <div class="controls">
                                <input type="email" class="span6 typeahead" id="result" name="email">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Address</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="result" name="address">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="textarea2">Summary</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3" name="Summary"></textarea>
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
                <h2><i class="icon-tasks"></i><span class="break"></span>User Details</h2>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Email(Optional)</th>
                        <th>Profile</th>
                        <th>Contact</th>
                        <th>Contact(Optional)</th>
                        <th>Address</th>
                        <th>Summary</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Md Anikul Islam</td>
                        <td>anikul.islam.binju@gmail.com</td>
                        <td>anikul.islam.binju@gmail.com</td>
                        <td>Logo</td>
                        <td>01905256528</td>
                        <td>01642953542</td>
                        <td>Merul Badda,DIT,Dhaka 1212</td>
                        <td>He is good boy to ...</td>td>
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
