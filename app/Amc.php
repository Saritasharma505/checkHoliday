<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amc extends Model
{
  public $timestamps = true;
   protected $table = 'amcs';

   protected $fillable = ['name','member_id','email','mobile','amount', 	'dsa_assigned','txnID','amcDate'];
 
 protected $hidden =['txnID','amcDate'];
}
