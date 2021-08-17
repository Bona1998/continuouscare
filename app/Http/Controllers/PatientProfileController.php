<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function GuzzleHttp\json_decode;

class PatientProfileController extends Controller
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



        return view('profile.create');
    }

    /**
     * ************************************************
     * http://waaasil.com/care/api/updatePatientProfile
     *
     ***************************************************
     * recive user id form registion process
     * 
     * making http  post request  to update the patient profile
     * 
     * sending requset with data and recive response
     * 
     * from the sever, decode it and 
     * 
     * test status code 
     * 
     * return image view
     * 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $id = $request->userId;

        $response = Http::post('http://waaasil.com/care/api/updatePatientProfile', [
            'userId' => $request->userId,
            'fullName' => $request->fullName,
            'stateId' => $request->stateId,
            'address' => $request->address,
            'hight' => $request->hight,
            'weight' => $request->weight,
            'bloodGroup' => $request->bloodGroup,
            'dateOfBirth' => $request->dateOfBirth,
           

        ]);
        // $response = Http::post('http://waaasil.com/care/api/saveProfileImages', [
        //     'userId' => $request->userId,]);
        // dd($request);
        $data = json_decode($response->getBody());
        if ($data->code == 200) {
            return view('imageprofile.create', compact('id'));
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
    public function edit($userId)
    {
        // $userId = Http::get('http://waaasil.com/care/api/newUser')->first();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId)
    {

        $response = Http::post('http://waaasil.com/care/api/patients/{userId}', [
            'userId' => $request->userId,
            'fullName' => $request->fullName,
            'stateId' => $request->stateId,
            'address' => $request->address,
            'hight' => $request->hight,
            'weight' => $request->weight,
            'bloodGroup' => $request->bloodGroup,
            'dateOfBirth' => $request->dateOfBirth,
        ]);

        $data= json_decode($response->getBody());

        if ($$data->code == 200) {
            return view('comingSoon');
            // session()->flash('');
        }else
        {
            
        return redirect('errors.404');

        }

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
