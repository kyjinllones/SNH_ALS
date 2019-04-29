<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Af3;
use Auth;
use App\User;
use DB;
use Input;
use Validator;
class Af3Controller extends Controller
{
    //
    public function __construct()
        {
            $this->middleware('auth');
        }


        function index(Af3 $af3){
           $af3s=$af3->orderBy('lname','asc')->paginate(5);
           return view('af3s')->withAf3s($af3s);
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
     //    $validator=Validator::make($request->all(), $this->rules);
     //        if($validator->fails()){
     //            return back()->withErrors($validator)->withInput();
     //        }
     // // 				
        	 $af3=Af3::create([
                    'user_id'=>Auth::user()->id,
                    'nameclc'=>$request->nameclc,
                    'typeclc'=>$request->typeclc,
                    'barangayclc'=>$request->barangayclc,
                    'municipality'=>$request->municipality,
                    'lrn'=>$request->lrn,
                    'lname'=>$request->lname,
                    'fname'=>$request->fname,
                    'midname'=>$request->midname,
                    'nameexten'=>$request->nameexten,
                    'sex'=>$request->sex,
                    'birthdate'=>$request->birthdate,
                    'age'=>$request->age,
                    'firstdate'=>$request->firstdate,
                    'typeprogram'=>$request->typeprogram,
                    'modeprogram'=>$request->modeprogram,
                    'pisscores'=>$request->pisscores,
                    'basicliterate'=>$request->basicliterate,
                    'neoliterate'=>$request->neoliterate,
                     'postliterate'=>$request->postliterate,
                    'reading'=>$request->reading,
                    'numeracy'=>$request->numeracy,
                    'writing'=>$request->writing,
                    'listening'=>$request->listening,
                    'overallscore'=>$request->overallscore,
                    'endprogram'=>$request->endprogram,
                    'remarks'=>$request->remarks
                    ]
            );
             $af3->save();
            return redirect()->route('af3s');
        }

        function new_post(){
            return view('af3');
        }

        function edit($id){
            $af3=Af2::find($id);
            return view('af3')->withAf2($af3);
        }

         function update(Request $request, $id){
         			$user_id=$request->user()->id;
					$user=User::find($user_id);
					$af3=$user->af3s->find($id);
                	$af3->nameclc=$request->nameclc;
                    $af3->typeclc=$request->typeclc;
                    $af3->barangayclc=$request->barangayclc;
                    $af3->municipality=$request->municipality;
                    $af3->lrn=$request->lrn;
                    $af3->lname=$request->lname;
                    $af3->fname=$request->fname;
                    $af3->midname=$request->midname;
                    $af3->nameexten=$request->namexten;
                    $af3->sex=$request->sex;
                    $af3->birthdate=$request->birthdate;
                    $af3->age=$request->age;
                    $af3->firstdate=$request->firstdate;
                    $af3->typeprogram=$request->typeprogram;
                    $af3->modeprogram=$request->modeprogram;
                    $af3->pisscores=$request->pisscores;
                    $af3->basicliterate=$request->basicliterate;
                    $af3->neoliterate=$request->neoliterate;
                    $af3->postliterate=$request->postliterate;
                    $af3->reading=$request->reading;
                    $af3->numeracy=$request->numeracy;
                    $af3->writing=$request->writing;
                    $af3->listening=$request->listening;
                    $af3->overallscore=$request->overallscore;
                    $af3->endprogram=$request->endprogram;
                    $af3->remarks=$request->remarks;
           $af3->save();
           return redirect()->route('af3s');
        }
function view_details($id, $lastname){
      $af3s=Af3::find($id);
      return view('pdf.af3s')->withAf3($af3s);
    }
        // function find(Request $req){
        //     $clcs=Clc::where('day',
        //         'like','%'.$req->search.'%')->orderBy('day','asc')->paginate(5);;
        //     return view('clc.clcs')->withClcs($clcs);
        // }

}
