@extends('layouts.app')
@section('content')
<div class="container-fluid">
      <div class="col-md-12">
        <table border="2px;">
          <thead>
            <tr>
              <th colspan="3">
                <img src="{{asset('img/logo1.png')}}" id="img">
              </th>
              <th style="text-align: center;" colspan="6">
                    Republic of The Philippines<br>
                    Department of Education<br>
                    Region VIII<br>
                    Division of Leyte<br>
                    Alternative Learning System
              </th>
              <th colspan="3">
                <img src="{{asset('img/logo2.png')}}" id="img2">
              </th>
            </tr>

            <tr>
              <th colspan="12" style="text-align: center;">LEARNER'S PERMANENT RECORD (AF-5)</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td colspan="4">DISTRICT : <input type="text" name="" ></td>
              <td colspan="4">DIVISION :<input type="text" name=""> </td>
              <td colspan="4">REGION : <input type="text" name=""></td>
            </tr>

            <tr id="tr1">
              <td colspan="9">LEARNER'S INFORMATION </td>
              <td colspan="3" id="td1"><input type="text" name="" id="id1" placeholder="LRN : ___________" style="text-align: center;"></td>
            </tr>

            <tr>
              <td colspan="3">LAST NAME:<input type="text" name="" value="{{$graduates->lastname}}"></td>
              <td colspan="3">FIRST NAME:<input type="text" name="" value="{{$graduates->firstname}}"></td>
              <td colspan="3">NAME EXTENSION:<input type="text" name="" value="{{$graduates->nameexten}}"></td>
              <td colspan="3">MIDDLE NAME:<input type="text" name="" value="{{$graduates->midname}}"></td>
            </tr>

            <tr>
              <td colspan="3">ADDRESS : <input type="text" name="" value="{{$graduates->purok}}"></td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->barangay}}"></td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->municipality}}"></td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->province}}"></td>
            </tr>

            <tr>
              <td colspan="3" style="text-align: right;">HOUSE NO./ SITIO/ STR. </td>
              <td colspan="3">BARANGAY</td>
              <td colspan="3">MUNICIPALITY/CITY</td>
              <td colspan="3">PROVINCE</td>
            </tr>

            <tr>
              <td colspan="3">BIRTHDATE :</td>
              <td colspan="4"><input type="date" name="" value="{{$graduates->birthdate}}"></td>
              <td colspan="5">SEX :
                <input type="checkbox" name="" id="in2" value="{{$graduates->sex}}"> MALE
                <input type="checkbox" name="" id="in2" value="{{$graduates->sex}}"> FEMALE
              </td>
            </tr>

            <tr id="tr2">
              <td colspan="12">LEARNER'S EDUCATIONAL STATUS</td>
            </tr>

            <tr>
              <td colspan="3" style="text-align: right;">Program Enrolled : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->progenroll}}"></td>
              <td colspan="3" style="text-align: right;" >Program Enrolled : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->progenroll}}"></td>
            </tr>

            <tr>
              
              <td colspan="3" style="text-align: right;">Delivery Mode : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->delmode}}"></td>
              <td colspan="3" style="text-align: right;">Delivery Mode : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->delmode}}"></td>
            </tr>

            <tr>
              <td colspan="3" style="text-align: right;">CLC Name : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->clcname}}"></td>
              <td colspan="3" style="text-align: right;">CLC Name : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->clcname}}"></td>
            </tr>

            <tr>
              <td colspan="3" style="text-align: right;">CLC Address : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->clcaddress}}"></td>
              <td colspan="3" style="text-align: right;">CLC Address : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->clcaddress}}"></td>
            </tr>

            <tr>
              <td colspan="3" style="text-align: right;">Name of Facilitator : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->namefaci}}"></td>
              <td colspan="3" style="text-align: right;">Name of Facilitator : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->namefaci}}"></td>
            </tr>

            <tr>
              <td colspan="3" style="text-align: right;">Calendar Year : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->calenyear}}"></td>
              <td colspan="3" style="text-align: right;">Calendar Year : </td>
              <td colspan="3"><input type="text" name="" value="{{$graduates->calenyear}}"></td>
            </tr>
              <div>
                <tr>
                  <th rowspan="2" colspan="6">ASSESSMENT RESULTS</th>
                  <th colspan="6">Score</th>
                </tr>

                <tr>
                  <th colspan="3">Pre</th>
                  <th colspan="3">Post</th>
                </tr>
                <tr>
                  <td colspan="6">PIS Score</td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->pispre}}"></td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->pispost}}"></td>
                </tr>

                <tr id="tr3">
                  <td colspan="6">Assessment for Basic Literacy (ABL)</td>
                  <td colspan="3">Pre</td>
                  <td colspan="3">Post</td>
                </tr>

                <tr>
                  <td colspan="6">Basic Literate</td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->blpre}}"></td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->blpost}}"></td>
                </tr>

                <tr>
                  <td colspan="6">Neo Literate</td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->nlpre}}"></td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->nlpost}}"></td>
                </tr>

                <tr>
                  <td colspan="6">Post Literate</td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->postlpre}}"></td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->postlpost}}"></td>
                </tr>

                <tr id="tr3">
                  <td colspan="6">Functional Literacy Assessment</td>
                  <td colspan="3">Pre</td>
                  <td colspan="3">Post</td>
                </tr>

                <tr>
                  <td colspan="6">FLT Score in Reading</td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->fltreadingpre}}"></td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->fltreadingpost}}"></td>
                </tr>

                <tr>
                  <td colspan="6">FLT Score in Numeracy</td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->fltnumeracypre}}"></td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->fltnumeracypost}}"></td>
                </tr>

                <tr>
                  <td colspan="6">FLT Score in Writing</td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->fltwritingpre}}"></td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->fltwritingpost}}"></td>
                </tr>

                <tr>
                  <td colspan="6">FLT Score in Listening & Speaking</td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->fltlistenpre}}"></td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->fltlistenpost}}"></td>
                </tr>

                <tr>
                  <td colspan="6">Overall Score</td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->overallpre}}"></td>
                  <td colspan="3"><input type="number" name="" value="{{$graduates->overallpost}}"></td>
                </tr>

                <tr id="tr3">
                  <td colspan="6">InfEd</td>
                  <td colspan="6">Remarks</td>
                </tr>

                <tr>
                  <td colspan="6"><input type="text" name="" value="{{$graduates->infed1}}"></td>
                  <td colspan="6"><input type="text" name="" value="{{$graduates->remarks1}}"></td>
                </tr>

                <tr>
                  <td colspan="6"><input type="text" name="" value="{{$graduates->infed2}}"></td>
                  <td colspan="6"><input type="text" name="" value="{{$graduates->remarks2}}"></td>
                </tr>

                <tr>
                  <td colspan="6"><input type="text" name="" value="{{$graduates->infed3}}"></td>
                  <td colspan="6"><input type="text" name="" value="{{$graduates->remarks3}}"></td>
                </tr>

                <tr id="tr3">
                  <td colspan="8">A & E STATUS</td>
                  <td colspan="4">Remarks</td>
                </tr>

                <tr>
                  <td colspan="8">Program Status</td>
                  <td colspan="4"><input type="text" name="" value="{{$graduates->programs}}"></td>
                </tr>

                <tr>
                  <td colspan="8">Test Taken</td>
                  <td colspan="4"><input type="text" name="" value="{{$graduates->testtaken}}"></td>
                </tr>

                <tr>
                  <td colspan="8">Date of Examination</td>
                  <td colspan="4"><input type="text" name="" value="{{$graduates->dateexam}}"></td>
                </tr>

                <tr>
                  <td colspan="8">Testing Center</td>
                  <td colspan="4"><input type="text" name="" value="{{$graduates->testingcenter}}"></td>
                </tr>

                <tr>
                  <td colspan="8">Location of Testing Center</td>
                  <td colspan="4"><input type="text" name="" value="{{$graduates->locationcenter}}"></td>
                </tr>

                <tr>
                  <td colspan="8">Accreditation and Equivalency (A&E) Test Result</td>
                  <td colspan="4"><input type="text" name="" value="{{$graduates->aeresult}}"></td>
                </tr>

                <tr>
                  <td colspan="12" style="background-color: lightgray; text-align: center;">Certifiicate of Transfer</td>
                </tr>

                <tr>
                  <td colspan="4">Eligible for Admission to :</td>
                  <td colspan="8"><input type="text" name=""></td>
                </tr>

                <tr>
                  <td colspan="12"><p><b>Certificate of Good Moral Character</b><br>
                  This is to certify that the above-named is a learner of good moral character.<br>
                  This certification is issued upon request of the concerned individual due to<br>
                  hisher desire to pursue formal schooling/other CLC or for employment.</p> </td>
                </tr>

                <tr>
                  <td colspan="4">Prepared By :</td>
                  <td colspan="8">Certified Correct By :</td>
                </tr>

                <tr>
                  <td colspan="4"><input type="text" name="" value="{{$graduates->namefaci}}"></td>
                  <td colspan="8"><input type="text" name=""></td>
                </tr>

                <tr>
                  <td colspan="4" style="text-align: center;">Facilitator</td>
                  <td colspan="8">PSDS/District/EPSA</td>
                </tr>
              </div>
          </tbody>
        </table>

        <table border="2">
              <thead id="th2">
                
              </thead>

              <tbody>
                
              </tbody>
        </table>
      </div>
    </div>
  @endsection

  <style type="text/css">
    th{
      border: none;
    }
    #img{
    width: 120px;
    padding: 10%;
  }
  #img2 {
    width: 120px;
    padding: 10%;
  }
  </style>
