@extends('index')

@section('content')
<div class="container"id="als_elementary_module1">
<img src="{{asset('img/module 1.png')}}" width="20%" height="20%">
<h2>Tagalog</h2>
	@foreach($modules as $module)
		<a href="{{asset('storage/avatars/ElementaryModule/'.$module->id}}" target="_blank">{{$module->module_pdf}}
		
	<br>
		<!-- <a href="{{asset('module_pdf/SecondaryModule/2.mag_isip_nang_pandaigdig_kumilos_nang_pambansa.pdf')}}">
			2.Mag-isip nang pandaigdig kumilos nang pambansa
		</a>
		
	<br>

		<a href="{{asset('module_pdf/SecondaryModule/2.mga_pangkapaligirang_sanhi_ng_sakit.pdf')}}">
			3.Mga pangkapaligirang sanhi ng sakit
		</a>
	<br>

		<a href="{{asset('module_pdf/SecondaryModule/2.mga_pantubig_at_gawang_tao_na_ecosystem.pdf')}}">
			4.Mga pantubig at gawang tao na ecosystem
		</a>
	<br>

		<a href="{{asset('module_pdf/SecondaryModule/2.pagharap_sa_takot_galit_at_pagkabigo.pdf')}}">
			5.Pagharap sa takot galit at pagkabigo
		</a>
	
<h2>English</h2>
	<br>
		<a href="{{asset('module_pdf/SecondaryModule/2.business_math_1.pdf')}}">
			1.Business Math 1
		</a>
	<br>
		<a href="{{asset('module_pdf/SecondaryModule/2.effective_communication.pdf')}}">
			2.Effective Communication
		</a>
	<br>
		<a href="{{asset('module_pdf/SecondaryModule/2.environmental_causes_of_diseases.pdf')}}">
			3.Environmental Causes of Diseases
		</a> -->

@endforeach
</div>
@endsection