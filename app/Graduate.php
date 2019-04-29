<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Graduate extends Model
{
    protected $fillable = ['user_id',
    						'lastname',
    						'firstname',
    						'nameexten',
    						'midname',
    						'purok',
    						'barangay',
							'municipality',
							'province',
							'birthdate',
					'sex',
'progenroll','delmode','clcname','clcaddress',
'namedaci','calenyear','pispre','pispost','blpre','blpost',
'nlpre','nlpost','postlpre','postlpost','fltreadingpre','fltreadingpost',
'fltnumeracypre','fltnumeracypost','fltwritingpre','fltwritingpost',
'fltlistenpre','fltlistenpost','overallpre','overallpost','infed1'
,'infed2','infed3','remarks1','remarks2','remarks3','programs','testtaken',
'dateexam','testingcenter','locationcenter','aeresult'];
  	protected $table ="graduates";

      public function getDateAttribute($value){
        return date('M-d, Y', strtotime($value));
    }
}
