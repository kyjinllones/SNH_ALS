<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enrollee;
use Input;
use DB;
use PDF;
use Excel;
use Validator;
use Auth;
use App\User;

class EnrolleesController extends Controller
{
public function __construct()
{
$this->middleware('auth');
}
//
public function index(Enrollee $enrollee)
{
$enrollees=$enrollee->orderBy('name','asc')->paginate(5);

return view('enrollee.enrollees')->withEnrollees($enrollees);
}

protected $rules = [
'name'=>'required',
'sex'=>'required',
'birthdate'=>'required',
'age'=>'required',
'mothertongue'=>'required',
'ip'=>'required',
'religion'=>'required',
'purok'=>'required',
'barangay'=>'required',
'municipality'=>'required',
'province'=>'required',
'fathersname'=>'required',
'mothersname'=>'required',
'contactno'=>'required',
'lastgradelevel'=>'required',
'date'=>'required',
'interested'=>'required',
'preffer'=>'required',
'lrn'=>'required',
];
function add(Request $request){
//   $validator=Validator::make($request->all(), $this->rules);
// if($validator->fails()){
//     return back()->withErrors($validator)->withInput();
// }
$enrollee= Enrollee::create([
'user_id'=>Auth::user()->id,
'name'=>$request->name,
'sex'=>$request->sex,
'birthdate'=>$request->birthdate,
'age'=>$request->age,
'mothertongue'=>$request->mothertongue,
'ip'=>$request->ip,
'religion'=>$request->religion,
'purok'=>$request->purok,
'barangay'=>$request->barangay,
'municipality'=>$request->municipality,
'province'=>$request->province,
'fathersname'=>$request->fathersname,
'mothersname'=>$request->mothersname,
'contactno'=>$request->contactno,
'lastgradelevel'=>$request->lastgradelevel,
'date'=>$request->date,
'interested'=>$request->interested,
'preffer'=>$request->preffer,
'lrn'=>$request->lrn,
]);
return redirect()->route('enrollees');
}

function edit($id){
$enrollee=Enrollee::find($id);
return view('enrollee.enrollee')->withEnrollee($enrollee);
}
function update(Request $request, $id){
$user_id=$request->user()->id;
$user=User::find($user_id);
$enrollee=$user->enrollees->find($id);
$enrollee->name=$request->name;
$enrollee->sex=$request->sex;
$enrollee->birthdate=$request->birthdate;
$enrollee->age=$request->age;
$enrollee->mothertongue=$request->mothertongue;
$enrollee->ip=$request->ip;
$enrollee->religion=$request->religion;
$enrollee->purok=$request->purok;
$enrollee->barangay=$request->barangay;
$enrollee->municipality=$request->municipality;
$enrollee->province=$request->province;
$enrollee->fathersname=$request->fathersname;
$enrollee->mothersname=$request->mothersname;
$enrollee->contactno=$request->contactno;
$enrollee->lastgradelevel=$request->lastgradelevel;
$enrollee->date=$request->date;
$enrollee->interested=$request->interested;
$enrollee->preffer=$request->preffer;
$enrollee->lrn=$request->lrn;
$enrollee->save();
return redirect()->route('enrollees');
}
function new_post(){
return view('enrollee.enrollee');
}
function find(Request $req){
$enrollees=Enrollee::where('name',
'like','%'.$req->search.'%')->orderBy('name','asc')->paginate(5);
return view('enrollee.enrollees')->withEnrollees($enrollees);
}

// public function getPDF(){
// 	$enrollees=Enrollee::all();
// 	$pdf=PDF::loadview('pdf.enrollees',['enrollees'=>$enrollees]);
// 	return $pdf->stream('enrollees.pdf');
// }
// public function excel(){
// 	$enrollees=Enrollee::all();
// 	$enrollee_array[]=array('name','sex','birthdate','age','mothertongue','ip',
// 		'religion','purok','barangay','municipality','province',
// 		'fathersname','mothersname','contactno','lastgradelevel','date','interested',
// 		'preffer','lrn');
// 	foreach ($enrollees as $enrollee) {
// 		$enrollee_array[]=array('name','sex','birthdate','age','mothertongue','ip',
// 		'religion','purok','barangay','municipality','province',
// 		'fathersname','mothersname','contactno','lastgradelevel','date','interested',
// 		'preffer','lrn');
		
// 	}
// 	Excel:Create('Enrollee',function($excel) use($enrollee_array){
// 		$excel->setTitle('Enrollee');
// 		$excel->sheet('Enrollee', function($sheet) use($enrollee_array){
// 			$sheet->fromArray($enrollee_array,null,'A1', false,false);

// 		});

// 	})->download('xlsx');



// }
    function view($id, $name){
      $enrollee=Enrollee::find($id);
      return view('pdf.enrollees')->withEnrollee($enrollee);
    }

}