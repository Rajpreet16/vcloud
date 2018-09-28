
@extends('layouts.dashboard')
@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">              
        <li><a href="/lab_as/request">Create Request</a></li>
        <li><a href="/lab_as/history">Request History</a></li>
        <li><a href="/lab_as/labcomponent">Lab Component</a></li>
        <li><a href="/lab_as/received-component">Received Components</a></li>
@endsection
@section('staff')<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <br>
                <br>
                <h3>History</h3>
                <table class="table table-striped table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>Order</th>
                            <th>Count</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($values as $value)
                            <tr>
                            <td>{{$value->item_name}}</td>
                            <td>{{$value->item_count}}</td>
                            <td>@if($value->status_id === 1)
                                    Sent for Approval
                                @endif
                                @if($value->status_id === 2)
                                    Request forwarded
                                @endif
                                @if($value->status_id === 3)
                                    Approved by HOD
                                @endif
                                @if($value->status_id === 4)
                                    Approved by Principal
                                @endif
                                @if($value->status_id === 5)
                                    Order Placed
                                @endif
                                @if($value->status_id === 6)
                                    Order Received
                                @endif
                                @if($value->status_id === 7)
                                    ACK from Stack Holder
                                @endif</td>
                          </tr>
                    @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection

