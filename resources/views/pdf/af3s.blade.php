@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="col-md-12">
			<table border="2px;">
				<thead>
					<tr>
						<th colspan="3">
							<img src="{{asset('img/logo1.png')}}" id="img">
						</th>
						<th colspan="6" style="text-align: center;">Republic of the Philippines<br>
							Department of Education<br>
							ALTERNATIVE LEARNING SYSTEM</th>
						<th colspan="3">
							<img src="{{asset('img/logo2.png')}}" id="img2">
						</th>
					</tr>

					<tr>
						<th colspan="12" style="text-align: center;">MASTERLIST OF ENROLLED LEARNERS WITH END OF PROGRAM/CY STATUS (AF-3)</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td colspan="2">District</td>
						<td colspan="1"><input type="text" name="" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="2">Division</td>
						<td colspan="1"><input type="text" name="" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="2">Region</td>
						<td colspan="1"><input type="text" name="" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="2">Calendar Year</td>
						<td colspan="1"><input type="text" name="" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
					</tr>

					<tr>
						<td colspan="1">Name of CLC</td>
						<td colspan="2"><input type="text" name="" value="{{$af3->nameclc}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="2">Type of CLC</td>
						<td colspan="1"><input type="text" name="" value="{{$af3->typeclc}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="1">Barangay</td>
						<td colspan="1"><input type="text" name="" value="{{$af3->barangayclc}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="2">City/Municipality</td>
						<td colspan="2" id="a3"><input type="text" name="" value="{{$af3->municipality}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
					</tr>

					<tr>
						<td colspan="12" style="text-align: right;">LRN : 
							<input type="text" name="" style="width: 300px;border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;" value="{{$af3->lrn}}"></td>
					</tr>

					<tr>
						<td colspan="3"><input type="text" name="" value="{{$af3->lname}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="3"><input type="text" name="" value="{{$af3->fname}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="3"><input type="text" name="" value="{{$af3->midname}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="3"><input type="text" name="" value="{{$af3->nameexten}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
					</tr>

					<tr>
						<td colspan="3">Last Name</td>
						<td colspan="3">First Name</td>
						<td colspan="3">Middle Name</td>
						<td colspan="3">Name Extension</td>
					</tr>

					<tr>
						<td colspan="2">Sex:</td>
						<td colspan="2">
							<input type="" name="" value="{{$af3->sex}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;">
						</td>
						<td colspan="2">Birthdate:</td>
						<td colspan="2"><input type="" name="" value="{{$af3->birthdate}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="2">Age:</td>
						<td colspan="2"><input type="text" name="" value="{{$af3->age}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
					</tr>

					<tr>
						<td colspan="2" rowspan="2">First Date of Attendance</td>
						<td colspan="8">PROGRAM ENROLLED</td>
						<td colspan="2" rowspan="2">PIS SCORE</td>
					</tr>

					<tr>
						<td colspan="4">Type of Program</td>
						<td colspan="4">Mode of Program Delivery</td>
					</tr>

					<tr>
						<td colspan="2"><input type="text" name="" value="{{$af3->firstdate}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						
						<td colspan="4"><input type="text" name="" value="{{$af3->typeprogram}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="4"><input type="text" name="" value="{{$af3->typeprogram}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="2"><input type="text" name="" value="{{$af3->modeprogram}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
					</tr>

					<tr>
						<td colspan="12">NON FORMAL EDUCATION</td>
					</tr>

					<tr>
						<td colspan="6">Assesstment for Basic Literacy (ABL)</td>
						<td colspan="6">Functional Literacy Asseswstment (FLT) Score</td>
					</tr>

					<tr>
						<td colspan="2">Basic Literate</td>
						<td colspan="2">Neo Literate</td>
						<td colspan="2">Post Literate</td>
						<td colspan="1">Readin</td>
						<td colspan="1">Numeracy</td>
						<td colspan="1">Writing</td>
						<td colspan="2">Listening & Speaking</td>
						<td colspan="1">Overall Score</td>
					</tr>

					<tr>
						<td colspan="2"><input type="text" name="" value="{{$af3->pisscore}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>

						<td colspan="2"><input type="text" name="" value="{{$af3->basicliterate}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="2"><input type="text" name=""  value="{{$af3->neoliterate}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="1"><input type="text" name=""  value="{{$af3->postliterate}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="1"><input type="text" name=""  value="{{$af3->reading}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="1"><input type="text" name=""  value="{{$af3->numeracy}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="2"><input type="text" name=""  value="{{$af3->writing}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="1"><input type="text" name=""  value="{{$af3->listening}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
					</tr>

					<tr>
						<td colspan="3">End of Program/CY Status</td>
						<td colspan="3"><input type="text" name="" value="{{$af3->nameclc}}"value="{{$af3->nameclc}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
						<td colspan="3">Remarks</td>
						<td colspan="3"><input type="text" name="" value="{{$af3->nameclc}}" style="border-top: none;border-bottom: 2px solid #404040;border-right: none;border-left: none;"></td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
	<style type="text/css">
		table{
			border: solid;
			width: 100%;
		}
		th {
			border: none;
		}
		img{
			width: 100px;
			padding: 10%;
		}
		input{
			width: 100%;
		}
		td{
			text-align: center;
		}
		select{
			width: 100%;
		}
		#img{
   			 width: 120px;
    		padding: 10%;
  		}
  		#img2 {
    		width: 120px;
    		padding: 10%;
  		}
	</style>
@endsection

