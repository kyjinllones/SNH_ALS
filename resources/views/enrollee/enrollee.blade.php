@extends('layouts.app')

@section('content')


 <link rel="stylesheet" type="text/css" href="{{asset('css/enrollee.css')}}">
<div class=" login-form">
    @if(isset($enrollee))
            <h1 class="text-danger">Update Masterlist of Mapped and Potential Learners<br>(AF-1)</h1>
            {{Form::model($enrollee,['route'=>['enrollee.update', $enrollee->id],'method'=>'put'])}}
          @else
            <h1 class="text-default">Create a New Masterlist of Mapped and Potential Learners<br>(AF-1)</h1>
            {{Form::open(['route'=>'enrollee.add', 'method'=>'post'])}}
          @endif
      
                <div class="form-group {{$errors->has('name')?' has-error': ''}}"  >
                      <label for="name" class="name">
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
                <div class="form-group {{$errors->has('age')?' has-error': ''}}" >
                      <label for="age" class="age">
                          Age:{{Form::text('age',
                          null, array('class'=>'form-control'))}}
                      </label><br>
                        <span class="text-danger">{{$errors->first('age')}}</span>
                </div>
                <div class="form-group {{$errors->has('mothertongue')?' has-error': ''}} " >
                    <label for="mothertongue">
                      Mother Tongue: {{Form::text('mothertongue',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('mothertongue')}}</span>
                </div>
                <div class="form-group {{$errors->has('ip')?' has-error': ''}}"  >
                    <label for="ip" class="ip">
                        IP(Yes or No:
                      <select name="ip" class="form-control">
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    
                    </label><br>
                    <span class="text-danger">{{$errors->first('ip')}}</span>
                </div>
                <div class="form-group {{$errors->has('religion')?' has-error': ''}} " >
                    <label for="religion">
                      Religion: {{Form::text('religion',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('religion')}}</span>
                </div><br>
                   <button type="text" class="btn btn-default btn-block"><h3>Complete Home Address</h3></button>
        

                  
                 <div class="form-group {{$errors->has('purok')?' has-error': ''}} " >
                    <label for="purok">
                      House No./Street/Sitio/Purok: {{Form::text('purok',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('purok')}}</span>
                </div>
                <div class="form-group {{$errors->has('barangay')?' has-error': ''}} " >
                    <label for="barangay">
                      Barangay: {{Form::text('barangay',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('barangay')}}</span>
                </div>
                 <div class="form-group {{$errors->has('municipality')?' has-error': ''}} " >
                    <label for="municipality">
                     Municipality: {{Form::text('municipality',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('municipality')}}</span>
                </div>
                 <div class="form-group {{$errors->has('province')?' has-error': ''}} " >
                    <label for="province">
                      Province: {{Form::text('province',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('province')}}</span>
                </div>

                <button type="submit" class="btn btn-default btn-block"><h3>Parents</h3></button>
                <div class="form-group {{$errors->has('fathersname')?' has-error': ''}} " >
                    <label for="fathersname">
                      Father's Full Name {{Form::text('fathersname',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('fathersname')}}</span>
                </div>
                <div class="form-group {{$errors->has('mothersname')?' has-error': ''}} " >
                    <label for="mothersname">
                      Mother's Full Name {{Form::text('mothersname',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('mothersname')}}</span>
                </div>
            
                  <div class="form-group {{$errors->has('contactno')?' has-error': ''}} " >
                      <label for="contactno" class="contactno">
                        Contact Number of Learner (if available:{{Form::text('contactno',
                        null, array('class'=>'form-control'))}}
                      </label><br>
                      <span class="text-danger">{{$errors->first('contactno')}}</span>
                  </div>

                <div class="form-group {{$errors->has('lastgradelevel')?' has-error': ''}} " >
                    <label for="lastgradelevel" class="lastgradelevel">
                      Last Grade Level Completed in Formal School:{{Form::text('lastgradelevel',
                        null, array('class'=>'form-control'))}}
                      
                    </label><br>
                    <span class="text-danger">{{$errors->first('lastgradelevel')}}</span>
                </div>
                <div class="form-group {{$errors->has('date')?' has-error': ''}} " >
                    <label for="date" class="date">
                      Date Mapped(mm/dd/yy):{{Form::date('date',
                        null, array('class'=>'form-control'))}}
                    
                    </label><br>
                    <span class="text-danger">{{$errors->first('date')}}</span>
                </div>
                <button type="submit" class="btn btn-default btn-block"><h3>Remarks</h3></button>
                <div class="form-group {{$errors->has('interested')?' has-error': ''}} "  >
                    <label for="interested class="Interested">
                        Interested<br> in ALS (Yes or No):
                      <select name="interested" class="form-control">
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    
                    </label><br>
                    <span class="text-danger">{{$errors->first('interested')}}</span>
                </div><br>
                <div id="if" class="form-group {{$errors->has('preffer')?' has-error': ''}} " >
                    <label for="preffer">
                      If Yes, Preffered Program: {{Form::text('preffer',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('preffer')}}</span>
                </div>
                <div class="form-group {{$errors->has('lrn')?' has-error': ''}} " >
                    <label for="lrn" class="lrn">
                      If Already enrolled in ALs, provide date of first attendance(DOFA) and LRN:{{Form::text('lrn',
                        null, array('class'=>'form-control'))}}
                    
                    </label><br>
                    <span class="text-danger">{{$errors->first('lrn')}}</span>
                </div>

              
      
               <button type="submit" class="btn btn-primary btn-block">Submit</button>
    {{Form::close()}}
    

</div>
          
@endsection