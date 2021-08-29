<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



<div class="bg-gray-100">
 <div class="w-full text-white bg-main-color">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="#"
                    class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">{{$data->name}}
                    profile</a>
           
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                
                </div>
            </nav>
        </div>
    </div>
    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                            alt="">
                    </div>
                    {{-- <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$data->name}}</h1> --}}
                 
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
                {{-- <div class="bg-white p-3 hover:shadow">
                    <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                        <span class="text-green-500">
                            <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </span>
                        <span>Similar Profiles</span>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://cdn.australianageingagenda.com.au/wp-content/uploads/2015/06/28085920/Phil-Beckett-2-e1435107243361.jpg"
                                alt="">
                            <a href="#" class="text-main-color">Kojstantin</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-4.png"
                                alt="">
                            <a href="#" class="text-main-color">James</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                alt="">
                            <a href="#" class="text-main-color">Natie</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://bucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com/public/images/f04b52da-12f2-449f-b90c-5e4d5e2b1469_361x361.png"
                                alt="">
                            <a href="#" class="text-main-color">Casey</a>
                        </div>
                    </div>
                </div> --}}
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-l">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold"> Name</div>
                                {{-- <div class="px-4 py-2">{{$data->name}}</div> --}}
                                <input class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text"
                                required="" placeholder="Your Name" aria-label="{{$data->name}}" value="{{$data->name}}">
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Gender</div>
                                <div class="px-4 py-2">{{$data->gender->type}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                {{-- <div class="px-4 py-2">{{$data->user_phone}}</div> --}}
                                <input class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded" id="user_phone" name="user_phone" type="text"
                                required="" placeholder="Contact No." aria-label="{{$data->user_phone}}" value="{{$data->user_phone}}">
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Current Address</div>
                                {{-- <div class="px-4 py-2">{{$data->address}}</div> --}}
                                {{-- @isset($data->address) --}}
                                <input class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded" id="address" name="address" type="text"
                                required="" placeholder="Current Address" aria-label="{{$data->address}}" value="{{$data->address}}"> 
                                {{-- @endisset --}}
                            
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Height</div>
                                {{-- <div class="px-4 py-2">{{$data->patient->height}}</div> --}}
                                {{-- @isset($data->patient->height) --}}
                                <input class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded" id="height" name="height" type="text"
                                required="" placeholder="Height" aria-label="{{$data->patient->height}}" value="{{$data->patient->height}}">
                                {{-- @endisset --}}
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:jane@example.com">{{$data->email}}</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Birth Date</div>
                                {{-- <div class="px-4 py-2">{{$age}} Years</div> --}}
                                <input class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded" id="date_of_birth" name="date_of_birth" type="date"
                                required="" placeholder="MM/YY CVC" aria-label="date_of_birth" value="{{$data->patient->date_of_birth}}">
                            </div>
                            <div class="grid grid-cols-2">
                               
                                <div class="px-4 py-2 font-semibold">Weight</div>
                                {{-- <div class="px-4 py-2">{{$lastWeighte}}</div> --}}
                                @isset($lastWeighte)
                                <input class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded" id="weight" name="weight" type="text"
                                required="" placeholder="Weight" aria-label="{{$lastWeighte}}" value="{{$lastWeighte}}">
                                @endisset
                            
                                <div class="px-4 py-2 font-semibold">The day you Weight</div>
                                {{-- <div class="px-4 py-2">Befor {{$length}} days ago</div> --}}
                                @isset($length)
                                <input class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded" id="date_of_birth" name="date" type="date"
                                required="" placeholder="MM/YY CVC" aria-label="{{$length}}" value="{{$length}}"  >
                                
                                @endisset
                             
                            </div>


                            <label for="blood_group">bloodGroup</label>
                            <div class="relative inline-flex">
                                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 412 232">
                                    <path
                                        d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                                        fill="#648299" fill-rule="nonzero" />
                                </svg>
                                <select name="blood_group" id="blood_group"
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
                        </div>
                    </div>
                    {{-- <button
                        class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Show
                        Full Information</button> --}}
                </div>
                <!-- End of about section -->


                <!-- Experience and education -->
              
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>