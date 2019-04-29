@extends('layouts.app')

@section('content')


 <link rel="stylesheet" type="text/css" href="{{asset('css/graduate1.css')}}">
 
   <div>
    
      <h1><b>LEARNER'S PERMANENT RECORD (AF-5)</b></h1>
          
	<table id="clc">
   {{Form::open(['route'=>'graduate.find','method'=>'get','class'=>'form-inline my-2 my-md-0'])}}
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
   
      @foreach($graduates as $graduate)
      <tr>
        <td>{{$graduate->lastname.', '.$graduate->firstname}}</td>
      
        <td>{{$graduate->purok.' '.$graduate->barangay.' '.$graduate->municipality.','.$graduate->province}}</td>
        <td>{{$graduate->birthdate}}</td>
        <td>{{$graduate->sex}}</td>
        <td><a  class="btn btn-success"
                    href="{{route('graduates.details', ['id'=>$graduate->id,'firstname'=>$graduate->firstname])}}"
                    data-toggle="tooltip" data-placement="top"
                  >View</a></td>
        <td><a href="{{route('graduate.edit',$graduate->id)}}" class="btn btn-primary">Edit</a></td>
  
      </tr>
      @endforeach
    </tbody>
  </table>


                 
 {{$graduates->links()}}

	</div>




@endsection