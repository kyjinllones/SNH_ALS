@extends('layouts.app')
@section('content')
 <link rel="stylesheet" type="text/css" href="{{asset('css/clc.css')}}">
<div class="login-form">
@if(isset($clc))
    <h1 class="text-danger">Update CLC/Schedule</h1>
    {{Form::model($clc,['route'=>['clcs.update', $clc->id],'method'=>'put'])}}
@else
     <h1 class="text-default">Create a New CLC/Schedule</h1>
    {{Form::open(['route'=>'clc.add', 'method'=>'post'])}}
@endif

   <div class="form-group">
            <label for="place" class="place">
              Place of Registration Center:{{Form::text('place',
              null, array('class'=>'form-control'))}}
            </label><br>
            <span class="text-danger">{{$errors->first('place')}}</span>
        </div>


        <div class="form-group {{$errors->has('testing')?' has-error': ''}}">
          <label for="testing" class="testing">
            Testing Center: {{Form::text('testing',
            null, array('class'=>'form-control'))}}
          </label><br>
            <span class="text-danger">{{$errors->first('testing')}}</span>
        </div>

        <div class="form-group {{$errors->has('barangay')?' has-error': ''}}">
            <label for="barangay">
              Barangay:{{Form::text('barangay',
              null, array('class'=>'form-control'))}}
            </label><br>
            <span class="text-danger">{{$errors->first('barangay')}}</span>
        </div>

        <div class="form-group {{$errors->has('municipality')?' has-error': ''}}">
            <label for="municipality">
                Municipality/City:{{Form::text('municipality',
                null, array('class'=>'form-control'))}}
            </label><br>
              <span class="text-danger">{{$errors->first('municipality')}}</span>
        </div>
      <div class="form-group {{$errors->has('lrn')?' has-error': ''}}"> 
          <label for="lrn">
            LRN:{{Form::text('lrn',
            null, array('class'=>'form-control'))}}
          </label><br>
          <span class="text-danger">{{$errors->first('lrn')}}</span>
      </div>
      <div class="form-group {{$errors->has('name')?' has-error': ''}}">
          <label for="name">
            Full Name:{{Form::text('name',
            null, array('class'=>'form-control'))}}
          </label><br>
          <span class="text-danger">{{$errors->first('name')}}</span>
      </div>
      <div class="form-group {{$errors->has('sex')?' has-error': ''}}"  >
                    <label for="sex" class="sex">
                        Sex:
                      <select name="sex" class="form-control">
                        <option></option>
                        <option>Female</option>
                        <option>Male</option>
                      </select>
                    
                    </label><br>
                    <span class="text-danger">{{$errors->first('sex')}}</span>
      </div>
      <div class="form-group {{$errors->has('birthdate')?' has-error': ''}}"  >
                    <label for="birthdate" class="birthdate">
                      Date of Birth:{{Form::date('birthdate',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('birthdate')}}</span>
      </div>
      <button type="text" class="btn btn-default btn-block"><h3>CLC DETAILS</h3></button>
       <div class="form-group {{$errors->has('clcname')?' has-error': ''}}"  >
                    <label for="clcname" class="clcname">
                      CLC Name:{{Form::text('clcname',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('clcname')}}</span>
      </div>
       <div class="form-group {{$errors->has('clctype')?' has-error': ''}}"  >
                    <label for="clctype" class="clctype">
                      CLC Type:{{Form::text('clctype',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('clctype')}}</span>
      </div>
       <div class="form-group {{$errors->has('clcbarangay')?' has-error': ''}}"  >
                    <label for="clcbarangay" class="clcbarangay">
                      Barangay:{{Form::text('clcbarangay',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('clcbarangay')}}</span>
      </div>
       <div class="form-group {{$errors->has('municipal')?' has-error': ''}}"  >
                    <label for="municipal" class="municipal">
                      Municipal:{{Form::text('municipal',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('municipal')}}</span>
      </div>
       <div class="form-group "  >
                    <label for="leveltest" class="leveltest">
                      A&E Test Level Registered:{{Form::text('leveltest',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('leveltest')}}</span>
      </div>
      <div class="form-group "  >
                    <label for="datereg" class="datereg">
                      Date Registered:{{Form::text('datereg',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('datereg')}}</span>
      </div>
      <div class="form-group "  >
                    <label for="dateexam" class="dateexam">
                      Date of Examination:{{Form::date('dateexam',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('dateexam')}}</span>
      </div>


      
  <div class="">
   
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
   
  </div>
 
   

{{Form::close()}}
</div>

@endsection