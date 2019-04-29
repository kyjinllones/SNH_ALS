@extends('layouts.app')
@section('content')
<style type="text/css">
	#img{
		width: 90px;
		padding: 10%;
	}
	#img2 {
		width: 120px;
		padding: 10%;
	}
</style>
<div class="container-fluid">
		<div class="container">

			<table class="col-md-12">
				<thead>
					<tr>
						<td colspan="3" id="img">
							<img src="{{asset('img/logo1.png')}}" id="img">
						</td>
						   <td colspan="6"><p style="text-align: center; font-family: arial; font-size: 1em;"><br>
						   Republic of The Philippines<br>
	   								Department of Education<br>
	    							Region VIII<br>
	    							Division of Leyte<br>
	    							Alternative Learning System
	  
	  						</p>
							<p style="text-align: center;"><b>ALS Enrollment Form (AF-2)</b></p>
        					<p style="text-align: center;">(S.Y. ________)</p></td>
        					<td colspan="3">
        						<img src="{{asset('img/logo2.png')}}" id="img2">
        					</td>

					</tr>

					<tr>
						<td colspan="1">Date :</td>
						<td colspan="4"><input type="text" name="" value="{{$af2s->date}}"></td>
						<td colspan="2">LRN (if available) :</td>
						<td colspan="5"><input type="text" name="" value="{{$af2s->lrn}}"></td>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td colspan="12" id="hdr"><b>Personal Information</b><i>(Part I)</i></td>
					</tr>

					<tr>
						<td colspan="3"><input type="text" name="" value="{{$af2s->lastname}}"></td>
						<td colspan="3"><input type="text" name="" value="{{$af2s->firstname}}"></td>
						<td colspan="3"><input type="text" name="" value="{{$af2s->midname}}"></td>
						<td colspan="3"><input type="text" name="" value="{{$af2s->nameexten}}"></td>
					</tr>

					<tr>
						<td colspan="3">Last Name</td>
						<td colspan="3">First Name</td>
						<td colspan="3">Middle Name</td>
						<td colspan="3">Name Extension</td>
					</tr>

					<tr>
						<td colspan="1" rowspan="2">Address :</td>
						<td colspan="3"><input type="" name="" value="{{$af2s->purok}}"></td>
						<td colspan="3"><input type="" name="" value="{{$af2s->barangay}}"></td>
						<td colspan="3"><input type="" name="" value="{{$af2s->municipality}}"></td>
						<td colspan="2"><input type="" name="" value="{{$af2s->province}}"></td>
					</tr>

					<tr>
						<td colspan="3">House No./Street/Sitio</td>
						<td colspan="3">Barangay</td>
						<td colspan="3">Municipality/City</td>
						<td colspan="2">Province</td>
					</tr>

					<tr>
						<td colspan="2">Birthdate :</td>
						<td colspan="2"><input type="text" name="" value="{{$af2s->birthdate}}"></td>
						<td colspan="4">Place of Birth (Municipality/City)</td>
						<td colspan="4"><input type="text" name="" value="{{$af2s->placebirth}}"></td>
					</tr>

					<tr>
						<td colspan="4">Sex
							<input type="" name="" value="{{$af2s->sex}}">
						</td>
						<td colspan="5">Civil Status
							<input type="" name="" value="{{$af2s->civil}}">
						</td>
					</tr>

					<tr>
						<td colspan="3">Religion : <input type="text" name=""  value="{{$af2s->religion}}"></td>
						<td colspan="3">IP (Specify ethnic group) : <input type="text" name=""  value="{{$af2s->ip}}"></td>
						<td colspan="3">Mother Tongue : <input type="text" name="" value="{{$af2s->mothertongue}}"></td>
						<td colspan="3">PWD
							<input type="" name=""  value="{{$af2s->pwd}}">
						</td>
					</tr>

					<tr>
						<td colspan="12">Name of Father/Legal Guardian</td>
					</tr>

					<tr>
						<td colspan="3"><input type="text" name=""value="{{$af2s->fatherlname}}"></td>
						<td colspan="3"><input type="text" name="" value="{{$af2s->fatherfname}}"></td>
						<td colspan="3"><input type="text" name="" value="{{$af2s->midname}}"></td>
						<td colspan="3"><input type="text" name="" value="{{$af2s->fatheroccupation}}"></td>
					</tr>

					<tr>
						<td colspan="3">Last Name :</td>
						<td colspan="3">First Name :</td>
						<td colspan="3">Middle Name :</td>
						<td colspan="3">Occupation :</td>
					</tr>

					<tr>
						<td colspan="12">Mother's Maiden Name</td>
					</tr>

					<tr>
						<td colspan="3"><input type="text" name="" value="{{$af2s->motherlname}}"></td>
						<td colspan="3"><input type="text" name="" value="{{$af2s->motherfname}}"></td>
						<td colspan="3"><input type="text" name="" value="{{$af2s->mothermidname}}"></td>
						<td colspan="3"><input type="text" name="" value="{{$af2s->motheroccupation}}"></td>
					</tr>

					<tr>
						<td colspan="3">Last Name :</td>
						<td colspan="3">First Name :</td>
						<td colspan="3">Middle Name :</td>
						<td colspan="3">Occupation :</td>
					</tr>

					<tr>
						<td colspan="12" id="hdr"><b>Educational Information</b><i>(Part II)</i></td>
					</tr>

					<tr>
						<td colspan="12">Last grade level completed</td>
					</tr>

					<tr>
						<td colspan="3" id="lvl"> Elementary :</td>
						<td colspan="9">
							<input type="text" name="" value="{{$af2s->elementary}}">
						</td>
					</tr>

					<tr>
						<td colspan="3" id="lvl"> Secondary :</td>
						<td colspan="9">
							<input type="text" name="" value="{{$af2s->secondary}}">
						</td>
					</tr>

					<tr>
						<td colspan="6">Why did you drop out of school? (For OSY only)</td>
						<td colspan="6">
							<input type="text" name="" value="{{$af2s->dropschool}}">
						</td>
					</tr>

					<tr>
						<td colspan="6">Have you attended ALS learning sessions before?</td>
						<td colspan="6">
							<input type="text" name="" value="{{$af2s->alsbefore}}">
						</td>
					</tr>

					<tr>
						<td colspan="12">If Yes :</td>
					</tr>

					<tr>
						<td colspan="6"> Name of the Program : <input type="text" name="" style="width: 70%;" value="{{$af2s->ifyes}}"></td>
						<td colspan="6"> Level of Literacy :
							<input type="text" name="" value="{{$af2s->levelliteracy}}">
						</td>
					</tr>

					<tr>
						<td colspan="3">Year Attended :
							<input type="number" name="" style="width: 50%;" value="{{$af2s->yearattended}}">
						</td>
						<td colspan="9">Have you completed the Program ? (Yes/No)
							<input type="type" name="" style="width: 66%;" value="{{$af2s->completeprogram}}">
						</td>
					</tr>

					<tr>
						<td colspan="12" style="text-align: center;">If NO, state the reason :
							<input type="text" name="" style="width: 50%;" value="{{$af2s->ifyes}}"></td>
					</tr>

					<tr>
						<td colspan="12" id="hdr"><b>Accessibility and Availability</b><i>(Part III)</i></td>
					</tr>

					<tr>
						<td colspan="5">How far is it from your home to your Learning Center</td>
						<td colspan="7">
							<input type="number" name="" style="width: 30%;" value="{{$af2s->inkms}}"> in kms
							<input type="number" name="" style="width: 30%;" value="{{$af2s->inhoursmins}}"> in hours and mins.
						</td>
					</tr>

					<tr>
						<td colspan="5">How do you get from yor home to your Learning Center?</td>
						<td colspan="7">
							<input type="" name="" value="{{$af2s->gethome}}">
						</td>
					</tr>

					<tr>
						<td colspan="12">When can you attend your Learning Session?</td>
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
						<td colspan="1"><input type="text" name="" value="{{$af2s->monday}}"></td>
						<td colspan="1"><input type="text" name="" value="{{$af2s->tuesday}}"></td>
						<td colspan="1"><input type="text" name="" value="{{$af2s->wednesday}}"></td>
						<td colspan="1"><input type="text" name="" value="{{$af2s->thursday}}"></td>
						<td colspan="1"><input type="text" name="" value="{{$af2s->friday}}"></td>
						<td colspan="1"><input type="text" name="" value="{{$af2s->saturday}}"></td>
						<td colspan="1"><input type="text" name="" value="{{$af2s->sunday}}"></td>
					</tr>

					<tr>
						<td></td>
						<td></td>
					</tr>

					<tr>
						<td colspan="6"><input type="text" name="" value="{{$af2s->faciname}}"></td>
						<td colspan="6"><input type="text" name="" value="{{$af2s->learners}}"></td>
					</tr>

					<tr>
						<td colspan="6" style="text-align: center;">Facilitator : Signature and Date</td>
						<td colspan="6" style="text-align: center;">Learner : Signature and Date</td>
					</tr>
				</tbody>
			</table>
		</div>	
	</div>
@endsection
<style type="text/css">

 	table {
 		
 		width: 75%;
 	}
 	input {
 		width: 100%;
 	}
 	#hdr {
 		text-align: center;
 	}
 	#lvl {
 		text-align: right;
 	}
 	#rsn{
 		text-align: center;
 	}
 	#ots {
 		width: 89%;
 	}
 	th {
 		text-align: center;
 	}
	
	 	}
 </style>