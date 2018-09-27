@extends('layouts.dashboard')
@section('staff')

      </header>

      <h1 class="add">Manage User</h1>

<table class="table table-striped table-hover table-bordered" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Department ID</th>
            <th>Role ID</th>
            <th></th>
            <th></th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($users_data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->dept_id}}</td>
                <td>{{$data->role_id}}</td>
                <td><a href="/admin/edit-user/{{$data->id}}" class="btn btn-primary">EDIT</a></td>
                <td><a href="/admin/del/{{$data->id}}" class="btn btn-danger">DELETE</a></td>
                
            </tr>
        @endforeach
       
    </tbody>    
    </table>    
  
    @endsection


    
    

    
    @section('Features')
    <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="{{route('Logged.admin')}}"> <i class="icon-home"></i>Home</a></li>
            <li><a href="{{route('manage_user')}}"> <i class="icon-form"></i>Manage User</a></li>
    @endsection