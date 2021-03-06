@extends('layout.dashboard')

@section('sidebar')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <br>
            <li><a href="{{URL::to('dashboard')}}"><i class="glyphicon glyphicon-dashboard blue"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="{{URL::to('editprofile')}}"><i class="glyphicon glyphicon-user blue"></i> Edit profile</a></li>
            <li><a href="{{URL::to('messages')}}"><i class="glyphicon glyphicon-comment blue"></i> Messages <sup><span class="badge"> 3</span></sup></a></li>
            <li><a href="{{URL::to('order-history')}}"><i class="glyphicon glyphicon-folder-open blue"></i> Order history</a></li>
            <li class="active"><a href="{{URL::to('payments')}}"><i class="glyphicon glyphicon-credit-card blue"></i> Add funds</a></li>
            <li><a href="{{URL::to('unlock-request')}}"><i class="glyphicon glyphicon-phone blue"></i> Unlock request</a></li>
            <li><a href="{{URL::to('track-order')}}"><i class=" glyphicon glyphicon-search blue"></i> Track order</a></li>
            <li><a href="{{URL::to('report')}}"><i class=" glyphicon glyphicon-send blue"></i> Reports</a></li>
            <li><a href="{{URL::to('FAQs')}}"><i class="glyphicon glyphicon-question-sign blue"></i> FAQs</a></li>
          </ul>
          <br>
        </div>

@stop




@section('header')

<img src="../public/img/add_to_database.png"></i><span class="">Add funds
</span> 
@stop



@section('content')

@include('common.notification')
<div class="well mc">
<h4 class="">To Add funds to your accounts Enter code</h4>

<label>Enter deposit code<i class="text-danger"> **</i></label>

<input type="text" class="form-control" disabled="disabled" placeholder="eg. 326578890" required>
<p></p>
<button class="btn btn-danger"><i class="glyphicon glyphicon-thumbs-up"></i> Not available</button>
</div>
<p></p>

<div class="well well-sm me">
<h4 class="blue"> HOW TO ADD MONEY INTO YOUR ACCOUNT</h4>
</div>

<div class="well mh">
<p>Send mobile money to</p> 
<p><img src="../public/img/mtn.jpg" width="70" height="50"><span> =  <b>0244072639</b></span></p>
<p><img src="../public/img/airtel-mobile.png" width="70" height="50"><span> = <b>027xxxxxxx</b></span></p>

<h4>STEPS TO MAKE PAYMENT</h4>
<ul class="nav">
<li>1. Send Mobile money to any of the numbers above either <b>Tigo Cash or MTN Moblie Money</b>.</li>
<li>2. Once we recieve the money you sent us, a <b>PAY CODE eg.326578890</b> will sent to your Phone.</li>
<li>3. Enter this code in the pay code form and click <b>PAY FOR ORDER</b> to make make payment and unlock your phone.</li>
<li>4. Once payment is completed your phone unlocking process begins.</li>
</ul>
<br>
<p>For any difficulties call <i class="glyphicon glyphicon-earphone"></i> <b>0560094454</b> for assistance</p> 
</div>
@stop
