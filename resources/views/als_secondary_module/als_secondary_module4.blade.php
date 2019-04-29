@extends('index')

@section('content')
<div class="container"id="als_elementary_module3">
<img src="{{asset('img/module 3.png')}}" width="20%" height="20%">
<h2>Tagalog</h2>
		<a href="{{asset('module_pdf/SecondaryModule/6.manindigan_at_ipaglaban_mo.pdf')}}">
			1.Manindigan at Ipaglaban Mo
		</a>
	<br>
		<a href="{{asset('module_pdf/SecondaryModule/6.mga_pilipinong_nagbigay_ng_mahahalagang_kontribusyon.pdf')}}">
			2.Mga Pilipinong Nagbigay Ng Mahalagang Kontribusyon
		</a>
	<br>
		<a href="{{asset('module_pdf/SecondaryModule/6.pestisidio.pdf')}}">
			3.Pestisidio
		</a>
<h2>English</h2>
	<br>
		<a href="{{asset('module_pdf/SecondaryModule/6.lets_talk.pdf')}}">
			1.Let's Talk
		</a>
	
</div>
@endsection