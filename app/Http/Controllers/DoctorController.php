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
    
        $code = Str::random(5);
        $response = Http::post('http://waaasil.com/care/api/users', [
            'name' => $request->name,
            'email' => $request->email,
            'user_phone' => $request->user_phone,
            'otp' => $code,
            'user_notification' => 'hi i am doctor',
            'password' => $request->password,
            'gender_id' => (int)$request->gender_id,
            'user_type' => 1,

        ]);
    
        $data = json_decode($response->getBody());
        dd($data);
        // // $id = $data->userId;
        //  $id = $data->data->userId;
        //  $token=$data->data->token;
        if ($data->code == 200) {
            dd($data);
            return view('doctorProfile.create', compact('id','token'));
        } else {
            return view('errors.403');
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
