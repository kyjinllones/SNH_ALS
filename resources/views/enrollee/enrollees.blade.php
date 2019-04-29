@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/graduate1.css')}}">
<h1><b>Masterlist of Mapped and Potential Learners</b></h1>
{{Form::open(['route'=>'enrollee.find','method'=>'get','class'=>'form-inline my-2 my-md-0'])}}
    @csrf
    
    <input id="search" type="search" class="text-success form-control" name="search" placeholder="Search Name Of Enrolee" />
    
    {{Form::close()}}

<table id="clc" align="center" >
  <div style="text-align: right;">
   
  </div>
  <thead>
    <tr class="header">
      
      <th>Name</th>
      <th>Sex</th>
      <th>Date of Birth</th>
      <th>Age</th>
      <th>Address</th>
      <th>Contact Number</th>
               
      <th colspan="2">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($enrollees as $enrollee)
    <tr>
      <td>{{$enrollee->name}}</td>
      <td>{{$enrollee->sex}}</td>
      <td>{{$enrollee->birthdate}}</td>
      <td>{{$enrollee->age}}</td>
      <td>{{$enrollee->barangay.''.$enrollee->municipality.''.$enrollee->province}}</td>
      <td>{{$enrollee->contactno}}</td>
       <td> <a  class="btn btn-success"
                    href="{{route('enrollee.details', ['id'=>$enrollee->id,'name'=>$enrollee->name])}}"
                    data-toggle="tooltip" data-placement="top"
                  >View</a></td>
      <td><a href="{{route('enrollee.edit',$enrollee->id)}}" class="btn btn-primary">Edit</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
   

     

  
{{$enrollees->links()}}
@endsection