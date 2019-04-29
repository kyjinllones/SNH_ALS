
@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/graduate.css')}}">
<div class="login-form">
   @if(isset($module))
              <h1 class="text-danger">Update Module</h1>
              {{Form::model($module,['route'=>['module.update', $module->id],'method'=>'put'])}}
          @else
               <h1 class="text-default">Upload Module</h1>
              <form id="dp_submission" method="post" class="form" action="{{ route('module.upload') }}" enctype="multipart/form-data" role="form" >
          @endif

        @csrf()
        <div>

          
            
               <div class="form-group " style="float: right;">
                    <label for="type" class="type">
                      Type: 
                      <select name="type" class="form-control">
                        <option></option>
                        <option>Elementary</option>
                        <option>Secondary</option>
                       
                      </select>
                    </label><br>
                   
                </div>
                <br><br>
                <label>TITLE<input id="idp_upload" type="text" value="" name="mod_title" class="form-control" /></label>
                 
                <label>UPLOAD FILE<input id="idp_upload" type="file" value="{{ old('module_pdf') }}" name="module_pdf" class="form-control" /></label>
                    
       

            @if(isset($errors))
                
                <span class="text-danger"><strong>{{ $errors->first('module_pdf') }}</strong></span>

            @endif

              <div style="float: left;">

        </div>
        </div>
                <br><br>
        <div>
            <input type="submit" value="Upload" class="btn btn-info"/ style="font-family: arial;">
        </div>
         {{Form::close()}}
    </form>
</div>
 @endsection




    
