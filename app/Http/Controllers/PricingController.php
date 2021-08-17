<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use APP\Models\Plans_Picing;
use App\Models\Plans_Picing;
use App\Models\Patent_Services;
class PricingController extends Controller
{
    public function index()
    {
        $plansPicings =Plans_Picing::all();
        $patentServices =Patent_Services::all();

        return view('pricing',compact('plansPicings','patentServices'));
    }

}
