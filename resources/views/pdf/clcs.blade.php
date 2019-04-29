@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/enrollee.css')}}">
        <div class="login-form">
            <div style="border:solid; padding: 2px;">
               <div>

                <label>
                  <img src="{{asset('img/logo1.png')}}" id="img">
                </label>
                <label style="text-align: center;" id="lala">

                      Department of Education<br>
                      Region VIII<br>
                      Division of Leyte<br>
                      ALTERNATIVE LEARNING SYSTEM

                      
                </label>
                <label style="float: right;">
                  <img src="{{asset('img/logo2.png')}}" id="img2">
                </label>
                



                 <p style="font-size: 20px; font-family: arial black; text-align: center;">MASTERLIST OF A&E REGISTRANTS (AF4)</p>
                  <p style="text-align: center;">(S.Y. ________)</p>
                    <style type="text/css">
                   input{
                        border:none;
                        border-bottom: ridge;
                        font-size: 1em;
                        font-family: arial;
                      }
                       #clc{
                        color: black;
                        font-family: arial;
                        font-size: 1em;
                      }

                      #img{
                          width: 150px;
                          padding: 25%;
                          float: left;

                        }
                        #img2 {
                          width: 150px;
                          padding: 25%;
                        }
                        #lala{
                          padding-left: 100px;
                        }
                    hr { 
                    
}
                    </style>
            
                   
                  <div >
                    <button type="text" class="btn btn-default btn-block"><h4>Place of Registration Center<br>
                    (Name of School/Center, Barangay, Municipality)</h4></button>
                    
                    <span id="clc">Testing Center
                      <input type="" name="" value="{{$clcs->testing}}">
                    </span>
                    <span id="clc">Barangay
                      <input type="" name="" value="{{$clcs->barangay}}">
                    </span><br>
                    <span id="clc">Municipality/City
                      <input type="" name="" value="{{$clcs->municipality}}">
                    </span>
                  </div>
                  <div">
                    <span id="clc">LRN
                      <input type="" name="" value="{{$clcs->lrn}}">
                  </span>
                   <span id="clc">FULL NAME
                      <input type="" name="" value="{{$clcs->name}}">
                  </span>
                   <span id="clc">SEX
                      <input type="" name="" value="{{$clcs->sex}}">
                  </span>
                   <span id="clc">BIRTHDATE
                      <input type="text" name="" value="{{$clcs->birthdate}}">
                  </span>
                  <div >
                    <button type="text" class="btn btn-default btn-block">
                      <h4>CLC DETAILS</h4></button>
                    
                    <span id="clc">CLC NAME
                      <input type="" name="" value="{{$clcs->clcname}}">
                    </span>
                    <span id="clc">CLC TYPE
                      <input type="" name="" value="{{$clcs->clctype}}">
                    </span id="clc"><br>
                    <span id="clc">BARANGAY 
                      <input type="" name="" value="{{$clcs->clcbarangay}}">
                    </span>
                    <span id="clc"> MUNICIPAL 
                      <input type="" name="" value="{{$clcs->municipal}}">
                    </span>
                  </div>
                    <div >
                    <span id="clc">A&E TEST LEVEL REGISTERED
                      <input type="" name="" value="{{$clcs->leveltest}}">
                  </span><br>
                   <span id="clc">DATE REGISTERED
                      <input type="" name="" value="{{$clcs->datereg}}">
                  </span><BR>
                   <span id="clc">DATE OF EXAMINATION
                      <input type="" name="" value="{{$clcs->dateexam}}">
                  </span>
                 
                  </div>
                  </div>
                  
                   
                    @endsection
                  

                       
                              
                          
                  
                          
                    
                      

                        
                      
                   
            
       