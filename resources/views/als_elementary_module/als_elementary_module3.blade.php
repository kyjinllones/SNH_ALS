@extends('index')

@section('content')
<div class="container" id="als_elementary_module3">
<img src="{{asset('img/module 3.png')}}" width="20%" height="20%">
<h2>Tagalog</h2>
		<a href="{{asset('module_pdf/ElementaryModule/3._pagdaragdag_at_pagbabawas.pdf')}}">
			1.Pagdaragdag at pagbabawas.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/3._pagliligtas_sa_ating_mga_yamang_lupa.pdf')}}">
			2.Pagliligtas sa ating mga yamang lupa.
		</a>
		
	<br>

		<a href="{{asset('module_pdf/ElementaryModule/3._pang-araw-araw_na_balita.pdf')}}">
			3.Pang araw-araw na balita.
		</a>
	
<h2>English</h2>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/3.addition_and_subtraction.pdf')}}">
			1.Addition and Subtraction.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/3.saving_our_soil_resources.pdf')}}">
			2.Saving our soil resources.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/3._daily_news.pdf')}}">
			3.Daily News
		</a>

</div>

@endsection