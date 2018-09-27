
@extends('layouts.dashboard')
@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">              
        <li><a href="/lab_as/request">Create Request</a></li>
        <li><a href="/lab_as/history">Request History</a></li>
        <li><a href="/lab_as/labcomponent">Lab Component</a></li>
        <li><a href="/lab_as/received-component">Received Components</a></li>
@endsection
@section('staff')<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <h3 style="margin-top:20px;">Lab Components</h3>
                <table class="table table-striped table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>Item Name</th>
                            <th>Spare</th>
                            <th>Working</th>
                            <th>Not Working</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($values as $value)
                            <tr>
                            <td>{{$value->item_name}}</td>
                            <td>{{$value->spare}}</td>
                            <td>{{$value->working}}</td>
                            <td>{{$value->not_working}}</td>
                          </tr>
                    @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection


