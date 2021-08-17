<?php $currentPage = 'about';?>
@extends('layouts.mainlayout')
@section('content')
  
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">About Us</h1>
        </div>
      </div>
    </div>
  </section>
  
  {{-- <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-left align-items-left"><img src="https://www.continuouscare.io/wp-content/uploads/2016/12/at-wt.png" alt="What"></div>

            </div>
        <div class="col-md-10  d-flex justify-content-right ">
        <h3 class="sb-text justify-content-right"  style="color: #4a505c;
        font-size: 18px;
        font-weight: bold;
        padding-bottom: 4px; ">Continuous Care for Health </h3>
        <ul style="margin: 0 0 20px;
        padding: 0 0 0 15px;list-style: outside;">
            <li >Enable healthcare providers to stay connected with their patients &amp; manage their practice online</li>
            <li>Help patients to collaborate in their own healthcare and access their own health data</li>
            <li>Put patient health data at the center of chronic care management</li>
        </ul>  {{-- <a href="https://vimeo.com/45830194" class="play-video popup-vimeo d-flex align-items-center mt-4">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></div>
            <span class="watch">Watch Our Consultant Video</span>
        </a> 
      

            </div>
        </div>
    </div>
</section> --}}
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="main-wrapper">
                <div class="main-container">
                    <div class="page-wrapper">
                        <div class="sections-container"><script type="text/javascript">UNCODE.initHeader();</script><article id="post-54512" class="page-body style-light-bg post-54512 page type-page status-publish hentry">
                        <div class="post-wrapper">
                            <div class="post-body"><div class="post-content"><div data-parent="true" class="row-container" data-section="0"><div class="row single-top-padding single-bottom-padding single-h-padding limit-width row-parent" data-imgready="true"><div class="row-inner"><div class="pos-top pos-center align_left column_parent col-lg-12 single-internal-gutter"><div class="uncol style-light"><div class="uncoltable"><div class="uncell no-block-padding"><div class="uncont">
            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
            <div class="wpb_wrapper">
            <div class="abt-wrap" >
                @foreach ($aboutuses->take(2)  as $item)
                <div class="abt-cntd" style="margin: 45px 0;
                position: relative;">
    
                <div class="lt-img" ><img src="{{ $item->image_url }}" alt="What"></div>
                <div class="rt-cntd">
                    <h3 class="sb-text"  style="color: #4a505c;
                    font-size: 18px;
                    font-weight: bold;
                    margin: 0;
                    padding-bottom: 10px;">{{ $item->name }}</h3>
                    <ul style="margin: 0 0 20px;
                    padding: 0 0 0 15px;list-style: outside;">
                       {{ $item->description }}
                    </ul>
                    <ul>
    
                </ul></div>
                </div>
                @endforeach
            <img src="https://www.continuouscare.io/wp-content/uploads/2016/12/at-banner-1.png" alt="Virtual Practice" class="abt-banner">
            @foreach ($aboutuse as $item)
            <div class="abt-cntd" style="margin: 45px 0;
            position: relative;">

            <div class="lt-img" ><img src="{{ $item->image_url }}" alt="What"></div>
            <div class="rt-cntd">
                <h3 class="sb-text"  style="color: #4a505c;
                font-size: 18px;
                font-weight: bold;
                margin: 0;
                padding-bottom: 10px;">{{ $item->name }}</h3>
                <ul style="margin: 0 0 20px;
                padding: 0 0 0 15px;list-style: outside;">
                   {{ $item->description }}
                </ul>
                <ul>

            </ul></div>
            </div>
            @endforeach

            </div>
            </div>
            </div>
            </div></div></div></div></div><script id="script-204591" type="text/javascript">UNCODE.initRow(document.getElementById("script-204591"));</script></div></div></div></div></div>
                        </div>
                    </article>
                            </div><!-- sections container -->
                        </div><!-- page wrapper -->
                        
                                    </div><!-- main container -->
            </div> 
        </div>
    </div>
</section>
@endsection
