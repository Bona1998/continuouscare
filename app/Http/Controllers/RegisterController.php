<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterForm;
use Dotenv\Result\Success;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
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
        return view('register');
    }

    /**
     * ***************************************************
     * http://waaasil.com/care/api/allState
     * 
     * **************************************************
     * making an http request with get method to get allState
     * 
     * recive the respons and decode it
     *
     * save data to array an pass it to view
     * 
     *  **********************************************
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterForm $form)
    {

        $response = Http::get('http://waaasil.com/care/api/allState');

        $state = json_decode($response->getBody(), true);

        $allState = $state['data'];

        $Otpcode = Str::random(5);

        $response = Http::post('http://waaasil.com/care/api/newUser', [
            'fullName' => $form->fullName,
            'email' => $form->email,
            'userPhone' => $form->userPhone,
            'otp' => $Otpcode,
            'userNotification' => 'hi there',
            'password' => $form->password,
            'genderId' => (int)$form->genderId,
            'userLevel' => 2,
        ]);


        $data = json_decode($response->getBody());

        $id = $data->userId;

        if ($data->code == 200) {
            return view('profile.create', compact('id', 'allState'));
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
}
