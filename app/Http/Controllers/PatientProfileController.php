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
    public function index(Request $request)
    {
        $response = Http::get('http://waaasil.com/care/api/patients/{userId}', [
            'userId' => $request->userId,
        ]);
        $data = json_decode($response->body());

        return view('Profile.index', compact('data'));
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
        $request =Http::get('http://waaasil.com/care/api/patients/3');
            // $dat = $request['data']['patientProfile'];
            $dat = json_decode($request->getBody());
            $data = $dat->data->patientProfile;
            if (empty($data)) {
                Flash::error('Patient not found');
    
                // return redirect(route('profile.index'));
            }
    
            return view('profile.show')->with('data', $data);
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

        $response = Http::post('http://waaasil.com/care/api/patients/3', [
            'userId' => $request->userId,
            'name' => $request->name,
            'state_id' => $request->state_id,
            'address' => $request->address,
            'height' => $request->height,
            'weight' => $request->weight,
            'date ' => $request->date,
            'blood_group' => $request->blood_group,
            'date_of_birth' => $request->date_of_birth,
        ]);

        $data = json_decode($response->getBody());

        if ($$data->code == 200) {
            return view('comingSoon');
            // session()->flash('');
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
        $request =Http::get('http://waaasil.com/care/api/patients/84');
        $dat = json_decode($request->getBody());
        $data = $dat->data->patientProfile;
        if (empty($data )) {
            Flash::error('Profile not found');

            // return redirect(route('services.index'));
        }

        $data->delete(84);

        Flash::success('Services deleted successfully.');

        return redirect(route('services.index'));
    }
}
