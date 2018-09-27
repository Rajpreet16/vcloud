@extends('layouts.dashboard')

@section('staff')

<h1 class="add">Home</h1>
<div class="col-md-8">
 <div class="card">
     <div class="card-header">{{ __('Add User +') }}</div>

     <div class="card-body">
         <form method="POST" action="{{ action('LoginController@adminStore') }}">
           
         <div class="form-group row">
                 <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Full Name') }}</label>

                 <div class="col-md-6">
                     <input name="name" id="name" type="text" class="form-control">

     
                 </div>
         </div>
         <div class="form-group row">
                 <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Email') }}</label>

                 <div class="col-md-4">
                     <input id="name" name="email" type="text" class="form-control">

     
                 </div>
         </div>
         <div class="form-group row">
                 <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Password') }}</label>

                 <div class="col-md-6">
                     <input id="name" name="password" type="password" class="form-control">

     
                 </div>
         </div>
         <div class="form-group row">
             <label for="branches" class="col-sm-4 col-form-label text-center">Branches</label>
             <div class="col-md-6">
                 <select class="form-control" id="branch-select" name="dept_id" data-parsley-required="true">
                     @foreach ($drop_down_fetched_from_DB1 as $data) 
                     {
                       <option class="dropdown" value="{{ $data }}">{{ $data }}</option>
                     }
                     @endforeach
                 </select>
             </div>
         </div>
         <div class="form-group row">
             <label for="role" class="col-sm-4 col-form-label text-center">Role</label>
             <div class="col-md-6">
                 <select class="form-control" id="role" name="role_id" data-parsley-required="true">
                     @foreach ($drop_down_fetched_from_DB2 as $data) 
                     {
                       <option class="dropdown" value="{{ $data }}">{{ $data }}</option>
                     }
                     @endforeach
                 </select>
             </div>
         </div>
         <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

             <button type="submit" class="btn btn-primary new">
                         {{ __('Save') }}
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