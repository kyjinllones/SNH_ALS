<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Module extends Model
{
	protected $table ="modules";
    protected $fillable = ['user_id','mod_title','module_pdf','type'];

     public function getProfPicAttribute($value){
    	return asset('storage/avatars/'.$value);
    }
     public function user(){
       return $this->belongsTo(User::class);
    }
   //one posts may have multiple comments
    // public function comments(){
    //   return $this->hasMany(Comment::class);
    // }


    // public function getStatusAttribute($value){
    // 	if($value==1)
    // 		return 'Current';
    // 	else 
    // 		return 'Not Current';
    // }

    // public function setStatusAttribute($value){
    // 	$this->attributes['status']=(integer)$value;
    // }
    // public function user(){
    // 	return $this->belongsTo('App\User');
    // }
    
}

