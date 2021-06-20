@extends('layouts.mainlayout')
@section('content')
    <div class="container register">
                    <div class="row">
                        <div class="col-md-3 register-left">
                            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                            <h3>Welcome</h3>
                            <p>You are !</p>
                            <input type="submit" name="" value="Login"/><br/>
                        </div>
                        <div class="col-md-9 register-right">
                            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Apply as a Patient</h3>
                                    <form action="/register" method="POST">
                                    <div class="row register-form">
                                        @csrf
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name *" value=""name="fullName" />
                                            </div>
                                           
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password *" value="" name="password" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <div class="maxl">
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" id="1" value="male" checked>
                                                        <span> Male </span> 
                                                    </label>
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" id="2" value="female">
                                                        <span>Female </span> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email *" value="" name="email"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" name="userPhone" />
                                            </div>
                                            <input type="submit" class="btnRegister"  value="Register"/>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h3  class="register-heading">Apply as a Doctor</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <form action="/doctor" method="POST">
                                                @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name *" value="" name="fullName"/>
                                            </div>
                                          
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email *" value="" name="email" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" name="userPhone" />
                                            </div>
    
    
                                        </div>
                                        <div class="col-md-6">
                                          
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder=" Password *" value="" name="password " />
                                            </div>
                                            <div class="form-group">
                                                <input type="genderId" class="form-control" placeholder=" Gender *" value="" name="password " />
                                            </div>
                                     
                                            
                                            <input type="submit" class="btnRegister"  value="Register"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
    
                </div>

 @endsection