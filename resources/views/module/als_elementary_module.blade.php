@extends('index')

@section('content')


  <div class="container" style="margin-top:30px; ">
<!--   <div class="row">
    <div class="col-sm-4" >
      <h2>Downloadable Modules</h2>
      <ul class="nav nav-pills flex-column">
       <li class="nav-item">
          <a class="nav-link " href="{{route('als_elementary_module')}}">ALS- ELEMENTARY MODULES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('als_secondary_module')}}">ALS- SECONDARY MODULES</a>
        </li>
        
        
      </ul>
    </div>
    <div class="col-sm-8"> -->
<!-- Secondary Modules -->
	<h1>ALS- Elementary MODULES</h1>
 <a href="{{route('als_elementary_module1')}}">

		<img src="{{asset('img/module 1.png')}}" width="20%" height="20%">
	</a>



	<!-- <a href="{{route('als_secondary_module2')}}">
		<img src="{{asset('img/module 2.png')}}" width="20%" height="20%">
	</a>
	<a href="{{route('als_secondary_module3')}}">
		<img src="{{asset('img/module 3.png')}}" width="20%" height="20%">
	</a><br>
	<a href="{{route('als_secondary_module4')}}">
		<img src="{{asset('img/module 4.png')}}" width="20%" height="20%">
	</a>
	<a href="{{route('als_secondary_module5')}}">
		<img src="{{asset('img/module 5.png')}}" width="20%" height="20%">
	</a>
	<a href="{{route('als_secondary_module6')}}">
		<img src="{{asset('img/module 6.png')}}" width="20%" height="20%">
	</a><br>
	<a href="{{route('als_secondary_module7')}}">
		<img src="{{asset('img/module 7.png')}}" width="20%" height="20%">
	</a> -->

</div>
@endsection
