@extends('layouts.mainlayout')

@section('content')
    {{-- <h1>Fill the form to make your profile</h1> --}}
    <div class="leading-loose ">
        @include('errors.error')
        <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('profile.store') }}">

            @csrf
            <p class="text-gray-800 font-medium"></p>
            <div class="">
                <label class="block text-sm text-gray-00" for="cus_name">Full Name</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="fullName" name="fullName" type="text"
                    required="" placeholder="Your Name" aria-label="Full Name">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="cus_email">Personal information</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="address" name="address" type="text"
                    required="" placeholder="Address" aria-label="Email">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">stateId</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="stateId" name="stateId" type="number"
                    placeholder="stateId" aria-label="Email">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Hight</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="hight" name="hight" type="text"
                    placeholder="hight" aria-label="Email">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="hidden block text-sm text-gray-600" for="cus_email">Weight</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="weight" name="weight" type="text"
                    required="" placeholder="Weight" aria-label="Email">
            </div>
            <label for="bloodGroup">bloodGroup</label>
            <div class="relative inline-flex">
                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 412 232">
                    <path
                        d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                        fill="#648299" fill-rule="nonzero" />
                </svg>
                <select name="bloodGroup" id="bloodGroup"
                    class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                    <option>Choose a Blood Group</option>
                    <option value=AB->AB-</option>
                    <option value=AB+>AB+</option>
                    <option value=A+>A+</option>
                    <option value=B+>B+</option>
                    <option value=O+>O+</option>
                    <option value=O->O-</option>
                    <option value=B->B-</option>
                    <option value=A->A-</option>
                </select>
            </div>

            <div class="">
        <label class="block text-sm text-gray-600" for="cus_name">Date Of Birth</label>
        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="date" name="dateOfBirth" type="date" required="" placeholder="MM/YY CVC" aria-label="Name">
      </div>
            <div class="mt-4">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                    type="submit">Save</button>
                <input type="hidden" name="userId" value="{{ $id }}">
            </div>
        </form>
    </div>
@endsection
