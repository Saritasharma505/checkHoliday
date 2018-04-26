<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    
     protected $fillable = [
         'member_id','subject','message','user_name','status_red','status_blue','status_red'
    ];
    
    protected $table='complains';
}
