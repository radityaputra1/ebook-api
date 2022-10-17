<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function me(){
        return [
            'Nama' => 'Raditya Putra Anugra Pratama',
            'NIS' => 3103120177,
            'Class' => 'XII RPL 6',
            'Phone'=> '081229427958',
    ];
    }
}