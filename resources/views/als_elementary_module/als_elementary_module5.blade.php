@extends('index')

@section('content')
<div class="container" id="als_elementary_module5">
<img src="{{asset('img/module 5.png')}}" width="20%" height="20%">
<h2>Tagalog</h2>
		<a href="{{asset('module_pdf/ElementaryModule/5._ang_abc_ng_pagsulat_ng_mga_hugnayang_pangungusap.pdf')}}">
			1.Ang ABC ng pagsulat ng mga hugnayang pangungusap.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/5._pagpaparami_at_paghahati_(bahagi_1).pdf')}}">
			2.Pagpaparami at Paghahati(Bahagi 1).
		</a>
		
	<br>

		<a href="{{asset('module_pdf/ElementaryModule/5.pagpaplano_ng_iyong_negosyo_(unang_bahagi).pdf')}}">
			3.Pagpaplano ng iyong negosyo (Unang bahagi).
		</a>
	
<h2>English</h2>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/5._the_abcs_of_writing_complex_sentences.pdf')}}">
			1.The ABC of writing complex sentences.
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/5.multiplication_and_division_part_1.pdf')}}">
			2.Multiplication and Division (Part 1).
		</a>
	<br>
		<a href="{{asset('module_pdf/ElementaryModule/5.superstitious_belief.pdf')}}">
			3.Superstitious beliefs
		</a>

</div>

@endsection