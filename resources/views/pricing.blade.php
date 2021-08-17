<?php $currentPage = 'pricing';?>
@extends('layouts.mainlayout')
@section('content')
	    
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-end justify-content-center">
		<div class="col-md-9 ftco-animate mb-5 text-center">
			<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Pricing <i class="fa fa-chevron-right"></i></span></p>
		  <h1 class="mb-0 bread">Pricing &amp; Plans</h1>
		</div>
	  </div>
	</div>
  </section>
  
<section class="ftco-section ">
	<div class="container">
		<div class="top">
			<h1>Your White-Labelled Mobile App For Patients</h1>
		  </div>
		<div class="row">
			<div class="column justify-content-left">
			@foreach ($patentServices as $item)
			<div class="clearfix col-lg-10 mb-4 " style="text-align: end">
				<img src="{{ $item->image_url }}" alt="..." class="float-right">
						<h5 class="card-title">{{ $item->name }}</h5>
						<p class="card-text">{{ $item->description }}</p>
					
			  </div>
			@endforeach
			</div>
			<div class="column">
				{{-- <img src="images/pricingnew-screen3.png" alt=""> --}}
				<div id="demo" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
					  <li data-target="#demo" data-slide-to="0" class="active"></li>
					  <li data-target="#demo" data-slide-to="1"></li>
					  <li data-target="#demo" data-slide-to="2"></li>
					</ul>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img src="images/pricingnew-screen3.png" alt="Los Angeles">  
					  </div>
					  <div class="carousel-item">
						<img src="images/pricingnew-screen2.png" alt="Chicago" >   
					  </div>
					  <div class="carousel-item">
						<img src="images/pricingnew-screen4.png" alt="New York" >  
					  </div>
					</div>
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
					  <span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
					  <span class="carousel-control-next-icon"></span>
					</a>
				  </div>
			</div>
	  </div>
	  
	</div>
</section>

  
    <section class="ftco-appointment ftco-section img" style="background-image: url(images/cyan_bg.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
				@foreach ($patentServices as $item)
				<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					{{-- <div class="icon-wrap"> --}}
    						{{-- <div class="number d-flex align-items-center justify-content-center"><span>01</span></div> --}}
	    					<div class=" d-flex align-items-center justify-content-center">
	    						{{-- <span class="flaticon-calendar"></span> --}}
								<img src="{{ $item->image_url }}" alt="">
	    					</div>
    					{{-- </div> --}}
    					<h2>{{ $item->name }}</h2>
    					<p>{{ $item->description }}</p>
    				</div>
    			</div>
				@endforeach	
    		</div>
    	</div>
    </section>
	<div class="container">
		<div class="top">
		  <h1>Plans & Pricing</h1>
		  <div class="toggle-btn">
			<span style="margin: 0.8em;">Annually</span>
			<label class="switch">
			  <input type="checkbox" id="checbox" onclick="check()" ; />
			  <span class="slider round"></span>
			</label>
			<span style="margin: 0.8em;">Monthly</span></div>
		</div>
	
		<div class="package-container">
		  @foreach ($plansPicings as $item)
		  <div class="packages">
			<h1>{{ $item->offer_type }}</h1>
			<h2 class="text1">&dollar;{{ $item->monthly_price }}</h2>
			<h2 class="text2">&dollar;{{ $item->annually_pric }}</h2>
			<ul class="list">
			  <p> {!! $item->offer !!}</p>
			</ul>
			<a href="#" class="button button1">Start Now</a>
		  </div>
		  @endforeach
		  
		  {{-- <div class="packages">
			<h1>Professional</h1>
			<h2 class="text1">&dollar;19.99</h2>
			<h2 class="text2">&dollar;239.99</h2>
			<ul class="list">
			  <li class="first">Basic +</li>
			  <li>Landing Pages</li>
			  <li>Pop-up Forms</li>
			  <li>Premium Support</li>
			</ul>
			<a href="#" class="button button2">Start Now</a>
		  </div> --}}
		</div>
	  </div>

    <script src="./script.js"></script>

@endsection
