@extends('layouts.mainlayout')
@section('content')
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>You are !</p>
                <a href="{{ asset('/login') }}"><input type="submit" name="" value="Login" /><br /></a>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">


                    <li class="nav-item {{ request()->is('#home') ? 'active' : '' }}">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Patient</a>
                    </li>

                    <li class="nav-item {{ request()->is('#profile') ? 'active' : '' }}">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Doctor</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?php $currentPage = 'home'; ?>
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Patient</h3>
                        <form action="{{ asset('/register') }}" method="POST">
                            <div class="row register-form">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value=""
                                            name="fullName" id="fullName" />
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value=""
                                            name="password" id="password" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="genderId" id="1" value=1 checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="genderId" id="2" value=2>
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value=""
                                            name="email" id="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="12" maxlength="15" class="form-control"
                                            placeholder="Your Phone *" value="" name="userPhone" id="userPhone" />
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                    </div>
                    </form>


                    {{-- ********************************************************************************************* --}}
                    <?php $currentPage = 'profile'; ?>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Apply as a Doctor</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <form action="{{ asset('/doctor') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value=""
                                            name="fullName" id="fullName" />
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" value="" name="email"
                                            id="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="15" maxlength="15" class="form-control"
                                            placeholder="Your Phone *" value="" name="userPhone" id="userPhone" />
                                    </div>


                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value=""
                                        name="password" id="password" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="genderId" id="1" value=1 checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="genderId" id="2" value=2>
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>


                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                            </form>
                        </div>
                    </div>
                    @include('errors.error')

                </div>

            @endsection
