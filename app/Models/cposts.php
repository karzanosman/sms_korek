<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cposts extends Model
{
    use HasFactory;
    protected $guarded= [];
    
    //this method is for checking to know that the customer replyed for this offer
    public function  has_transaction(){
        return $this->hasOne('App\Models\transactions' , 'sms_id' ,'id');
    }
}
