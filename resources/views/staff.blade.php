
@extends('layouts.dashboard')

@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li><a href="/staff/request">Create Request</a></li>
        <li><a href="/staff/history">Request History</a></li>
        <li><a href="/staff/staffcomponent">Staff component</a></li>
        <li><a href="/staff/received-component">Received Component</a></li>
        {{-- <li><a href="/staff/acknowledge-request">Acknowledge Request</a></li> --}}
@endsection







@section('dashboard_name')
Welcome {{$data['name']}}
    @stop
@section('personal')
<div class="row ">
        <div class="col-md-4 images-wala">
          <img src="{{ URL::to('/img/user.png') }}" height=200px width=200px alt="person" class="img"/>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Personal Info') }}</div>

                <div class="card-body">
                    <form method="POST">
                      
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">{{ __('Full Name :') }}</label>
                            
                            {{ Auth::user()->name }} 
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Role :') }}</label>

                            {{ $data['role'] }} 
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Branch :') }}</label>

                            {{ $data['branch'] }}     
                        </div>

                        
                        
                    </form>
                
            </div>
          </div>
        </div>
@stop
@section('card')
</div>
<div class="box1 pull-left"><h2><span class="counter">{{$data['total']}}</span>+</h2>Total Request</div>
<div class="box2 pull-left"><h2><span class="counter">{{$data['current']}}</span>+</h2>Current Request</div>
<div class="box3 pull-left"><h2><span class="counter">{{$data['pending']}}</span>+</h2>Pending Request</div>
<div class="box4 pull-left"><h2><span class="counter">{{$data['received']}}</span>+</h2>Received Request</div>
</div>
@stop






          

              
        