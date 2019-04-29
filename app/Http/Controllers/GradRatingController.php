<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Graduate;
    use Input;
    use DB;
    use PDF;
    use Auth;
    use App\Clc;
    use App\User;
    use Validator;


class GradRatingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Graduate $graduate)
    {
        $graduates=$graduate->orderBy('firstname','asc')->paginate(5);
        return view('graduate.graduates')->withGraduates($graduates);
    }

     function new_post(){
        return view('graduate.graduate');
    }

        protected $rules = [
            'lastname'=>'required',
            'firstname'=>'required',
            'nameexten'=>'required',
            'midname'=>'required',
            'purok'=>'required',
            'barangay'=>'required',
            'municipality'=>'required',
            'province'=>'required',
            'birthdate'=>'required',
            'sex'=>'required',
            'progenroll'=>'required',
            'delmode'=>'required',
            'clcname'=>'required',
            'clcaddress'=>'required',
            'namefaci'=>'required',
            'calenyear'=>'required',
            'pispre'=>'required',
            'pispost'=>'required',
            'blpre'=>'required',
            'blpost'=>'required',
            'nlpre'=>'required',
            'nlpost'=>'required',
            'postlpre'=>'required',
            'postlpost'=>'required',
            'fltreadingpre'=>'required',
            'fltreadingpost'=>'required',
            'fltnumeracypre'=>'required',
            'fltnumeracypost'=>'required',
            'fltwritingpre'=>'required',
            'fltwritingpost'=>'required',
            'fltlistenpre'=>'required',
            'fltlistenpost'=>'required',
            'overallpre'=>'required',
            'overallpost'=>'required',
            'infed1'=>'required',
            'infed2'=>'required',
            'infed3'=>'required',
            'remarks1'=>'required',
            'remarks2'=>'required',
            'remarks3'=>'required',
            'programs'=>'required',
            'testtaken'=>'required',
            'dateexam'=>'required',
            'testingcenter'=>'required',
            'locationcenter'=>'required',
            'aeresult'=>'required'

        ];


    function add(Request $request){
        // $validator=Validator::make($request->all(), $this->rules);
        // if($validator->fails()){
        //     return back()->withErrors($validator)->withInput();
        // }
     
    
        $graduate= Graduate::create(
            [
                'user_id'=>Auth::user()->id,
                'lastname'=>$request->lastname,
                'firstname'=>$request->firstname,
                'nameexten'=>$request->nameexten,
                'midname'=>$request->midname,
                'purok'=>$request->purok,
                'barangay'=>$request->barangay,
                'municipality'=>$request->municipality,
                'province'=>$request->province,
                'birthdate'=>$request->birthdate,
                'sex'=>$request->sex,
                'progenroll'=>$request->progenroll,
                'delmode'=>$request->delmode,
                'clcname'=>$request->clcname,
                'clcaddress'=>$request->clcaddress,
                'namefaci'=>$request->namefaci,
                'calenyear'=>$request->calenyear,
                'pispre'=>$request->pispre,
                'pispost'=>$request->pispost,
                'blpre'=>$request->blpre,
                'blost'=>$request->blpost,
                'nlpre'=>$request->nlpre,
                'nlpost'=>$request->nlpost,
                'postlpre'=>$request->postlpre,
                'fltreadingpre'=>$request->fltreadingpre,
                'fltreadingpost'=>$request->fltreadingpost,
                'fltnumeracypre'=>$request->fltnumeracypre,
                'fltnumeracypost'=>$request->fltnumeracypost,
                'fltwritingpre'=>$request->fltwritingpre,
                'fltwritingpost'=>$request->fltwritingpost,
                'fltlistenpre'=>$request->fltlistenpre,
                'fltlistenpost'=>$request->fltlistenpost,
                'overallpre'=>$request->overallpost,
                'infed1'=>$request->infed1,
                'infed2'=>$request->infed2,
                'infed3'=>$request->infed3,
                'remarks1'=>$request->remarks1,
                'remark2'=>$request->remarks2,
                'remarks3'=>$request->remarks3,
                'programs'=>$request->programs,
                'testtaken'=>$request->testtaken,
                'dateexam'=>$request->dateexam,
                'testingcenter'=>$request->testingcenter,
                'locationcenter'=>$request->locationcenter,
                'aeresult'=>$request->aeresult,
              


                
            ]
        );
        return redirect()->route('graduates');
    }


    function edit($id){
        $graduate=Graduate::find($id);
        return view('graduate.graduate')->withGraduate($graduate);
    }

     function update(Request $request, $id){

       $graduate=Graduate::find($id);
                $graduate->lastname=$request->lastname;
                $graduate->firstname=$request->lrn;
                $graduate->nameexten=$request->nameexten;
                $graduate->midname=$request->midname;
                $graduate->purok=$request->purok;
                $graduate->barangay=$request->barangay;
                $graduate->municipality=$request->municipality;
                $graduate->province=$request->province;
                $graduate->birthdate=$request->birthdate;
                $graduate->sex=$request->sex;
                $graduate->progenroll=$request->progenroll;
                $graduate->delmode=$request->delmode;
                $graduate->clcname=$request->clcname;
                $graduate->clcaddress=$request->clcaddress;
                $graduate->namefaci=$request->namefaci;
                $graduate->calenyear=$request->calenyear;
                $graduate->pispre=$request->pispre;
                $graduate->pispost=$request->pispost;
                $graduate->blpre=$request->blpre;
                $graduate->blpost=$request->blpost;
                $graduate->nlpre=$request->nlpre;
                $graduate->nlpost=$request->nlpost;
                $graduate->postlpre=$request->postlpre;
                $graduate->fltreadingpre=$request->fltreadingpre;
                $graduate->fltreadingpost=$request->fltreadingpost;
                $graduate->fltnumeracypre=$request->fltnumeracypre;
                $graduate->fltnumeracypost=$request->fltnumeracypost;
                $graduate->fltwritingpre=$request->fltwritingpre;
                $graduate->fltwritingpost=$request->fltwritingpost;
                $graduate->fltlistenpre=$request->fltlistenpre;
                $graduate->fltlistenpost=$request->fltlistenpost;
                $graduate->overallpre=$request->overallpost;
                $graduate->infed1=$request->infed1;
                $graduate->infed2=$request->infed2;
                $graduate->infed3=$request->infed3;
                $graduate->remarks1=$request->remarks1;
                $graduate->remark2=$request->remarks2;
                $graduate->remarks3=$request->remarks3;
                $graduate->programs=$request->programs;
                $graduate->testtaken=$request->testtaken;
                $graduate->dateexam=$request->dateexam;
                $graduate->testingcenter=$request->testingcenter;
                $graduate->locationcenter=$request->locationcenter;
                $graduate->aeresult=$request->aeresult;
              


       // $graduate->level=$request->level;
       // $graduate->lrn=$request->lrn;
       // $graduate->name=$request->name;
       // $graduate->year=$request->year;
       // $graduate->rating=$request->rating;
       $graduate->save();
       return redirect()->route('graduates');
    }

    function find(Request $req){
        $graduates=Graduate::where('firstname',
            'like','%'.$req->search.'%')->orderBy('firstname','asc')->paginate(5);;
        return view('graduate.graduates')->withGraduates($graduates);
    }

    public function getPDF(){

        $graduates=graduate::all();
         $pdf=PDF::loadview('pdf.graduates',['graduates'=>$graduates]);
         return $pdf->stream('graduates.pdf');
      }
      function view_details($id, $firstname){
      $graduates=Graduate::find($id);
      return view('pdf.graduates')->withGraduates($graduates);
    }

}
