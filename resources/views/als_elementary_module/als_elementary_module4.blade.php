@extends('index')

@section('content')
<div class="container" id="als_elementary_module4">
<img src="{{asset('img/module 4.png')}}" width="20%" height="20%">
<h2>Tagalog</h2>
		<a href="{{asset('module_pdf/ElementaryModule/4._mayroon_akong_liham_para_sa_iyo.pdf')}}">
			1.Mayroon akong liham para sa iyo.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/4._pagdaragdag_at_pagbabawas_sa_pang_araw.pdf')}}">
			2.Pagdaragdag at Pagbabawas sa pang araw-araw.
		</a>
		
	<br>

		<a href="{{asset('module_pdf/ElementaryModule/4.ang_pangangalaga_ng_ating_mga_yamang_dagat.pdf')}}">
			3.Ang pangangalaga ng ating mga yamang dagat.
		</a>
	
<h2>English</h2>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/4._i_have_a_letter_for_you.pdf')}}">
			1.I have a letter for you.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/4.addition_and_subtraction_in_daily_life.pdf')}}">
			2.Addition and Subtraction in daily life.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/4.taking_care_of_our_aquatic_resources.pdf')}}">
			3.Taking care of our aquatic resources
		</a>


</div>
@endsection