<?php

namespace App\Http\Controllers;

use App\Models\studio;
use Illuminate\Http\Request;

class studioController extends Controller
{
    public function index()
    {
        $studio1 = studio::where('id', 1)->first();
        $studio2 = studio::where('id', 2)->first();
        $studio3 = studio::where('id', 3)->first();
        $studio = studio::all();
        return view('studio.index', compact('studio1','studio2','studio3','studio'));
      
        // return view('studio.index', compact( 'studio'));
    }


}
