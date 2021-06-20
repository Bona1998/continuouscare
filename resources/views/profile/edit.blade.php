@extends('layouts.mainlayout')

@section('content')
{{-- <h1>Fill the form to make your profile</h1> --}}
<div class="leading-loose ">
    <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl"  method="POST" action="profile.update" >
      @method('PUT')
      @csrf
        <p class="text-gray-800 font-medium"></p>
      <div class="">
        <label class="block text-sm text-gray-00" for="cus_name">Full Name</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="fullName" name="fullName" type="text" required="" placeholder="Your Name" aria-label="Full Name">
      </div>
      <div class="mt-2">
        <label class=" block text-sm text-gray-600" for="cus_email">Personal information</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="address" name="address" type="text" required="" placeholder="Address" aria-label="Email">
      </div>
      <div class="mt-2">
        <label class="hidden text-sm block text-gray-600" for="StateId">StateId</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="stateId" name="stateId" type="number" required="" placeholder="State">
      
      </div>
      <div class="inline-block mt-2 w-1/2 pr-1">
        <label class="hidden block text-sm text-gray-600" for="cus_email">Hight</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="hight" name="hight" type="text"  placeholder="hight" aria-label="Email">
      </div>
      <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
        <label class="hidden block text-sm text-gray-600" for="cus_email">Weight</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="weight"  name="weight" type="text" required="" placeholder="Weight" aria-label="Email">
      </div>
      <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
        <label class="hidden block text-sm text-gray-600" for="cus_email">Blood Group</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="bloodGroup"  name="bloodGroup" type="text" required="" placeholder="bloodGroup" aria-label="Email">
      </div>
      <div class="">
        <label class="block text-sm text-gray-600" for="cus_name">Date Of Birth</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="dateOfBirth" name="dateOfBirth" type="text" required="" placeholder="MM/YY CVC" aria-label="Name">
      </div>
      <div class="mt-4">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Save</button>
      </div>
    </form>
  </div>
@endsection