<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Enrollee;
    use Input;
    use DB;
    use PDF;
    use Auth;
    use App\Clc;
    use App\User;
    use Validator;

    class ClcsController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
        }


        function index(Clc $clc){
           $clcs=$clc->orderBy('place','asc')->paginate(5);
           return view('clc.clcs')->withClcs($clcs);
        }
            protected $rules = [
                'place'=>'required',
                'testing'=>'required',
                'barangay'=>'required',
                'municipality'=>'required',
                'lrn'=>'required',
                'name'=>'required',
                'sex'=>'required',
                'birthdate'=>'required',
                'clcname'=>'required',
                'clctype'=>'required',
                'clcbarangay'=>'required',
                'municipal'=>'required',
                'leveltest'=>'required',
                'datereg'=>'required',
                'dateexam'=>'required',
            ];


        function add(Request $request){
        // $validator=Validator::make($request->all(), $this->rules);
        //     if($validator->fails()){
        //         return back()->withErrors($validator)->withInput();
        //     }
         
            $clc= Clc::create(
                [
                    'user_id'=>Auth::user()->id,
                    'place'=>$request->place,
                    'testing'=>$request->testing,
                    'barangay'=>$request->barangay,
                    'municipality'=>$request->municipality,
                    'lrn'=>$request->lrn,
                    'name'=>$request->name,
                    'sex'=>$request->sex,
                    'birthdate'=>$request->birthdate,
                    'clcname'=>$request->clcname,
                    'clctype'=>$request->clctype,
                    'clcbarangay'=>$request->clcbarangay,
                    'municipal'=>$request->municipal,
                    'leveltest'=>$request->leveltest,
                    'datereg'=>$request->datereg,
                    'dateexam'=>$request->dateexam,
                ]
            );
            return redirect()->route('clcs');
        }

        function new_post(){
            return view('clc.clc');
        }

        function edit($id){
            $clc=Clc::find($id);
            return view('clc.clc')->withClc($clc);
        }

         function update(Request $request, $id){

                $clc=Clc::find($id);
            $clc->place=$request->place;
            $clc->testing=$request->testing;
            $clc->barangay=$request->barangay;
            $clc->municipality=$request->municipality;
            $clc->lrn=$request->lrn;
            $clc->name=$request->name;
            $clc->sex=$request->sex;
            $clc->birthdate=$request->birthdate;
            $clc->clcname=$request->clcname;
            $clc->clctype=$request->clctype;
            $clc->clcbarangay=$request->clcbarangay;
            $clc->municipal=$request->municipal;
            $clc->leveltest=$request->leveltest;
            $clc->datereg=$request->datereg;
            $clc->dateexam=$request->dateexam;
           $clc->save();
           return redirect()->route('clcs');
        }

        function find(Request $req){
            $clcs=Clc::where('day',
                'like','%'.$req->search.'%')->orderBy('day','asc')->paginate(5);;
            return view('clc.clcs')->withClcs($clcs);
        }
        function view_details($id, $lastname){
      $clcs=Clc::find($id);
      return view('pdf.clcs')->withClcs($clcs);
    }

        public function getPDF(){

        $clcs=Clc::all();
         $pdf=PDF::loadview('pdf.clcs',['clcs'=>$clcs]);
         return $pdf->stream('clcs.pdf');
      }

       


    }
