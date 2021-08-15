<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutController extends Controller
{
    public function index(){
        $aboutuses = AboutUs::all();
        $aboutuse = AboutUs::all()->skip(2);
        return view('about',compact('aboutuses','aboutuse'));
    }
}
