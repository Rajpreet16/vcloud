 @extends('layouts.dashboard')
 @section('Features')
 <ul id="side-main-menu" class="side-menu list-unstyled">              
         {{-- <li><a href="/store_manager/fill_indent">Fill Indent</a></li> --}}
          <li><a href="/store_manager/history">History</a></li>
         <li><a href="/store_manager/components">Acknowledge</a></li>
         <li><a href="/store_manager/requests">Requests</a></li>
 @endsection
@section('staff')
<style>
.colorsection{
    background-color: #24B3AB;
}
</style>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card"> --}}
            {{-- <div class="card-header">Create Request</div> --}}
          
             {{-- {!! Form::open(['action' => ['IndentController@update', $data->request_id],'method' =>'POST']) !!} --}}
                
             <div class='form-group'>
                {{Form::label('Name' , 'Name')}}
                {{Form::text('Name',$data[0]->name,['class'=>'form-control','placeholder'=>'Name Of the Person','readonly'=>'readonly'])}}
            </div>
            <div class='form-group'>
                {{Form::label('Department Name' , 'Department Name')}}
                {{Form::text('Name',$data[0]->dept_name,['class'=>'form-control','placeholder'=>'Name Of the Person','readonly'=>'readonly'])}}
            </div>
             <div class='form-group'>
                    {{Form::label('item_name' , 'Item name')}}
                    {{Form::text('item_name',$data[0]->item_name,['class'=>'form-control','placeholder'=>'Item Name','disabled'=>'disabled'])}}
                </div>
                <div class='form-group'>
                    {{Form::label('item_count' , 'Count')}}
                    {{Form::number('item_count',$data[0]->item_count,['class'=>'form-control','placeholder'=>'Count of Item','readonly'=>'readonly'])}}
                </div>
                
                <div class='form-group'>
                    {{Form::label('Cost' , 'Cost')}}
                    {{Form::number('item_count',$data[0]->item_count,['class'=>'form-control','placeholder'=>'Estimated Cost',])}}
                </div>

                <div class='form-group'>
                    {{Form::label('Comment' , 'Comment')}}
                    {{Form::textarea('item_count','',['class'=>'form-control','placeholder'=>'Comment',])}}
                </div>

                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Place Order',['class'=> 'btn btn-primary'])}}
            {!! Form::close() !!} 
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</div>
@endsection 





{{-- 
 @extends('layouts.dashboard')


@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">                  
    <li><a href=""> Staff Request</a></li>
    <li><a href="#"> </a></li>
  </ul>

@endsection

@section('funtions')


<div class="container">
                {!! Form::open(['action' => 'LabController@store','method' =>'POST']) !!}
                    <div class='form-group'>
                        {{Form::label('item_name' , 'Item name')}}
                        {{Form::text('item_name','',['class'=>'form-control','placeholder'=>'Item Name'])}}
                    </div>
                    <div class='form-group'>
                        {{Form::label('item_count' , 'Count')}}
                        {{Form::number('item_count',0,['class'=>'form-control','placeholder'=>'Count of Item'])}}
                    </div>
                    {{Form::submit('Place Order',['class'=> 'btn btn-primary'])}}
                {!! Form::close() !!}
    </div>
    
@endsection  --}}
