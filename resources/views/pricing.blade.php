<?php $currentPage = 'pricing';?>
@extends('layouts.mainlayout')
@section('content')

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
        <div class="packages">
          <h1>Basic</h1>
          <h2 class="text1">&dollar;9.99</h2>
          <h2 class="text2">&dollar;119.99</h2>
          <ul class="list">
            <li class="first">2000 Subscribers</li>
            <li>12,000 Emails/month</li>
            <li>Multi-User Accounts</li>
            <li>Email Support</li>
          </ul>
          <a href="#" class="button button1">Start Now</a>
        </div>
        <div class="packages">
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
        </div>
      </div>
    </div>
  
    <script src="./script.js"></script>

@endsection
