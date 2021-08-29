<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
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
        $request =Http::get('http://waaasil.com/care/api/patients/'.$id);
            // $dat = $request['data']['patientProfile'];
            $dat = json_decode($request->getBody());
            $data = $dat->data->patientProfile;
            $age = Carbon::parse($dat->data->patientProfile->patient->date_of_birth)->diff(Carbon::now())->y;
                     // for weights 

            $arrayData =last($dat->data->patientProfile->weights);
            // $lastWeighte =$arrayData->weight;
            // // dd($arrayData->date);
            // $end = Carbon::parse($arrayData->date); 
            // $current = Carbon::now();
            // $length = $end->diff($current)->d;
            if (empty($arrayData)){
                $lastWeighte = 0;
                $length = Carbon::now();
            }else{
                $lastWeighte =$arrayData->weight;
                $end = Carbon::parse($arrayData->date); 
                $current = Carbon::now();
                $length = $end->diff($current)->d;
            }
            if (empty($data)) {
                Flash::error('Patient not found');
    
                // return redirect(route('profile.index'));
            }
    
            return view('profile.show',compact('data','age','length','lastWeighte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $request =Http::get('http://waaasil.com/care/api/patients/'.$id);
        $dat = json_decode($request->getBody());
        $data = $dat->data->patientProfile;

        $age = Carbon::parse($dat->data->patientProfile->patient->date_of_birth)->diff(Carbon::now())->y;
                     // for weights 

            $arrayData =last($dat->data->patientProfile->weights);
            
            if (empty($arrayData)){
                $lastWeighte = 0;
                $length = Carbon::now();
            }else{
                $lastWeighte =$arrayData->weight;
                $end = Carbon::parse($arrayData->date); 
                $current = Carbon::now();
                $length = $end->diff($current)->d;
            }
            // dd($arrayData->date);
            // $end = Carbon::parse($arrayData->date); 
            // $current = Carbon::now();
            // $length = $end->diff($current)->d;
        if (empty($data)) {
            Flash::error('Profile not found');

            return redirect(route('profile.show'));
        }

        return view('profile.edit',compact('data','age','length','lastWeighte'));

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

        $response = Http::put('http://waaasil.com/care/api/patients/'.$id, [
            // 'id' => $request->id,
            'name' => $request->name,
            'state_id' => $request->state_id,
            // 'address' => $request->address,
            'height' => 1,
            'image' =>  $request->image,
            'blood_group' => $request->blood_group,
            'date_of_birth' => $request->date_of_birth,
            'weight' => $request->weight,
            'date ' => $request->date,
         ]);
        //  dd($response);
        $data =json_decode($response->getBody(), true);
        $saveData=$data;
        dd( $saveData);
        // dd($data);
        if ($data->code == 200) {
            dd($data);

            return view('profile.show');
            // session()->flash('');
        } else {
            dd($data);

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
     
    }
}
