@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/clc1.css')}}">
<div>
  <h2><b>MASTERLIST OF A&E REGISTRANTS <BR>(AF-4)</b></h2>
<table id="clc">
{{Form::open(['route'=>'clc.find','method'=>'get','class'=>'form-inline my-2 my-md-0'])}}
                @csrf
               
        <input id="search" type="search" class="text-success form-control" name="search" placeholder="Search Day" />

                {{Form::close()}} 
       
    <thead>

      <tr>

        <th>CLC NAME</th>
        <th>CLC TYPE</th>
        <th>CLC BARANGAY</th>
        <th>MUNICIPAL</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    
           @foreach($clcs as $clc)
      <tr>
      
     
        <td>{{$clc->clcname}}</td>
        <td>{{$clc->clctype}}</td>
        <td>{{$clc->clcbarangay}}</td>
        <td>{{$clc->municipal}}</td>
        <td><a  class="btn btn-success"
                    href="{{route('clc.details', ['id'=>$clc->id,'name'=>$clc->name])}}"
                    data-toggle="tooltip" data-placement="top"
                  >View</a></td>
        <td><a href="{{route('clc.edit',$clc->id)}}" class="btn btn-primary">Edit</a></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>


 
    </div>
  {{$clcs->links()}}
</div>









@endsection