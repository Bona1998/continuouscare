@extends('layouts.mainlayout')
@section('content')
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>You are !</p>
                <a href="{{asset('/register')}}"><input type="submit" name="" value="Register" /><br /></a>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item {{ request()->is('home-tab') ? 'active' : ''}}">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Patient</a>
                         
                    </li>

                    <li class="nav-item {{ request()->is('profile-tab') ? 'active' : ''}}">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Doctor</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Login as a Patient</h3>

                        <form action="{{asset('/login')}}" method="POST">
                            <div class="row register-form">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value=""
                                            name="email" id="email" />
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value=""
                                            name="password" id="password" />
                                    </div>
                                    <div>


                                        @include('errors.error')

                                    </div>
                                    <input type="submit" class="btnRegister" value="Login" />
                                </div>
                            </div>
                    </div>
                    </form>


                    {{-- ********************************************************************************************* --}}

                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as a Doctor</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <form action="{{asset('/doctorlogin')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" value="" name="email"
                                            id="email" />
                                    </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder=" Password *" value=""
                                        name="password " id="password" />
                                </div>


                                @include('errors.error')

                                <input type="submit" class="btnRegister" value="Login" />
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>

@endsection
