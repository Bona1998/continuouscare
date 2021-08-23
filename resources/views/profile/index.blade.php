@extends('layouts.mainlayout')

@section('content')
    <div>
        <ul>
                Name:<p>{{ $profileData->data->patientProfile->name }}</p>
                Email:<p>{{$profileData->data->patientProfile->email }}</p>
                phone:<p>{{$profileData->data->patientProfile->user_phone }}</p>
                user_notification:<p>{{$profileData->data->patientProfile->user_notification }}</p>
        </ul>
    </div>
@endsection
