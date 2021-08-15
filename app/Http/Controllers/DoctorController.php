<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DoctorController extends Controller
{

    /**
     * *******************************************************
     * http://waaasil.com/care/api/allState
     * 
     * **************************************************
     * making an http request with get method to get allState
     * 
     * recive the respons and decode it
     *
     * save data to array an pass it to view
     * 
     * * **********************************************
     * http://waaasil.com/care/api/newUser
     * 
     * **********************************************
     * 
     * make post requset to api and send clinte data
     * 
     * recive the response from serve and decode it 
     * 
     * cheacking for status code if equle 200
     * 
     * if then return profile view
     * 
     * else return error
     * 
     * ***********************************************
     * http://waaasil.com/care/api/specialization
     * 
     * ***********************************************
     * makign http request to get specialization for doctor profile
     * 
     * recive response and decode it and save it 
     * 
     * to array and pass it to view
     * 
     * ***********************************************
     * http://waaasil.com/care/api/role
     * 
     * ***********************************************
     *making http requset to get all role for doctor profile
     *
     * recive response and decode it  and save it 
     * 
     * to array and pass it to view
     * 
     * 
     * all validation comming from RegisterForm.php 
     * 
     * 
     */

     
    public function store(RegisterForm $request)
    {
        $response = Http::get('http://waaasil.com/care/api/allState');

        $state = json_decode($response->getBody(), true);

        $allState = $state['data'];


        $res = Http::get('http://waaasil.com/care/api/specialization');

        $space = json_decode($res->getBody(), true);

        $allSpecialization = $space['data'];

        $res = Http::get('http://waaasil.com/care/api/role');

        $roles = json_decode($res->getBody(), true);

        $allRoles = $roles['data'];


        $code = Str::random(5);

        $response = Http::post('http://waaasil.com/care/api/newUser', [
            'fullName' => $request->fullName,
            'email' => $request->email,
            'userPhone' => $request->userPhone,
            'otp' => $code,
            'userNotification' => 'welcome',
            'password' => $request->password,
            'genderId' => (int)$request->genderId,
            'userLevel' => 1,

        ]);


        $data = json_decode($response->getBody());

        $id = $data->userId;

        if ($data->code == 200) {
            return view('doctorProfile.create', compact('id', 'allState', 'allRoles', 'allSpecialization'));
        }
        return view('errors.403');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    // Get average runtime of successful runs in seconds


}
