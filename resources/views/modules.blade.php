@extends('layouts.app')

@section('content')


<link rel="stylesheet" type="text/css" href="{{asset('css/graduate1.css')}}">

 <div>
      <h1><b>Downloadable Modules</b></h1>


          <table id="clc" align="center" >

              {{Form::open(['route'=>'module.find','method'=>'get','class'=>'form-inline my-2 my-md-0'])}}
                        @csrf
                       
                    <input id="search" type="search" class="text-success form-control" name="search" placeholder="Search Module Title" />

                {{Form::close()}} 

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Module Title</th>
                        <th>Level</th>
                        <th>Downloadable Module</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($modules as $module)
                        <tr>
                                <td>{{$module->id}}</td>
                                <td>{{$module->mod_title}}</td>
                            @if($module->type=='Elementary')
                                <td>Elementary</td>
                                <td> 
                                    <a href="{{asset('storage/avatars/ElementaryModule/'.$module->module_pdf)}}" target="_blank">
                                        {{$module->module_pdf}}
                                    </a>
                                </td>
                            @else
                                <td>Secondary</td>
                                <td> 
                                    <a href="{{asset('storage/avatars/SecondaryModule/'.$module->module_pdf)}}" target="_blank">
                                        {{$module->module_pdf}}
                                    </a>
                                </td>     
                            @endif

                            @if(Auth::user()->id == $module->user_id)
                                <td>
                                    <a class="btn <?php
                                             if(isset($post->deleted_at))
                                              echo 'disabled';
                                          ?>btn-primary"
                                       href="{{route('module.edit',$module->id)}}" >
                                     Edit
                                     </a>
                                </td>
                                <td>
                                    <a class="btn <?php
                                             if(isset($post->deleted_at))
                                              echo 'disabled';
                                          ?>btn-danger" href="{{route('module.delete',$module->id)}}">
                                      Delete
                                    </a>
                                </td>

                            @if(isset($post->deleted_at))
                                <td>
                                    <a class="btn btn-warning" href="{{ route('module.restore', $module->id) }}">
                                    Restore
                                    </a>
                                </td>
                            @endif
                            @endif
                        </tr>
                    @endforeach
                </tbody>

          </table>




  </div>
 


<script lang="javascript" type="text/javascript">

$(function(){
    if($("td.text-danger").text().length<1){
        $("a.btn-user").addClass('disabled')
    }
})
</script>
@endsection