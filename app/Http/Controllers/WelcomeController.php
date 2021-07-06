<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\BrifDescriptionRepository;
use App\Models\BrifDescription;
use App\Models\Services;
use App\Models\Reviwes;
use App\Models\Goals;

class WelcomeController extends Controller
{
    public function index(Request $request){
       
        $brifDescriptions = BrifDescription::all();
        $services = Services::all();
        $reviwes = Reviwes::all();
        $goals = Goals::all();
        return view('welcome',compact('brifDescriptions','services','reviwes','goals'));
    }
}
 