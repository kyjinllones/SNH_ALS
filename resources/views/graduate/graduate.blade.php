@extends('layouts.app')
@section('content')
 <style type="text/css">
     .login-form {
        margin-bottom: 0px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        background-image: url(img/background.jpg)

    }
    .name{
      width: 550px;
    }
    .form-group{
      float: left;
    }
    #if{
      float: right;
    }
    #add{
      float: left;
    }
  </style>
<div class="login-form">
@if(isset($graduate))
    <h1 class="text-danger">Update LEARNER'S PERMANENT RECORD (AF-5)</h1>
    {{Form::model($graduate,['route'=>['graduate.update', $graduate->id],'method'=>'put'])}}
@else
     <h1 class="text-default">Create a LEARNER'S PERMANENT RECORD<br> (AF-5)</h1>
    {{Form::open(['route'=>'graduate.add', 'method'=>'post'])}}
@endif
                <div class="form-group {{$errors->has('lastname')?' has-error': ''}}"  >
                    <label for="lastname" class="lastname">
                      Last Name:{{Form::text('lastname',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('lastname')}}</span>
                </div>
                <div class="form-group {{$errors->has('firstname')?' has-error': ''}}"  >
                    <label for="firstname" class="firstname">
                      First Name:{{Form::text('firstname',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('firstname')}}</span>
                </div>
                <div class="form-group {{$errors->has('midname')?' has-error': ''}}"  >
                    <label for="midname" class="midname">
                      Middle Name:{{Form::text('midname',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('midname')}}</span>
                </div>
                <div class="form-group {{$errors->has('nameexten')?' has-error': ''}}"  >
                    <label for="nameexten" class="nameexten">
                      Extension Name:{{Form::text('nameexten',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('nameexten')}}</span>
                </div>
               
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

                
                <div class="form-group {{$errors->has('birthdate')?' has-error': ''}}"  >
                    <label for="birthdate" class="birthdate">
                      Date of Birth:{{Form::date('birthdate',
                      null, array('class'=>'form-control'))}}
                    </label><br>
                    <span class="text-danger">{{$errors->first('birthdate')}}</span>
                </div>
                <div id="if" class="form-group {{$errors->has('sex')?' has-error': ''}}"  >
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
                <button type="text" class="btn btn-default btn-block"><h3>Learner's Educational Status</h3></button>
                 <div class="form-group {{$errors->has('progenroll')?' has-error': ''}} " >
                    <label for="progenroll">
                     Program Enrolleed: {{Form::text('progenroll',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('progenroll')}}</span>
                </div>
                 <div class="form-group {{$errors->has('delmode')?' has-error': ''}} " >
                    <label for="delmode">
                     Delivery Mode: {{Form::text('delmode',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('delmode')}}</span>
                </div>
                 <div class="form-group {{$errors->has('clcname')?' has-error': ''}} " >
                    <label for="clcname">
                     CLC Name: {{Form::text('clcname',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('clcname')}}</span>
                </div>
                 <div class="form-group {{$errors->has('clcaddress')?' has-error': ''}} " >
                    <label for="clcaddress">
                     CLC Address: {{Form::text('clcaddress',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('clcaddress')}}</span>
                </div>
                 <div class="form-group {{$errors->has('namefaci')?' has-error': ''}} " >
                    <label for="namefaci">
                     Name Of Facilitator: {{Form::text('namefaci',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('namefaci')}}</span>
                </div>
                 <div class="form-group {{$errors->has('calenyear')?' has-error': ''}} " >
                    <label for="calenyear">
                     Calendar Year: {{Form::text('calenyear',
                      null, array('class'=>'form-control'))}}
                   
                    </label><br>
                      <span class="text-danger">{{$errors->first('calenyear')}}</span>
                </div>
                <table border="2">
              <thead id="th2">
                <tr>
                  <th rowspan="3" colspan="6">ASSESSMENT RESULTS</th>
                  <th colspan="6">Score</th>
                </tr>

                <tr>
                  <th colspan="3" for="pispre">Pre</th>
                  <th colspan="3" for="pispost">Post</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td colspan="6">PIS Score</td>
                  <td colspan="3" >
                    <div class="form-group {{$errors->has('pispre')?' has-error': ''}} " >
                       {{Form::number('pispre',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('pispre')}}</span>
                    </div>
                  </td>
                  <td colspan="3"> 
                    <div class="form-group {{$errors->has('pispost')?' has-error': ''}} " >
                       {{Form::number('pispost',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('pispost')}}</span>
                    </div></td>
                </tr>

                <tr id="tr3">
                  <td colspan="6">Assessment for Basic Literacy (ABL)</td>
                  <td colspan="3"  for="blpre">Pre</td>
                  <td colspan="3"  for="blpost">Post</td>
                </tr>

                <tr>
                  <td colspan="6">Basic Literate</td>
                  <td colspan="3">
                    <div class="form-group {{$errors->has('blpre')?' has-error': ''}} " >
                       {{Form::number('blpre',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('blpre')}}</span>
                    </div></td>
                  <td colspan="3">
                    <div class="form-group {{$errors->has('blpost')?' has-error': ''}} " >
                       {{Form::number('blpost',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('blpost')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="6">Neo Literate</td>
                  <td colspan="3">
                    <div class="form-group {{$errors->has('nlpre')?' has-error': ''}} " >
                       {{Form::number('nlpre',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('nlpre')}}</span>
                    </div>
                  </td>
                  <td colspan="3">
                    <div class="form-group {{$errors->has('nlpost')?' has-error': ''}} " >
                       {{Form::number('nlpost',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('nlpost')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="6">Post Literate</td>
                  <td colspan="3">
                    <div class="form-group {{$errors->has('postlpre')?' has-error': ''}} " >
                       {{Form::number('postlpre',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('postlpre')}}</span>
                    </div>
                  </td>
                  <td colspan="3">
                    <div class="form-group {{$errors->has('postlpost')?' has-error': ''}} " >
                       {{Form::number('postlpost',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('postlpost')}}</span>
                    </div>
                  </td>
                </tr>

                <tr id="tr3">
                  <td colspan="6">Functional Literacy Assessment</td>
                  <td colspan="3">Pre</td>
                  <td colspan="3">Post</td>
                </tr>

                <tr>
                  <td colspan="6">FLT Score in Reading</td>
                  <td colspan="3">
                       <div class="form-group {{$errors->has('fltreadingpre')?' has-error': ''}} " >
                       {{Form::number('fltreadingpre',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('fltreadingpre')}}</span>
                    </div>
                  </td>
                  <td colspan="3"> 
                    <div class="form-group {{$errors->has('fltreadingpost')?' has-error': ''}} " >
                       {{Form::number('fltreadingpost',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('fltreadingpost')}}</span>
                    </div></td>
                </tr>

                <tr>
                  <td colspan="6">FLT Score in Numeracy</td>
                  <td colspan="3"> 
                    <div class="form-group {{$errors->has('fltnumeracypre')?' has-error': ''}} " >
                       {{Form::number('fltnumeracypre',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('fltnumeracypre')}}</span>
                    </div></td>
                  <td colspan="3">
                       <div class="form-group {{$errors->has('fltnumeracypost')?' has-error': ''}} " >
                       {{Form::number('fltnumeracypost',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('fltnumeracypost')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="6">FLT Score in Writing</td>
                  <td colspan="3"> 
                    <div class="form-group {{$errors->has('fltwritingpre')?' has-error': ''}} " >
                       {{Form::number('fltwritingpre',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('fltwritingpre')}}</span>
                    </div></td>
                  <td colspan="3">
                       <div class="form-group {{$errors->has('fltwritingpost')?' has-error': ''}} " >
                       {{Form::number('fltwritingpost',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('fltwritingpost')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="6">FLT Score in Listening & Speaking</td>
                  <td colspan="3">
                       <div class="form-group {{$errors->has('fltlistenpre')?' has-error': ''}} " >
                       {{Form::number('fltlistenpre',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('fltlistenpre')}}</span>
                    </div>
                  </td>
                  <td colspan="3">
                       <div class="form-group {{$errors->has('fltlistenpost')?' has-error': ''}} " >
                       {{Form::number('fltlistenpost',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('fltlistenpost')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="6">Overall Score</td>
                  <td colspan="3"> 
                    <div class="form-group {{$errors->has('overallpre')?' has-error': ''}} " >
                       {{Form::number('overallpre',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('overallpre')}}</span>
                    </div></td>
                  <td colspan="3">
                       <div class="form-group {{$errors->has('overallpost')?' has-error': ''}} " >
                       {{Form::number('overallpost',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('overallpost')}}</span>
                    </div>
                  </td>
                </tr>

                <tr id="tr3">
                  <td colspan="6">InfEd</td>
                  <td colspan="6">Remarks</td>
                </tr>

                <tr>
                  <td colspan="6"> 
                    <div class="form-group {{$errors->has('infed1')?' has-error': ''}} " >
                       {{Form::text('infed1',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('infed1')}}</span>
                    </div></td>
                  <td colspan="6">
                   <div class="form-group {{$errors->has('infed2')?' has-error': ''}} " >
                       {{Form::text('infed2',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('infed2')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="6"> 
                    <div class="form-group {{$errors->has('infed3')?' has-error': ''}} " >
                       {{Form::text('infed3',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('infed3')}}</span>
                    </div>
                  </td>
                  <td colspan="6">
                   <div class="form-group {{$errors->has('remarks1')?' has-error': ''}} " >
                       {{Form::text('remarks1',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('remarks1')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="6"> 
                    <div class="form-group {{$errors->has('remarks2')?' has-error': ''}} " >
                       {{Form::text('remarks2',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('remarks2')}}</span>
                    </div>
                  </td>
                  <td colspan="6">
                   <div class="form-group {{$errors->has('remarks3')?' has-error': ''}} " >
                       {{Form::text('remarks3',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('remarks3')}}</span>
                    </div>
                  </td>
                </tr>

                <tr id="tr3">
                  <td colspan="8">A & E STATUS</td>
                  <td colspan="4">Remarks</td>
                </tr>

                <tr>
                  <td colspan="8">Program Status</td>
                  <td colspan="4"> 
                    <div class="form-group {{$errors->has('programs')?' has-error': ''}} " >
                       {{Form::text('programs',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('programs')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="8">Test Taken</td>
                  <td colspan="4"> 
                    <div class="form-group {{$errors->has('testtaken')?' has-error': ''}} " >
                       {{Form::text('testtaken',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('testtaken')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="8">Date of Examination</td>
                  <td colspan="4">
                   <div class="form-group {{$errors->has('dateexam')?' has-error': ''}} " >
                       {{Form::text('dateexam',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('dateexam')}}</span>
                    </div></td>
                </tr>

                <tr>
                  <td colspan="8">Testing Center</td>
                  <td colspan="4">
                       <div class="form-group {{$errors->has('testingcenter')?' has-error': ''}} " >
                       {{Form::text('testingcenter',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('testingcenter')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="8">Location of Testing Center</td>
                  <td colspan="4">
                     <div class="form-group {{$errors->has('locationcenter')?' has-error': ''}} " >
                       {{Form::text('locationcenter',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('locationcenter')}}</span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="8">Accreditation and Equivalency (A&E) Test Result</td>
                  <td colspan="4">
                   <div class="form-group {{$errors->has('aeresult')?' has-error': ''}} " >
                       {{Form::text('aeresult',
                      null, array('class'=>'form-control'))}}
                   
                 
                      <span class="text-danger">{{$errors->first('aeresult')}}</span>
                    </div>
                  </td>
                </tr>

                
              </tbody>
        </table>
              
   
<button type="submit" class="btn btn-primary btn-block">Submit</button>
        
    

{{Form::close()}}
</div>



@endsection