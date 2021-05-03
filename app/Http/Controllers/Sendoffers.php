<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\cposts;
use App\Models\transactions;

class Sendoffers extends Component
{

    //defined all variables that we have to use

    public $findCompose , $phonenumber , $code , $sms_id , $content; 


    // fetch the values by id from the cposts table that the customer wants to reply

    public function mount($id){
        $this->findCompose = cposts::find($id);
    }


    //it's about to send values to the transaction table

    public function submit(){
        transactions::create([
            'customer_mobile_number' => $this->phonenumber,
            'sms_content' => $this->content,
            'sms_id' => $this->sms_id,
        ]);
        session()->flash('message', 'Offer Successfully Sent!');

    }



        /*in render method we are taking the value of offer_name that the customer wants to reply for , and taking the value of contents with putting two variable 
        one for the typing in a text box and the last one for what the customer want to select from the drop down */

    public function render()
    {
        
        $offer_name = '';
        if(!empty($this->sms_id)){
            $offer_name = cposts::find($this->sms_id)->offer_name;
        }

        $this->content = $this->findCompose->sms_content." [ ".$this->code." ] [ ". $offer_name ." ]";

        $array = [
            'offers' => cposts::all()
        ];
        return view('sendoffers'  , $array)->extends('layouts.app');
    }
}
