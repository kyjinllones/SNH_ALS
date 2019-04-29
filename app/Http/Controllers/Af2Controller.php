<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Af2;
use Auth;
use App\User;
use DB;
use Input;
use Validator;
class Af2Controller extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }


        function index(Af2 $af2){
           $af2s=$af2->orderBy('lastname','asc')->paginate(5);
           return view('af2s')->withAf2s($af2s);
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
     // // 				$user_id=$request->user()->id;
					// $user=User::find($user_id);
     //                $user->af2->lrn=$request->lrn;
     //                $user->af2->save();
     //        		// $user->af2->create([
        	 $af2=Af2::create([
                    'user_id'=>Auth::user()->id,
                    'date'=>$request->date,
                    'lrn'=>$request->lrn,
                    'lastname'=>$request->lastname,
                    'firstname'=>$request->firstname,
                    'nameexten'=>$request->nameexten,
                    'midname'=>$request->midname,
                    'purok'=>$request->purok,
                    'barangay'=>$request->barangay,
                    'municipality'=>$request->municipality,
                    'province'=>$request->province,
                    'birthdate'=>$request->birthdate,
                    'placebirth'=>$request->placebirth,
                    'sex'=>$request->sex,
                    'civil'=>$request->civil,
                    'religion'=>$request->religion,
                    'ip'=>$request->ip,
                    'mothertongue'=>$request->mothertongue,
                     'pwd'=>$request->pwd,
                    'fatherlname'=>$request->fatherlname,
                    'fatherfname'=>$request->fatherfname,
                    'fathermidname'=>$request->fathermidname,
                    'fatheroccupation'=>$request->fatheroccupation,
                    'motherlname'=>$request->motherlname,
                    'motherfname'=>$request->motherfname,
                    'mothermidname'=>$request->mothermidname,
                    'motheroccupation'=>$request->motheroccupation,
                    'elementary'=>$request->elementary,
                    'secondary'=>$request->secondary,
                    'dropschool'=>$request->dropschool,
                    'alsbefore'=>$request->alsbefore,
                    'nameprogram'=>$request->nameprogram,
                      'levelliteracy'=>$request->levelliteracy,
                    'yearattended'=>$request->yearattended,
                    'completeprogram'=>$request->completeprogram,
                    'ifyes'=>$request->ifyes,
                    'inkms'=>$request->inkms,
                    'hoursmins'=>$request->hoursmins,
                    'gethome'=>$request->gethome,
                    'monday'=>$request->monday,
                    'tuesday'=>$request->tuesday,
                    'wednesday'=>$request->wednesday,
                    'thursday'=>$request->thursday,
                    'friday'=>$request->friday,
                    'saturday'=>$request->saturday,
                    'sunday'=>$request->sunday,
                    'faciname'=>$request->faciname,
                    'learners'=>$request->learners,
                ]
            );
             $af2->save();
            return redirect()->route('af2s');
        }

        function new_post(){
            return view('af2');
        }

        function edit($id){
            $af2=Af2::find($id);
            return view('af2')->withAf2($af2);
        }

         function update(Request $request, $id){
         			$user_id=$request->user()->id;
					$user=User::find($user_id);
					$af2=$user->af2s->find($id);
                	$af2->date=$request->date;
                	$af2->lrn=$request->lrn;
                	$af2->lastname=$request->lastname;
                    $af2->firstname=$request->firstname;
                    $af2->nameexten=$request->nameexten;
                    $af2->midname=$request->midname;
                   	$af2->purok=$request->purok;
                    $af2->barangay=$request->barangay;
                    $af2->municipality=$request->municipality;
                    $af2->province=$request->province;
                    $af2->birthdate=$request->birthdate;
                    $af2->placebirth=$request->placebirth;
                    $af2->sex=$request->sex;
                    $af2->civil=$request->civil;
                    $af2->religion=$request->religion;
                    $af2->ip=$request->ip;
                    $af2->mothertongue=$request->mothertongue;
                    $af2->pwd=$request->pwd;
                    $af2->fatherlname=$request->fatherlname;
                    $af2->fatherfname=$request->fatherfname;
                    $af2->fathermidname=$request->fathermidname;
                    $af2->fatheroccupation=$request->fatheroccupation;
                    $af2->motherlname=$request->motherlname;
                    $af2->motherfname=$request->motherfname;
                    $af2->mothermidname=$request->mothermidname;
                    $af2->motheroccupation=$request->motheroccupation;
                    $af2->elementary=$request->elementary;
                    $af2->secondary=$request->secondary;
                    $af2->dropschool=$request->dropschool;
                    $af2->alsbefore=$request->alsbefore;
                    $af2->nameprogram=$request->nameprogram;
                    $af2->levelliteracy=$request->levelliteracy;
                    $af2->yearattended=$request->yearattended;
                    $af2->completeprogram=$request->completeprogram;
                    $af2->ifyes=$request->ifyes;
                    $af2->inkms=$request->inkms;
                    $af2->hoursmins=$request->hoursmins;
                    $af2->gethome=$request->gethome;
                    $af2->monday=$request->monday;
                    $af2->tuesday=$request->tuesday;
                    $af2->wednesday=$request->wednesday;
                    $af2->thursday=$request->thursday;
                    $af2->friday=$request->friday;
                    $af2->saturday=$request->saturday;
                    $af2->sunday=$request->sunday;
                    $af2->faciname=$request->faciname;
                    $af2->learners=$request->learners;
          
           $af2->save();
           return redirect()->route('af2s');
        }
function view_details($id, $lastname){
      $af2s=Af2::find($id);
      return view('pdf.af2s')->withAf2s($af2s);
    }
        // function find(Request $req){
        //     $clcs=Clc::where('day',
        //         'like','%'.$req->search.'%')->orderBy('day','asc')->paginate(5);;
        //     return view('clc.clcs')->withClcs($clcs);
        // }

}
