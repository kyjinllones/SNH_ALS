@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/graduate1.css')}}">
 <div>
      <h1><b>Masterlist Enrolled (AF-3)</b></h1>
	<table id="clc">
   {{Form::open(['route'=>'af3.find','method'=>'get','class'=>'form-inline my-2 my-md-0'])}}
                @csrf
               
        <input id="search" type="search" class="text-success form-control" name="search" placeholder="Search Full Name Of Passer" />

                {{Form::close()}} 

   
    <thead>
      <tr>
        
        <th>Full Name</th>
        <th>Age</th>
        <th>Date of Birth</th>
        <th>Sex</th>
        <th colspan="2">ACTION</th>
      </tr>
    </thead>
    <tbody>
      @foreach($af3s as $af3)
      <tr>
        <td>{{$af3->lname.','.$af3->fname}}</td>
      
        <td>{{$af3->age}}</td>
        <td>{{$af3->birthdate}}</td>
        <td>{{$af3->sex}}</td>
        <td><a  class="btn btn-success"
                    href="{{route('af3.details', ['id'=>$af3->id,'lname'=>$af3->lname])}}"
                    data-toggle="tooltip" data-placement="top"
                  >View</a>
        </td>
         <td><a href="{{route('af3.edit',$af3->id)}}" class="btn btn-primary">Edit</a></td>
       
      </tr>
      @endforeach
    </tbody>
  </table>


 {{$af3s->links()}}

	</div>
@endsection