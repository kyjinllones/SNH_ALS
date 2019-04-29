
@extends('layouts.app')
@section('content')
 <style type="text/css">

 </style>
  <link rel="stylesheet" type="text/css" href="{{asset('css/enrollee.css')}}">
<div class=" login-form">
  @if(isset($af2))
              <h1 class="text-danger">Update PDF Module</h1>
              {{Form::model($af2,['route'=>['af2.update', $af2->id],'method'=>'put'])}}
          @else
               <h1 class="text-default">ALS ENROLLMENT FORM (AF-2)</h1>
             {{Form::open(['route'=>'af2.add', 'method'=>'post'])}}
          @endif

        @csrf()
		<div class="container">

			<table >
				<thead>

					<tr>
						<td colspan="1">Date :</td>
						<td colspan="4"> 
							<div class="form-group {{$errors->has('date')?' has-error': ''}} " >
		                       {{Form::text('date',
		                      	null, array('class'=>'form-control'))}}
   								<span class="text-danger">{{$errors->first('date')}}</span>
                    		</div>
                    	</td>
						<td colspan="2">LRN (if available) :</td>
						<td colspan="5">
							<div class="form-group {{$errors->has('lrn')?' has-error': ''}} " >
		                       {{Form::text('lrn',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('lrn')}}</span>
                    		</div>
						</td>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td colspan="12" id="hdr"><button type="text" class="btn btn-default btn-block"><h3><b>Personal Information</b><i>(Part I)</i></h3></button></td>
					</tr>

					<tr>
						<td colspan="3"> 
							<div class="form-group {{$errors->has('lastname')?' has-error': ''}} " >
			                       {{Form::text('lastname',
			                      null, array('class'=>'form-control'))}}
	                      			<span class="text-danger">{{$errors->first('lastname')}}</span>
	                    	</div>
                    	</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('firstname')?' has-error': ''}} " >
		                       	{{Form::text('firstname',
		                      	null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('firstname')}}</span>
                    		</div>
                    	</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('midname')?' has-error': ''}} " >
		                       {{Form::text('midname',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('midname')}}</span>
                    		</div>
                    	</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('nameexten')?' has-error': ''}} " >
		                       {{Form::text('nameexten',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('nameexten')}}</span>
                    		</div>
						</td>
					</tr>

					<tr>
						<td colspan="3">Last Name</td>
						<td colspan="3">First Name</td>
						<td colspan="3">Middle Name</td>
						<td colspan="3">Name Extension</td>
					</tr>

					<tr>
						<td colspan="1" rowspan="2"> Address :</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('purok')?' has-error': ''}} " >
		                       {{Form::text('purok',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('purok')}}</span>
                    		</div>
						</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('barangay')?' has-error': ''}} " >
		                       {{Form::text('barangay',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('barangay')}}</span>
                    		</div>
						</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('municipality')?' has-error': ''}} " >
		                       {{Form::text('municipality',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('municipality')}}</span>
                    		</div>
						</td>
						<td colspan="2">
							<div class="form-group {{$errors->has('province')?' has-error': ''}} " >
		                       {{Form::text('province',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('province')}}</span>
                    	</div>
						</td>
						
					</tr>


					<tr>
						<td colspan="3">House No./Street/Sitio</td>
						<td colspan="3">Barangay</td>
						<td colspan="3">Municipality/City</td>
						<td colspan="2">Province</td>
					</tr>

					<tr>
						<td colspan="3"> Birthdate :</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('birthdate')?' has-error': ''}} " >
		                       {{Form::text('birthdate',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('birthdate')}}</span>
                    		</div>
						</td>
						<td colspan="2">Place of Birth (Municipality/City)</td>
						<td colspan="4">
							<div class="form-group {{$errors->has('placebirth')?' has-error': ''}} " >
		                       {{Form::text('placebirth',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('placebirth')}}</span>
                    		</div>
						</td>
					</tr>

					<tr>
						<td colspan="5"> 
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
                		</td>
						
						<td colspan="5">
							<div id="if" class="form-group {{$errors->has('civil')?' has-error': ''}}"  >
							
								<label for="civil" class="civil">
			                        Civil Status
			                      <select name="civil" class="form-control">
			                        <option></option>
									<option>Single</option>
									<option>Married</option>
									<option>Widow/er</option>
									<option>Separated</option>
									<option>Solo Parent</option>
			                      </select>
			                    
			                    </label><br>
			                    <span class="text-danger">{{$errors->first('civil')}}</span>
							
                			</div>
						</td>
						<td colspan="2">
							<div id="if" class="form-group {{$errors->has('pwd')?' has-error': ''}}"  >
							
								<label for="pwd" class="pwd">
			                        PWD
			                      <select name="pwd" class="form-control">
			                       	<option></option>
									<option>Yes</option>
									<option>No</option>
			                      </select>
			                    
			                    </label><br>
			                    <span class="text-danger">{{$errors->first('pwd')}}</span>
							
                			</div>
							
						
						</td>
					</tr>

					<tr>
						<td colspan="3"> Religion : 
							<div class="form-group {{$errors->has('religion')?' has-error': ''}} " >
		                       {{Form::text('religion',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('religion')}}</span>
                    		</div>
						</td>
						<td colspan="3"> Mother Tongue : 
							<div class="form-group {{$errors->has('mothertongue')?' has-error': ''}} " >
		                       {{Form::text('mothertongue',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('mothertongue')}}</span>
                    		</div>
						</td>
						<td colspan="6">IP (Specify ethnic group) :
							<div class="form-group {{$errors->has('ip')?' has-error': ''}} " >
		                       {{Form::text('ip',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('ip')}}</span>
                    		</div>
						</td>
						
					</tr>

					<tr>
						<td colspan="12">Name of Father/Legal Guardian</td>
					</tr>

					<tr>
						<td colspan="3">
							<div class="form-group {{$errors->has('fatherlname')?' has-error': ''}} " >
		                       {{Form::text('fatherlname',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('fatherlname')}}</span>
                    		</div>
						</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('fatherfname')?' has-error': ''}} " >
		                       {{Form::text('fatherfname',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('fatherfname')}}</span>
                    		</div>
						</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('fathermidname')?' has-error': ''}} " >
		                       {{Form::text('fathermidname',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('fathermidname')}}</span>
                    		</div>
						</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('fatheroccupation')?' has-error': ''}} " >
		                       {{Form::text('fatheroccupation',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('fatheroccupation')}}</span>
                    		</div>
						</td>
					</tr>

					<tr>
						<td colspan="3">Last Name :</td>
						<td colspan="3">First Name :</td>
						<td colspan="3">Middle Name :</td>
						<td colspan="3">Occupation :</td>
					</tr>

					<tr>
						<td colspan="12"> Mother's Maiden Name</td>
					</tr>

					<tr>
						<td colspan="3">
							<div class="form-group {{$errors->has('motherlname')?' has-error': ''}} " >
		                       {{Form::text('motherlname',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('motherlname')}}</span>
                    		</div>
						</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('motherfname')?' has-error': ''}} " >
		                       {{Form::text('motherfname',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('motherfname')}}</span>
                    		</div>
						</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('mothermidname')?' has-error': ''}} " >
		                       {{Form::text('mothermidname',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('mothermidname')}}</span>
                    		</div>
						</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('motheroccupation')?' has-error': ''}} " >
		                       {{Form::text('motheroccupation',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('motheroccupation')}}</span>
                    		</div>
						</td>
					</tr>

					<tr>
						<td colspan="3">Last Name :</td>
						<td colspan="3">First Name :</td>
						<td colspan="3">Middle Name :</td>
						<td colspan="3">Occupation :</td>
					</tr>

					<tr>
						<td colspan="12" id="hdr"><button type="text" class="btn btn-default btn-block"><h3><b>Educational Information</b><i>(Part II)</i></h3></button></td>
					</tr>

					<tr>
						<td colspan="12">Last grade level completed</td>
					</tr>

					<tr>
						<td colspan="3" id="lvl" for="elementary" class="elementary"> Elementary :</td>
						
						<td colspan="3">
                		<div id="if" class="form-group {{$errors->has('elementary')?' has-error': ''}}"  >
							<select name="elementary" class="form-control">
								<option></option>
								<option>K</option>
								<option>G-1</option>
								<option>G-2</option>
								<option>G-3</option>
								<option>G-4</option>
								<option>G-5</option>
								<option>G-6</option>
							</select>
							<span class="text-danger">{{$errors->first('elementary')}}</span>
						</div>
						</td>
						<td colspan="3" id="lvl" for="secondary" class="secondary"> Secondary :</td>

						<td colspan="3">
							<div id="if" class="form-group {{$errors->has('secondary')?' has-error': ''}}"  >
							<select name="secondary" class="form-control">
								<option></option>
								<option>G-7</option>
								<option>G-8</option>
								<option>G-9</option>
								<option>G-10</option>
							</select>
							<span class="text-danger">{{$errors->first('secondary')}}</span>
						</div>
						</td>
					</tr>
					<tr>
						<td colspan="6" for="dropschool" class="dropschool">Why did you drop out of school? (For OSY only)</td>
						<td colspan="6">
							<div id="if" class="form-group {{$errors->has('dropschool')?' has-error': ''}}"  >
							<select name="dropschool" class="form-control">
								<option></option>
								<option>No school in Barangay</option>
								<option>School too far from home</option>
								<option>Needed to help family</option>
								<option>Unable to pay for miscellaneous and other expenses</option>
								<option>Others :</option>
							</select>
							<span class="text-danger">{{$errors->first('dropschool')}}</span>
						</div>
							
						</td>
					</tr>

					<tr>
						<td colspan="6" for="alsbefore" class="alsbefore">Have you attended ALS learning sessions before?</td>
						<td colspan="6">
							<div id="if" class="form-group {{$errors->has('alsbefore')?' has-error': ''}}"  >
							<select name="alsbefore" class="form-control">
								<option></option>
								<option>Yes</option>
								<option>No</option>
							</select>
							<span class="text-danger">{{$errors->first('alsbefore')}}</span>
						</div>
						</td>
					</tr>

					<tr>
						<td colspan="12">If Yes :</td>
					</tr>

					<tr>
						<td colspan="3"> Name of the Program:</td>
						<td colspan="3">
							<div class="form-group {{$errors->has('nameprogram')?' has-error': ''}} " >
		                       {{Form::text('nameprogram',
		                      null, array('class'=>'form-control'))}}
 								<span class="text-danger">{{$errors->first('nameprogram')}}</span>
                    		</div>
						</td>
                    	<td colspan="3" for="levelliteracy" class="levelliteracy">Level of Literacy :</td>
						<td colspan="3"> 
							<div id="if" class="form-group {{$errors->has('levelliteracy')?' has-error': ''}}"  >
								<select name="levelliteracy" class="form-control">
									<option></option>
									<option>Basic</option>
									<option>Elem.</option>
									<option>Sec.</option>
									<option>InfEd</option>
								</select>
								<span class="text-danger">{{$errors->first('levelliteracy')}}</span>
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="3">Year Attended :
							<div class="form-group {{$errors->has('yearattended')?' has-error': ''}} " >
		                       {{Form::text('yearattended',
		                      null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('yearattended')}}</span>
                    		</div>
						</td>
						<td colspan="9">Have you completed the Program ? (Yes/No)
							<div class="form-group {{$errors->has('completeprogram')?' has-error': ''}} " >
		                       {{Form::text('completeprogram',
		                      null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('completeprogram')}}</span>
                    		</div>
						</td>
					</tr>

					<tr>
						<td colspan="6" style="text-align: center;">If NO, state the reason :
						<td colspan="6">
							<div class="form-group {{$errors->has('ifyes')?' has-error': ''}} " >
		                       {{Form::text('ifyes',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('ifyes')}}</span>
                    		</div>
                    	</td>
					</tr>

					<tr>
						<td colspan="12" id="hdr"><button type="text" class="btn btn-default btn-block"><h3><b>Accessibility and Availability</b><i>(Part III)</i></h3></button></td>
					</tr>

					<tr>
						<td colspan="5">How far is it from your home to your Learning Center</td>
						<td colspan="4">
							in kms
							<div class="form-group {{$errors->has('inkms')?' has-error': ''}} " >
		                       {{Form::number('inkms',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('inkms')}}</span>
                    		</div>
							
						</td>
						<td colspan="3">
							in hours and mins.
							<div class="form-group {{$errors->has('hoursmins')?' has-error': ''}} " >
		                       {{Form::number('hoursmins',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('hoursmins')}}</span>
                    		</div> 
						</td>
					</tr>

					<tr>
						<td colspan="7" for="gethome" class="gethome">How do you get from yor home to your Learning Center?</td>
						<td colspan="5">
							<div id="if" class="form-group {{$errors->has('gethome')?' has-error': ''}}"  >
								<select name="gethome" class="form-control">
									<option></option>
									<option>Walking</option>
									<option>Motorcycle</option>
									<option>Bicycle</option>
									<option>Others (pls. Specify)</option>
								</select>
								<span class="text-danger">{{$errors->first('gethome')}}</span>
							</div>
						</td>
					</tr>

					<tr>
						<td colspan="12"> When can you attend your Learning Session?</td>
					</tr>

					<tr>
						<td colspan="5"></td>
						<td colspan="1">Monday</td>
						<td colspan="1">Tuesday</td>
						<td colspan="1">Wednesday</td>
						<td colspan="1">Thursday</td>
						<td colspan="1">Friday</td>
						<td colspan="1">Saturday</td>
						<td colspan="1">Sunday</td>
					</tr>

					<tr>
						<td colspan="5" style="text-align: center;">What specific time can you be <br>
						 at your Learning Center
						</td>
						<td colspan="1">
							<div class="form-group {{$errors->has('monday')?' has-error': ''}} " >
		                       {{Form::text('monday',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('monday')}}</span>
                    		</div> 
                    	</td>
						<td colspan="1">
							<div class="form-group {{$errors->has('tuesday')?' has-error': ''}} " >
		                       {{Form::text('tuesday',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('tuesday')}}</span>
                    		</div> 
						</td>
						<td colspan="1">
							<div class="form-group {{$errors->has('wednesday')?' has-error': ''}} " >
		                       {{Form::text('wednesday',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('wednesday')}}</span>
                    		</div> 
						</td>
						<td colspan="1">
							<div class="form-group {{$errors->has('thursday')?' has-error': ''}} " >
		                       {{Form::text('thursday',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('thursday')}}</span>
                    		</div> 
						</td>
						<td colspan="1">
							<div class="form-group {{$errors->has('friday')?' has-error': ''}} " >
		                       {{Form::text('friday',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('friday')}}</span>
                    		</div> 
						</td>
						<td colspan="1">
							<div class="form-group {{$errors->has('saturday')?' has-error': ''}} " >
		                       {{Form::text('saturday',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('saturday')}}</span>
                    		</div> 
						</td>
						<td colspan="1">
							<div class="form-group {{$errors->has('sunday')?' has-error': ''}} " >
		                       {{Form::text('sunday',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('sunday')}}</span>
                    		</div> 
						</td>
					</tr>

					

					<tr>
						<td colspan="6">
							<div class="form-group {{$errors->has('faciname')?' has-error': ''}} " >
		                       {{Form::text('faciname',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('faciname')}}</span>
                    		</div> 
						</td>
						<td colspan="6">
							<div class="form-group {{$errors->has('learners')?' has-error': ''}} " >
		                       {{Form::text('learners',
		                      null, array('class'=>'form-control'))}}
                   
                 
                      			<span class="text-danger">{{$errors->first('learners')}}</span>
                    		</div> 
						</td>
					</tr>

					<tr>
						<td colspan="6" style="text-align: center;">Facilitator : Signature and Date</td>
						<td colspan="6" style="text-align: center;">Learner : Signature and Date</td>
					</tr>
				</tbody>

			</table>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>	

	</div>
</div>
{{Form::close()}}
@endsection