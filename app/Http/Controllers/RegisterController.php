<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Str;
use App\Http\Controllers\localStorage;
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
        // $response = Http::get('http://waaasil.com/care/api/allState');

        // $state = json_decode($response->getBody(), true);

        // $allState = $state['data'];

        $code = Str::random(5);
        $response = Http::post('http://waaasil.com/care/api/users', [
            'name' => $request->name,
            'email' => $request->email,
            'user_phone' => $request->user_phone,
            'otp' => $code,
            'user_notification' => 'hi there',
            'password' => $request->password,
            'gender_id' => (int)$request->gender_id,
            'user_type' => 2,

        ]);
       

        $data = json_decode($response->getBody());
        // dd($data);
         $id = $data->data->userId;
        //  dd($id);
        // dd($data->data->token);
        // dd($id);
        $token=$data->data->token;
        // localStorage.setIteam('id',{$id});
        // localStorage.setItem('id', 'id');
        
        "<script>
        localStorage.setItem('id', JSON.stringify(id));
        </script>";
        
       
        if ($data->code == 200) {
            return view('profile.create', compact('id','token'));
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
