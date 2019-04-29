@extends('index')

@section('content')
<div class="container" id="als_elementary_module1">
<img src="{{asset('img/module 2.png')}}" width="20%" height="20%">
<h2>Tagalog</h2>
		<a href="{{asset('module_pdf/ElementaryModule/2._ang_mga_yaman_ng_mundo.pdf')}}">
			1.Ang mga yaman ng mundo.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/2._angkop_na_pahayag_sa_mga_pulong_at_panayam.pdf')}}">
			2.Angkop na pahayag sa mga pulong at panayam.
		</a>
		
	<br>

		<a href="{{asset('module_pdf/ElementaryModule/2._oras.pdf')}}">
			3.Oras.
		</a>
	
<h2>English</h2>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/2.wealth_of_the_earth.pdf')}}">
			1.Wealth of the Earth.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/2._appropriate_expressions_in_meetings_and_interviews.pdf')}}">
			2.Appropriate expressions in meetings and interviews.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/2.time.pdf')}}">
			3.Time
		</a>


</div>
@endsection