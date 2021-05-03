<?php

namespace App\Http\Controllers;

use Livewire\Component;

use App\Models\cposts;

class Welcome extends Component
{

    //defined all variables that we have to use
    
    public $sms_title,$offer_name,$sms_content,$status,$languages;



    //rules for required fields

    protected $rules = [
        'sms_title' => 'required',
        'offer_name' => 'required',
        'sms_content' => 'required',
        'languages' => 'required',
    ];

    public function setLanguage($lang){
        $this->languages = $lang;
    }


    //insert values to cposts table fields

    public function submit(){
        $this->validate();
        cposts::create([
            'sms_title' =>$this->sms_title,
            'offer_name' => $this->offer_name,
            'sms_content' => $this->sms_content,
            'status' => $this->status == null ? 0 : $this->status,
            'languages' => $this->languages
        ]);
        session()->flash('message', 'Compose Successfully Created!');

        $this->sms_title = '';
        $this->offer_name = '';
        $this->sms_content = '';
        $this->status = '';
        $this->languages = '';

            
    }

    public function render()
    {
        return view('welcome')->extends('layouts.app');
    }
}
