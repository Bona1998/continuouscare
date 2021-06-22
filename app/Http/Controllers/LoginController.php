<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class LoginController extends Controller
{
   public function loginapi(){

    $http = new \GuzzleHttp\Client;
    
    $response = $http->post('http://waaasil.com/care/api/userLogin',[
        'headers'=>[
            'Authoruzation'=> 'Bearer'.session()->get('token.access_token')
        ],
        'query'=>[
            'emali'=>'hassan@osman .com',
            'password'=>'asdfg123097A@',
            'userLevel'=>'2'
        ]
    ]);
    $result = json_decode((string)$response->getBody(),true);
    return dd($result);
    return view('login');


   } 
}
