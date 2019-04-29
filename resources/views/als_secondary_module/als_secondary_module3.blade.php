@extends('index')

@section('content')
<div class="container"id="als_elementary_module3">
<img src="{{asset('img/module 3.png')}}" width="20%" height="20%">
<h2>Tagalog</h2>
		<a href="{{asset('module_pdf/SecondaryModule/5.ayusin_natin.pdf')}}">
			1.Ayusin Natin
		</a>
	<br>
		<a href="{{asset('module_pdf/SecondaryModule/5.mga_linya_at_anggulo.pdf')}}">
			2.Mag Linya at Anggulo
		</a>
		
	<br>

		<a href="{{asset('module_pdf/SecondaryModule/5.mga_pangunahing_katangiang_heograpikal_ng_mundo.pdf')}}">
			3.Mga pangunahing katangiang heograpikal ng mundo
		</a>
	<br>

		<a href="{{asset('module_pdf/SecondaryModule/5.mga_sawikain_at_salawikain.pdf')}}">
			4.Ang Sawikain at Salawakian
		</a>
	<br>

		<a href="{{asset('module_pdf/SecondaryModule/5.wanted_malinis_at_sariwang_hangin.pdf')}}">
			5.Wanted malinis at sariwang hangin
		</a>
<h2>English</h2>
	<br>
		<a href="{{asset('module_pdf/SecondaryModule/5.hydroponics.pdf')}}">
			1.Hydroponics
		</a>
	<br>
		<a href="{{asset('module_pdf/SecondaryModule/5.lines_and_angles.pdf')}}">
			2.Lines and Angles
		</a>
</div>
@endsection