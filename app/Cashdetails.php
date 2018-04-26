<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashdetails extends Model
{
    protected $table='cashrecord';
    protected $fillable =['membershipid','card_type','bank_name','card_holder_name', 'card_amount', 'card_number_digits', 'cash_amount','online_amount','cash_card_amount','cheque_holder_name','cheque_number_digits','cheque_amount'];
}


