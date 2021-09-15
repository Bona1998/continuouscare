@extends('custom.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Profile</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($data, ['route' => ['doctorProfile.update', $data->id], 'method' => 'post', 'enctype'=>"multipart/form-data", 'files' => true]) !!}
          
            @csrf
            <div class="card-body">
                <div class="row">
                    @include('doctorProfile.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('doctorProfile.show', [$data->id]) }}" class="btn btn-default">Cancel</a>
            </div>

    
           {!! Form::close() !!}

        </div>
    </div>
@endsection