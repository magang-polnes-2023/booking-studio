<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studioController extends Controller
{
    public function index(){
        return view('studio.index');
    }


}
