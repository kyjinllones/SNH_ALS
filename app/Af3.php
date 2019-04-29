<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Af3 extends Model
{
    //
     protected $fillable = ['user_id',
 							'nameclc',
 							'typeclc',
 							'barangayclc',
 							'municipality',
 							'lrn',
 							'lname',
 							'fname',
 							'midname',
 							'nameexten',
 							'sex',
 							'birthdate',
 							'age',
 							'firstdate',
 							'typeprogram',
 							'modeprogram',
 							'pisscores',
 							'basicliterate',
 							'neoliterate',
 							'postliterate',
 							'reading',
 							'numeracy',
 							'writing',
 							'listening',
 							'overallscore',
 							'endprogram',
 							'remarks'];
    protected $table ="af3";

    
      public function getDateAttribute($value){
        return date('M-d, Y', strtotime($value));
    }

}
