<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Str;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::get('http://waaasil.com/care/api/allState');

        $state = json_decode($response->getBody(), true);

        $allState = $state['data'];

        $code = Str::random(5);
        $response = Http::post('http://waaasil.com/care/api/newUser', [
            'fullName' => $request->fullName,
            'email' => $request->email,
            'userPhone' => $request->userPhone,
            'otp' => $code,
            'userNotification' => 'hi there',
            'password' => $request->password,
            'genderId' => (int)$request->genderId,
            'userLevel' => 2,

        ]);
       

        $data = json_decode($response->getBody());
        $id = $data->userId;
        $request->session()->put('id',$request->input());
        if ($data->code == 200) {
            return view('profile.create', compact('id'))->with('state', $allState);
        } else {
            return view('errors.403');
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
