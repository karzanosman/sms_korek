<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\cposts;

class EditCompose extends Component
{

    //this function can be used to delete a record by id in the cposts table
    public function delete($id){
        cposts::find($id)->delete();
        return redirect('edit_compose');
    }   


    //this function can be used to get all fields with it is thier values to be shown on the edit-compose page
    public function render()
    {
        $array = [
            'composes' => cposts::get(),
        ];
        return view('edit-compose' , $array)->extends('layouts.app');
    }
}
