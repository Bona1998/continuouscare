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
use App\Http\Controllers\localStorage;

use function GuzzleHttp\json_decode;

$st;
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

        $code = Str::random(5);
        $response = Http::post('http://waaasil.com/care/api/users', [
            'name' => $form->name,
            'email' => $form->email,
            'user_phone' => $form->user_phone,
            'otp' => $code,
            'user_notification' => 'hi i am patient',
            'password' => $form->password,
            'gender_id' => (int)$form->gender_id,
            'user_type' => 2,
        ]);

        $Data = json_decode($response->getBody());
        $saveData = $Data;
        // dd($saveData);
        $token = $saveData->data->token;
        session(['token' => $token]);
        $token = session('token');
        $id = $saveData->data->userId;
   
        try {
            if ($saveData->code == 200) {
                $proData = Http::get('http://waaasil.com/care/api/patients/{userId}', [
                    'userId'=> $id,
                ]);
                $profileData = json_decode($proData->getBody());
                dd($profileData);
                return view('profile.index', compact('id', 'token', 'profileData'));
            } else {
                return view('errors.403');
            }
        } catch (Exception $e) {
            throw($e);
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
