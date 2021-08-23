<head>
    <title>Monitor Continoues Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.2/tailwind.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{-- register tempalte --}}
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
      .register{
    background: -webkit-linear-gradient(left, #0d8571, #92d6d1);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0d8571;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0d8571;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0d8571;
    border: 2px solid #0d8571;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

/* pricing template */
@import url("https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap");

body {
  background-color: #f4f4f4;

  font-family: "Play", sans-serif;
}

.container {
  width: 100%;
}

.packages {
  margin: 20px;
  width: 300px;
  padding-bottom: 1.5em;
  height: 100%;
  background-color: #2e6859;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 19px 38px rgba(93, 149, 145), 0 15px 12px rgba(30, 35, 33, 0.2);
  flex-wrap: wrap;
  color: #f4f4f4;
}

h1,
h2 {
  font-size: 2.2em;
}

.list li {
  font-size: 20px;
  list-style: none;
  border-bottom: 1px solid #f4f4f4;
  padding-inline-start: 0;
  border-width: 1px;
  padding: 10px;
}

.first {
  margin-top: 40px;
  border-top: 1px solid #f4f4f4;
}

.list {
  width: 80%;
}

ol,
ul {
  padding: 0;
}

.top {
  display: flex;
  flex-direction: column;
  align-items: center;
}

input,
label {
  display: inline-block;
  vertical-align: middle;
  margin: 10px 0;
}

.button {
  padding: 10px 30px;
  text-decoration: none;
  font-size: 1.4em;
  margin: 15px 15px;
  border-radius: 50px;
  color: #f4f4f4;
  transition: all 0.3s ease 0s;
}

.button:hover {
  transform: scale(1.2);
}

.button1 {
  background-color: #20a497;
  box-shadow: 0 0 10px 0 #84ddbc inset, 0 0 20px 2px #bde6d8;;
}

.button2 {
  background-color: #ff007c;
  box-shadow: 0 0 10px 0 #ff007c inset, 0 0 20px 2px #ff007c;
}

.button3 {
  background-color: #50bfe6;
  box-shadow: 0 0 10px 0 #50bfe6 inset, 0 0 20px 2px #50bfe6;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #91d5d0;
  -webkit-transition: 0.4s;

  box-shadow: 2px 6px 25px rgba(93, 149, 145),;
  transform: translate(0px, 0px);
  transition: 0.6s ease transform, 0.6s box-shadow;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

input:checked + .slider {
  background-color: #50bfe6;
}

input:focus + .slider {
  box-shadow: 0 0 1px #50bfe6;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.package-container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

    </style>
{{-- otp style --}}
<style>


.height-100 {
    height: 100vh
}

.card {
    width: 400px;
    border: none;
    height: 300px;
    box-shadow: 0px 5px 20px 0px #d2dae3;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center
}

.card h6 {
    color: rgb(46, 196, 163);
    font-size: 20px
}

.inputs input {
    width: 40px;
    height: 40px
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0
}

.card-2 {
    background-color: #fff;
    padding: 10px;
    width: 350px;
    height: 100px;
    bottom: -50px;
    left: 20px;
    position: absolute;
    border-radius: 5px
}

.card-2 .content {
    margin-top: 50px
}

.card-2 .content a {
    color: rgb(46, 196, 163)
}

.form-control:focus {
    box-shadow: none;
    border: 2px solid rgb(46, 196, 163)
}

.validate {
    border-radius: 20px;
    height: 40px;
    background-color: rgb(46, 196, 163);
    border: 1px solid rgb(46, 196, 163);
    width: 140px
}



</style>

  </head>