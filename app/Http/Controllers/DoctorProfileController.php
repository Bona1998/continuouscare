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
        $request = Http::get('http://waaasil.com/care/api/doctors/' . $id);
        // $dat = $request['data']['patientProfile'];
        $dat = json_decode($request->getBody());
        $data = $dat->data->doctorProfile;
    

        return view('doctorProfile.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $request = Http::get('http://waaasil.com/care/api/doctors/' . $id);
        $dat = json_decode($request->getBody());
        $data = $dat->data->doctorProfile;
        $state = $dat->data->states;
        $role = $dat->data->roles;
        $specialization = $dat->data->specializations;
        if (empty($data)) {
            Flash::error('Profile not found');

            return redirect(route('doctorProfile.show'));
        }
        return view('doctorProfile.edit', compact('data','state','specialization','role'));
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
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->put('http://waaasil.com/care/api/doctors/' . $id, [
            // 'id' => $request->id,
            'name' => $request->name,
            'state_id' => $request->state_id,
            'specialization_id' =>$request->specialization_id,
            'role_id' => $request->role_id,
            'bio' => $request->bio,
            'address' => $request->address,
            'image' =>  $request->file('image'),
            // $image = $request->file('image'),
            //  if($request->hasFile('img')){ $file =$request->file('img');}
            
        ]);
         $image = $request->file('image');
        $dat = json_decode($response->body());
        // dd($image);
         dd( $dat->data->image);
        
        if ($dat->code == 200) {
            $request =Http::get('http://waaasil.com/care/api/doctors/'.$id);
            $dat = json_decode($request->getBody());
            $data = $dat->data->doctorProfile;
            $state = $dat->data->states;
            $role = $dat->data->roles;
            $specialization = $dat->data->specializations;
            //  dd($state);
      
            return view('doctorProfile.show',[$id],compact('data','state','specialization','role'));
        } else {    
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
