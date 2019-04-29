@extends('index')

@section('content')

<div class="container"id="als_elementary_module1">
<img src="{{asset('img/module 1.png')}}" width="20%" height="20%">
<h2>Tagalog</h2>
  @foreach($modules as $module)
    <a href="{{asset('storage/avatars/ElementaryModule/.$module->module_pdf}}" target="_blank">{{$module->module_pdf}}
    
  <br>
</a>
@endforeach
</div>

@endsection
