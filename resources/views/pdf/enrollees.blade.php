@extends('layouts.app')
@section('content')
	
        <div class="modal-body">
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
                

              </div>
                <!-- <img src="{{asset('img/logo1.png')}}" id="img">
                <p style="text-align: center; font-family: arial black; font-size: 1em;">
                    Department of Education<br>
                    Region VIII<br>
                    Division of Leyte<br>
                    ALTERNATIVE LEARNING SYSTEM
                </p>

                <img src="{{asset('img/logo2.png')}}" id="img2">

 -->
                 <p style="font-size: 20px; font-family: arial black; text-align: center;">MASTERLIST OF MAPPED AND POTENTIAL LEARNERS (AF-1)</p>
                  <p style="text-align: center;">(S.Y. ________)</p>


                    <style type="text/css">
                      input{
                        border:none;
                        border-bottom: ridge;
                        
                        font-family: arial;
                      }
                      label{
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

                    </style>
              <label>
                Full Name:
              </label>
              
               <input type="text" name="name" value="{{$enrollee->name}}">

               <label>
                Sex:
              </label>
               <input type="text" name="sex" value="{{$enrollee->sex}}">

               <label>
               Age:
              </label>
               <input type="text" name="age" value="{{$enrollee->age}}">

              <label>
               Date of Birth(mm/dd/yy):
              </label>
               <input type="text" name="birthdate" value="{{$enrollee->birthdate}}">
               <label>
                Mother Tongue:
              </label>
               <input type="text" name="mothertongue" value="{{$enrollee->mothertongue}}">

               <label>
               IP(Yes or No):
              </label>
               <input type="text" name="ip" value="{{$enrollee->ip}}">

               <label>
              Religion:
              </label>
               <input type="text" name="religion" value="{{$enrollee->religion}}">
               <label>
               Contact Number of Learner
               (if available):
              </label>
               <input type="text" name="contactno" value="{{$enrollee->contactno}}">
               <br>
                 <label>
               Last Grade Level:
              </label>
               <input type="text" name="lastgradelevel" value="{{$enrollee->lastgradelevel}}">
                  
               <label>
               Date Mapped(mm/dd/yy):
              </label>
               <input type="text" name="mapped" value="{{$enrollee->date}}">
            
                 
            <button type="text" class="btn btn-default btn-block"><h3>Complete Home Address</h3></button>

              <label>
               House No./Street/Sitio/Purok:
              </label>
               <input type="text" name="purok" value="{{$enrollee->purok}}">

              <label>
               Barangay:
              </label>
               <input type="text" name="barangay" value="{{$enrollee->barangay}}">

                 <label>
               Municipality/City:
              </label>
               <input type="text" name="municipality" value="{{$enrollee->municipality}}">

                 <label>
               Province:
              </label>
               <input type="text" name="province" value="{{$enrollee->province}}">



                <button type="text" class="btn btn-default btn-block"><h3>Parents</h3></button>
                 <label>
               Father's Full Name:
              </label>
               <input type="text" name="fathersname" value="{{$enrollee->fathersname}}">

                 <label>
               Mother's Name:
              </label>
               <input type="text" name="mothersname" value="{{$enrollee->mothersname}}">

                 <label>
                  <hr>
                  
                <button type="text" class="btn btn-default btn-block"><h3>Remarks</h3></button>
                    <label>
                        Interested<br> in ALS (Yes or No):
                        <input type="text" name="interested" value="{{$enrollee->interested}}">
                    </label>
      
                    <label for="preffer">
                      If Yes, Preffered Program: 
                      <input type=text name="preffer" value="{{$enrollee->preffer}}">
                    </label>
              
                    <label for="lrn" class="lrn">
                      If Already enrolled in ALs, provide date of first attendance(DOFA) and LRN:
                      <input type="text" name="lrn" value="{{$enrollee->lrn}}">
                    </label>

              
        </div>
        
      
  
@endsection