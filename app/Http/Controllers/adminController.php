<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
       public function setting () {
        return view('setting');

    }
    
    public function users () {
        return view('users');

    }
    public function blogs () {
        return view('blogs');

    }
    public function ourWork () {
        return view('ourWork');

    }
    public function services () {
        return view('services');

    }

    public function show () {
        

    }


}
