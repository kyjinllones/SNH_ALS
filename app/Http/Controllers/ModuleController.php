<?php

namespace App\Http\Controllers;
use File;
use Storage;
use Validator;
use DB;
use App\Module;
use Auth;
use App\User;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('module');
    }
   
     protected $rules = [
     'module_pdf'=>'required|file|max:2024',
   ];
   protected $messages = [
     'module_pdf.required' => 'Select a file before submitting!',
     'module_pdf.file' => 'This should be a file format',
     'module_pdf.image' =>'The file should be an image.'
   ];
    public function upload(Request $request){
        $validator=Validator::make($request->all(),
                    $this->rules, $this->messages);

        if($validator->fails())
                return back()->withErrors($validator)->withInput();
                $file=$request->file('module_pdf');
                $new_file_name = $file->getClientOriginalName();
       
        $uploaded_file=$new_file_name;

        if($request->type=='Elementary'){
            $path=$file->move('storage/avatars/ElementaryModule',
                    $uploaded_file);
                }
        else{
            $path=$file->move('storage/avatars/SecondaryModule',$uploaded_file);
        }

        $statusChange=DB::update('update modules set status=0 where user_id='.$request->user()->id);
        $module=new Module;
        $module->module_pdf=$uploaded_file;
        $module->status=1;
        $module->type=$request->type;
        $module->mod_title=$request->mod_title;
        $module->user_id=$request->user()->id;
        
        $module->save();
        $modules=$module->get();
        return view('modules')->withModules($modules);
        
    }
   
   
    public function module(Module $module)
    {
        $modules=$module->orderBy('mod_title','asc')->paginate(5);
        return view('modules')->withModules($modules);

    }
    function find(Request $req){
        $modules=Module::where('mod_title',
            'like','%'.$req->search.'%')->orderBy('name','asc')->paginate(5);;
        return view('modules')->withModules($modules);
    }
     function edit($id){
        $module=Module::find($id);
        return view('module')->withModule($module);
    }
     function new_post(){
        return view('module');
    }
     function update(Request $request, $id){
       //   $user_id=$request->user()->id;
       // $user=User::find($user_id);
       // $module=$user->modules->find($id);
       $module=Module::find($id);
       $module->type=$request->type;
       $module->mod_title=$request->mod_title;
       $module->module_pdf=$request->module_pdf;
       $module->save();
       return redirect()->route('module');
     
    }

    function delete($id, Request $request){
        $user_id=$request->user()->id;
        $module=Module::find($id);
       
        $module->delete();
        if($module->trashed()){
            return redirect()->route('module');
        }
       return redirect()->route('modules.module');
    }

    function restore($id, Request $request){
       $module=Module::withTrashed()
            ->where('id','=',$id) 
            ->where('user_id','=',$request->user()->id);
       $module->restore();
       return redirect()->route('module');
    }   
}
