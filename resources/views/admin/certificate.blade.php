@extends('app')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="#">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Certificate</a></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Certificate Information Store</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form method="post" action="{{route('admin.certificate.store')}}" class="form-horizontal">
                    @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Name Of Certificate</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="skill" name="name">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Result</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="result" name="result">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Certificate Link</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="link" name="link">
                                <p class="help-block">If have Any Online Certificate Link!</p>
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
                <h2><i class="icon-tasks"></i><span class="break"></span>Certificate List</h2>
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
                        <th>Name Of Certificate</th>
                        <th>Result</th>
                        <th>Certificate Link</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($certificates as $key=>$data)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$data->name}}</td>
                        <td class="center">{{$data->result}}</td>
                        <td><a href="{{$data->link}}" target="_blank">{{$data->link}}</a></td>
                        <td class="center">
                            @if($data->status==1)
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label label-important">Inactive</span>
                            @endif
                        </td>
                        <td class="center">
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
