@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/graduate1.css')}}">
 <div>
      <h1><b>ALS Enrollment Form (AF-2)</b></h1>
	<table id="clc">
   {{Form::open(['route'=>'af2.find','method'=>'get','class'=>'form-inline my-2 my-md-0'])}}
                @csrf
               
        <input id="search" type="search" class="text-success form-control" name="search" placeholder="Search Full Name Of Passer" />

                {{Form::close()}} 

    
    <thead>
      <tr>
        
        <th>Full Name</th>
        <th>Address</th>
        <th>Date of Birth</th>
        <th>Sex</th>
        <th colspan="2">ACTION</th>
      </tr>
    </thead>
    <tbody>
      @foreach($af2s as $af2)
      <tr>
        <td>{{$af2->lastname.','.$af2->firstname}}</td>
      
        <td>{{$af2->purok.' '.$af2->barangay.' '.$af2->municipality.','.$af2->province}}</td>
        <td>{{$af2->birthdate}}</td>
        <td>{{$af2->sex}}</td>
        <td><a  class="btn btn-success"
                    href="{{route('af2.details', ['id'=>$af2->id,'lastname'=>$af2->lastname])}}"
                    data-toggle="tooltip" data-placement="top"
                  >View</a>
        </td>
         <td><a href="{{route('af2.edit',$af2->id)}}" class="btn btn-primary">Edit</a></td>
       
      </tr>
      @endforeach
    </tbody>
  </table>


 {{$af2s->links()}}

	</div>
@endsection