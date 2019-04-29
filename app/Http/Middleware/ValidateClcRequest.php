<?php

namespace App\Http\Middleware;
use Validator;
use Closure;

class ValidateClcRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function validateRequest($request){
        //validation goes here
        $rules = [
        'day'=>'required',
        'time'=>'required',
        'nameofbarangay'=>'required',
        'clc'=>'required',
        'activities'=>'required',
    ];
        $validator=Validator::make(
            $request->all()
            ,$rules
        );
        
        if($validator->fails()){
            return back()
            ->withErrors($validator)->withInput();
        }
        //return request;
       
    }
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
