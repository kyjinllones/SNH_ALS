@extends('layouts.app')
@section('content')
 <link rel="stylesheet" type="text/css" href="{{asset('css/enrollee.css')}}">
<div class=" login-form">
	 @if(isset($af3))
            <h1 class="text-danger">Update MASTERLIST OF ENROLLED LEARNERS WITH END OF PROGRAM/CY STATUS <br>(AF-3)</h1>
            {{Form::model($af3,['route'=>['af3.update', $af3->id],'method'=>'put'])}}
          @else
            <h1 class="text-default">Create a New MASTERLIST OF ENROLLED LEARNERS WITH END OF PROGRAM/CY STATUS <br>(AF-3)</h1>
            {{Form::open(['route'=>'af3.add', 'method'=>'post'])}}
          @endif
<div class="container-fluid">
		<div class="col-md-12">
			
			<table border="2px;" class="col-md-12">
			

				<tr>
					<td colspan="3">Name of CLC:</td>
					<td colspan="3">
						<div class="form-group {{$errors->has('nameclc')?' has-error': ''}} " >
		                       {{Form::text('nameclc',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('nameclc')}}</span>
                    	</div>
                    </td>
					<td colspan="3">Type of CLC: </td>
					<td colspan="3">
						<div class="form-group {{$errors->has('typeclc')?' has-error': ''}} " >
		                       {{Form::text('typeclc',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('typeclc')}}</span>
                    	</div>
                    </td>
				</tr>

				<tr>
					<td colspan="3">Barangay:  </td>
					<td colspan="3">
						<div class="form-group {{$errors->has('barangayclc')?' has-error': ''}} " >
		                       {{Form::text('barangayclc',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('barangayclc')}}</span>
                    	</div>
                    </td>
					<td colspan="3">City/Municipality: </td>
					<td colspan="3">
						<div class="form-group {{$errors->has('municipality')?' has-error': ''}} " >
		                       {{Form::text('municipality',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('municipality')}}</span>
                    	</div>
					</td>
				</tr>

				<tr>
					<td>LRN : </td>
					<td colspan="12" style=" text-align: right;">
						<div class="form-group {{$errors->has('lrn')?' has-error': ''}} " >
		                       {{Form::text('lrn',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('lrn')}}</span>
                    	</div></td>
				</tr>

				<tr>
					<td colspan="3">
						<div class="form-group {{$errors->has('lname')?' has-error': ''}} " >
		                       {{Form::text('lname',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('lname')}}</span>
                    	</div>
					</td>
					<td colspan="3"><div class="form-group {{$errors->has('fname')?' has-error': ''}} " >
		                       {{Form::text('fname',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('fname')}}</span>
                    	</div></td>
					<td colspan="3">
						<div class="form-group {{$errors->has('midname')?' has-error': ''}} " >
		                       {{Form::text('midname',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('midname')}}</span>
                    	</div></td>
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
					<td colspan="3">SEX</td>
					<td colspan="3">
						<div class="form-group {{$errors->has('sex')?' has-error': ''}} " >
		                       {{Form::text('sex',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('sex')}}</span>
                    	</div>
					</td>
					<td colspan="3">Birthdate</td>
					<td colspan="3">
						<div class="form-group {{$errors->has('birthdate')?' has-error': ''}} " >
		                       {{Form::text('birthdate',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('birthdate')}}</span>
                    	</div>
					</td>
				</tr>

				<tr>
					<td colspan="3">Age</td>
					<td colspan="3">
						<div class="form-group {{$errors->has('age')?' has-error': ''}} " >
		                       {{Form::text('age',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('age')}}</span>
                    	</div>
					</td>
					<td colspan="3">First Date of Attendance</td>
					<td colspan="3">
						<div class="form-group {{$errors->has('firstdate')?' has-error': ''}} " >
		                       {{Form::text('firstdate',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('firstdate')}}</span>
                    	</div>
					</td>
				</tr>

				<tr>
					<td colspan="12" style="text-align: center;">PROGRAM ENROLLED</td>
				</tr>

				<tr>
					<td colspan="3">Type of Program</td>
					<td colspan="3">
						<div class="form-group {{$errors->has('typeprogram')?' has-error': ''}} " >
		                       {{Form::text('typeprogram',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('typeprogram')}}</span>
                    	</div>
					</td>
					<td colspan="3">Mode of Program Delivery</td>
					<td colspan="3">
						<div class="form-group {{$errors->has('modeprogram')?' has-error': ''}} " >
		                       {{Form::text('modeprogram',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('modeprogram')}}</span>
                    	</div>
					</td>
				</tr>

				<tr>
					<td colspan="6" style="text-align: center;">PIS Score</td>
					<td colspan="6">
						<div class="form-group {{$errors->has('pisscores')?' has-error': ''}} " >
		                       {{Form::text('pisscores',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('pisscores')}}</span>
                    	</div>
					</td>
				</tr>

				<tr>
					<td colspan="12" style="text-align: center;">NON FORMAL EDUCATION</td>
				</tr>

				<tr>
					<td colspan="3" style="text-align: center;">Assessment for Basic Literacy
						<br> (ABL)
					</td>
					<td colspan="9" style="text-align: center;">Functional Literacy Assessment
						<br> (FLT) Score
					</td>
				</tr>

				<tr>
					<td colspan="1">Basic Literate</td>
					<td colspan="1">Neo Literate</td>
					<td colspan="1">Post Literate</td>
					<td colspan="2">Reading</td>
					<td colspan="2">Numeracy</td>
					<td colspan="2">Writing</td>
					<td colspan="2">Listening & Speaking</td>
					<td colspan="1">Overall Score</td>
				</tr>

				<tr>
					<td colspan="1">
						<div class="form-group {{$errors->has('basicliterate')?' has-error': ''}} " >
		                       {{Form::text('basicliterate',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('basicliterate')}}</span>
                    	</div>
					</td>
					<td colspan="1">
						<div class="form-group {{$errors->has('neoliterate')?' has-error': ''}} " >
		                       {{Form::text('neoliterate',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('neoliterate')}}</span>
                    	</div>
					</td>
					<td colspan="1">
						<div class="form-group {{$errors->has('postliterate')?' has-error': ''}} " >
		                       {{Form::text('postliterate',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('postliterate')}}</span>
                    	</div>
					</td>
					<td colspan="2">
						<div class="form-group {{$errors->has('reading')?' has-error': ''}} " >
		                       {{Form::text('reading',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('reading')}}</span>
                    	</div>
					</td>
					<td colspan="2">
						<div class="form-group {{$errors->has('numeracy')?' has-error': ''}} " >
		                       {{Form::text('numeracy',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('numeracy')}}</span>
                    	</div>
					</td>
					<td colspan="2">
						<div class="form-group {{$errors->has('writing')?' has-error': ''}} " >
		                       {{Form::text('writing',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('writing')}}</span>
                    	</div>
					</td>
					<td colspan="2">
						<div class="form-group {{$errors->has('listening')?' has-error': ''}} " >
		                       {{Form::text('listening',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('listening')}}</span>
                    	</div>
					</td>
					<td colspan="1">
						<div class="form-group {{$errors->has('overallscore')?' has-error': ''}} " >
		                       {{Form::text('overallscore',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('overallscore')}}</span>
                    	</div>
					</td>
				</tr>

				<tr>
					<td colspan="3">End of Program / CY Staus</td>
					<td colspan="3">
						<div class="form-group {{$errors->has('endprogram')?' has-error': ''}} " >
		                       {{Form::text('endprogram',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('endprogram')}}</span>
                    	</div>
					</td>
					<td colspan="3">Remarks</td>
					<td colspan="3">
						<div class="form-group {{$errors->has('remarks')?' has-error': ''}} " >
		                       {{Form::text('remarks',
		                      	null, array('class'=>'form-control'))}}
                      			<span class="text-danger">{{$errors->first('remarks')}}</span>
                    	</div>
					</td>
				</tr>		
			</table>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>

	</div>
   {{Form::close()}}
</div>
@endsection
<style type="text/css">
	div{
		

	}
	#sgn {
		border: none;
		border-bottom: ridge;
		
	}
	
	input {
		width: 100%;
	}
	table {
		text-align: center;
	}
	</style>