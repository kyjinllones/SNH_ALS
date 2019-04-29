<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
use Illuminate\Database\Eloquent\SoftDeletes;
class Enrollee extends Model
{
    protected $fillable = ['user_id',
     'name',
 	'sex',
 	'birthdate',
 	'age',
 	'mothertongue',
 	'ip',
 	'religion',
 	'purok',
 	'barangay',
 	'municipality',
 	'province',
 	'fathersname',
 	'mothersname',
 	'contactno',
 	'lastgradelevel',
 	'date',
 	'interested',
 	'preffer',
 	'lrn'
 	];
  	protected $table ="enrollees";

  	public function user(){
       return $this->belongsTo(User::class);
    }
      public function getBithDateAttribute($value){
        return date('M-d, Y', strtotime($value));
    }
    public function getDateAttribute($value){
        return date('M-d, Y', strtotime($value));
    }
}
