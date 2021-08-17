<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DoctorProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('doctorProfile.create');
    }

    /**
     * ************************************************
     * http://waaasil.com/care/api/updateDoctorProfile
     * 
     * ************************************************
     *  recive user id form registion process
     * 
     * send http post requset to api to make profile
     * 
     * with sended data
     * 
     * resiving response from serve and 
     * 
     * decode it and checking the status of it 
     *
     * 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->userId;
        $response = Http::post('http://waaasil.com/care/api/updateDoctorProfile', [
            'userId' => $request->userId,
            'fullName' => $request->fullName,
            'bio' => $request->bio,
            'rolejob_id' => $request->rolejob_id,
            'stateId' => $request->stateId,
            'address' => $request->address,
            'specialized_id' => $request->specialized_id
        ]);
        $data = json_decode($response->getBody());

        if ($data->code == 200) {
            return view('comingSoon');
            // session()->flash('');
        }else
        {
            
        return redirect('errors.404');

        }
        return redirect('profile.create')->withErrors(['Opps', 'somethings Went Wrong']);
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
        return view('profile.edit',compact(34));
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
