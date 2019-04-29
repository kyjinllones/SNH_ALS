<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clc extends Model
{
  protected $fillable = ['user_id',
  'place', 
  'testing', 
  'barangay',
  'municipality',
  'lrn',
  'name',
  'sex',
  'birthdate',
  'clcname',
  'clctype',
  'clcbarangay',
  'municipal',
  'leveltest',
  'datereg',
  'dateexam'
];
  protected $table ="clc";
    

    public function getDateAttribute($value){
        return date('M-d, Y', strtotime($value));
    }
}
