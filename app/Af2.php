<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
class Af2 extends Model
{
         // protected $dates= ['date'];

    	 protected $fillable = ['user_id','lrn','date' ,'lastname',
                    'firstname',
                    'nameexten',
                    'midname',
                    'purok',
                    'barangay',
                    'municipality',
                    'province',
                    'birthdate',
                    'placebirth',
                    'sex',
                    'civil',
                    'religion',
                    'ip',
                    'mothertongue',
                     'pwd',
                    'fatherlname',
                    'fatherfname',
                    'fathermidname',
                    'fatheroccupation',
                    'motherlname',
                    'motherfname',
                    'mothermidname',
                    'motheroccupation',
                    'elementary',
                    'secondary',
                    'dropschool',
                    'alsbefore',
                    'nameprogram',
                     'levelliteracy',
                    'yearattended',
                    'completeprogram',
                    'ifyes',
                    'inkms',
                    'gethome',
                    'monday',
                    'tuesday',
                    'wednesday',
                    'thursday',
                    'friday',
                    'saturday',
                    'sunday',
                    'faciname',
                    'learners'];
    	protected $table ="af2";

    	public function user(){
       return $this->belongsTo(User::class);
    }
     public function getDateAttribute($value){
        return date('M-d, Y', strtotime($value));
    }
}
