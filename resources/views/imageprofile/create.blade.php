@extends('layouts.mainlayout')

@section('content')
    <form action="{{ route('imageprofile.store') }}" method="POST">
        @csrf
        <input type="file"  name="image">
        <button type="submit" class="btn btn-primary">Upload Image</button>
        {{-- <input type="hidden" name="userId" value="{{ $id }}"> --}}
    </form>

@endsection
