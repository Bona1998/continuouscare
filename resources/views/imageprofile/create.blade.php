@extends('layouts.mainlayout')

@section('content')
    <form action="{{ route('imageprofile.store') }}" method="POST">
        @csrf
        <input type="file" id="image" name="image" required>
        <button type="submit" class="btn btn-primary">Upload Image</button>
        <input type="hidden" name="userId" value="{{ $id }}">
    </form>

@endsection
