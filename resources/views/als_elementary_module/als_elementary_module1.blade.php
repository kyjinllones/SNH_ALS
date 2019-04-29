@extends('index')

@section('content')
<div class="container"id="als_elementary_module1">
<img src="{{asset('img/module 1.png')}}" width="20%" height="20%">
<h2>Tagalog</h2>

			@foreach($modules as $module)
<a href="{{asset('storage/avatars/ElementaryModule/'.$module->module_pdf)}}" target="_blank">{{$module->module_pdf}}
		
	</a>   

<br>

	<!-- <br>
		<a href="{{asset('module_pdf/ElementaryModule/1.maaari_kang_magtagumpay_sa_negosyo.pdf')}}">
			2.Maaari kang magtagumpay sa negosyo!
		</a>
		
	<br>

		<a href="{{asset('module_pdf/ElementaryModule/1._itoy_tungkol_sa_oras.pdf')}}">
			3.Ito'y tungkol sa oras.
		</a>
	 -->

	
		<!-- <a href="{{asset('storage/avatars/ElementaryModule/'.$module->module_pdf)}}" target="_blank">

			1.Hello may i help you?
		</a> -->
	<!-- <br>
		<a href="{{asset('module_pdf/ElementaryModule/1._its_about_time.pdf')}}">
			2.It's about time.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/1.you_can_succeed_in_business.pdf')}}">
			3.You can succeed in business!
		</a> -->
@endforeach

</div>
@endsection