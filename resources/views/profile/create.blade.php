@extends('layouts.mainlayout')

@section('content')
  
    <div class="leading-loose ">

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
                     placeholder="Address" aria-label="Email">
            </div>
            <label for="bloodGroup">States</label>
            <div class="relative inline-flex">
                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 412 232">
                    <path
                        d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                        fill="#648299" fill-rule="nonzero" />
                </svg>
                <select name="stateId" id="stateId"
                    class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                    <option>Choose a state</option>
                    {{-- @foreach ($state as $item)
                        <option value={{ $item['stateId'] }}>{{ $item['stateName'] }}</option>
                    @endforeach --}}
                </select>
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
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="date" name="date" type="text"
                    required="" placeholder="MM/YY CVC" aria-label="Name">
            </div>
    
            <div class="mt-4">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                    type="submit">Save</button>
                <input type="hidden" name="userId" value="{{ $id }}">
            </div>
        </form>
        @include('errors.error')
    </div>
@endsection
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title></title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Complet Your profile</h2>
                    @include('errors.error')
                    <form method="POST" action="{{ route('profile.store') }}">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Full Name" name="fullName">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Address" name="address">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Birthdate" name="date">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="stateId" id="stateId">
                                            <option disabled="disabled" selected="selected">States</option>
                                            <option>Choose a state</option>
                                           {{-- @foreach ($state as $item)
                                            <option value={{ $item['stateId'] }}>{{ $item['stateName'] }}</option>
                                        @endforeach --}
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="bloodGroup">
                                    <option disabled="disabled" selected="selected">Blood Group</option>
                                    <option value=AB->AB-</option>
                                    <option value=AB+>AB+</option>
                                    <option value=A+>A+</option>
                                    <option value=B+>B+</option>
                                    <option value=O+>O+</option>
                                    <option value=O->O-</option>
                                    <option value=B->B-</option>
                                    <option value=A->A-</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Hight" name="hight">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Weight" name="weight">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                type="submit">Save</button>
                            <input type="hidden" name="userId" value="{{ $id }}" id="id">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <script>

    </script>
</body>

</html> --}}
<!-- end document-->