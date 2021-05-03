<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\cposts;

class UpdateCompose extends Component
{

        //defined all variables that we have to use

    public $iid,$sms_title,$offer_name,$sms_content,$status,$languages;
    

    // fetch the values by id from the cposts table that we want to update

    public function mount($id){
        $this->iid = $id;                   //update we need !
        
        $findCompose = cposts::find($id);

        $this->sms_title = $findCompose->sms_title;
        $this->offer_name = $findCompose->offer_name;
        $this->sms_content = $findCompose->sms_content;
        $this->status = $findCompose->status;
        $this->languages = $findCompose->languages;
    }

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


    //sending updated values to cposts table fields

    public function update(){
        $this->validate();
        cposts::where('id',$this->iid)->update([
            'sms_title' =>$this->sms_title,
            'offer_name' => $this->offer_name,
            'sms_content' => $this->sms_content,
            'status' => $this->status == null ? 0 : $this->status,
            'languages' => $this->languages
        ]);
        session()->flash('message', 'Compose Successfully Updated!');
    }

    public function render()
    {
        return view('update-compose')->extends('layouts.app');
    }
}
