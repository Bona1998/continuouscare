@extends('layouts.mainlayout')

@section('content')
    <div>
        <ul>
            @foreach ($data as $item)
                Name:<p>{{ $item->name }}</p>
                Email:<p>{{ $item->email }}</p>
                phone:<p>{{ $item->user_phone }}</p>
                Email:<p>{{ $item->email }}</p>
            @endforeach
        </ul>
    </div>
@endsection
