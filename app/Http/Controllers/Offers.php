<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\cposts;
class Offers extends Component
{



    //this function can be used to get all fields with it is thier values to be shown on the pffers page

    public function render()
    {
        $array = [
            'composes' => cposts::all()
        ];
        return view('offers' , $array)->extends('layouts.app');
    }
}
