@extends('layouts.dashboard')
@section('staff')
<h1 class="add">Home</h1>
<div class="col-md-8">
 <div class="card">
     <div class="card-header">{{ __('Edit User ') }}</div>

     <div class="card-body">
         
     <form method="POST" action="/admin/edit-user/{{$user_data->id}}">
           
         <div class="form-group row">
                 <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Name') }}</label>

                 <div class="col-md-6">
                     <input name="name" id="name" type="text" class="form-control" value="{{$user_data->name}}">

     
                 </div>
         </div>
         <div class="form-group row">
                 <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Email') }}</label>

                 <div class="col-md-4">
                     <input id="name" name="email" type="text" class="form-control" value="{{$user_data->email}}">

     
                 </div>
         </div>
         <div class="form-group row">
                 <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Department ID') }}</label>

                 <div class="col-md-6">
                 <!-- <input id="name" name="email" type="text" class="form-control" value="{{$user_data->dept_id}}"> -->
                 <select class="form-control" id="branch-select" name="dept_id" data-parsley-required="true">
                     @foreach ($drop_down_fetched_from_DB1 as $data) 
                     {
                       <option class="dropdown" value="{{ $data }}" {{ $data == $user_data->dept_id ? 'selected="selected"' : '' }}>{{ $data }}</option>
                     }
                     @endforeach
                 </select>
                 
             </div>
         </div>
         <div class="form-group row">
                 <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Role ID') }}</label>

                 <div class="col-md-6">
                 <!-- <input id="name" name="email" type="text" class="form-control" value="{{$user_data->role_id}}"> -->
                 <select class="form-control" id="branch-select" name="role_id" data-parsley-required="true">
                     @foreach ($drop_down_fetched_from_DB2 as $data) 
                     {
                       <option class="dropdown" value="{{ $data }}" {{$data == $user_data->role_id ? 'selected="selected"' : ''}}>{{ $data }}</option>
                     }
                     @endforeach
                 </select>
                 
             </div>
         </div>
         </div>
         
         <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

         <button type="submit" class="btn btn-primary new">
             {{ __('Edit') }}
         </button>

             
             
         </form>
     
 </div>
</div>
</div>

@endsection      
@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li><a href="{{route('Logged.admin')}}"> <i class="icon-home"></i>Home</a></li>
        <li><a href="{{route('manage_user')}}"> <i class="icon-form"></i>Manage User</a></li>
@endsection