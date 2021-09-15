<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use function GuzzleHttp\json_decode;

class PatientLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $response = Http::post('http://waaasil.com/care/api/userLogin', [
            'userName' => $request->userName,
            'password' => $request->password,
            'user_type' => 2,
        ]);

        $dat = json_decode($response->getBody());
        //  dd($data);
        $res = json_decode($response->getBody());
        $saveData=$res;
         //dd($saveData);
        $token= $saveData->data->token;
        session(['token' => $token]);
        $token = session('token');
        $id=$saveData->data->userId;
    

        if ($dat->code == 200) {
            $request =Http::get('http://waaasil.com/care/api/patients/'.$id);
            $dat = json_decode($request->getBody());
            $data = $dat->data->patientProfile;
            $age = Carbon::parse($dat->data->patientProfile->patient->date_of_birth)->diff(Carbon::now())->y;

            // for weights 
             $arrayData =last($dat->data->patientProfile->weights);
   // dd($arrayData);
             $lastWeighte =$arrayData->weight;
   // dd($arrayData->date);
             $end = Carbon::parse($arrayData->date); 
             $current = Carbon::now();
             $length = $end->diff($current)->d;

            return view('profile.show',compact('data','age','lastWeighte','length'));
        } else {
            return back()->withErrors(['Hmmm!', 'Sorry your credintioal dosn\'t  match our recorders !']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
