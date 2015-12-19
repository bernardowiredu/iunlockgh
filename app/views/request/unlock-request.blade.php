@extends('layout.dashboard')


@section('sidebar')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <br>
            <li><a href="{{URL::to('dashboard')}}"><i class=" glyphicon glyphicon-dashboard blue"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="{{URL::to('editprofile')}}"><i class="glyphicon glyphicon-user blue"></i> Edit profile</a></li>
            <li><a href="{{URL::to('messages')}}"><i class="glyphicon glyphicon-comment blue"></i> Messages <sup><span class="badge"> 3</span></sup></a></li>
            <li><a href="{{URL::to('order-history')}}"><i class="glyphicon glyphicon-folder-open blue"></i> Order history</a></li>
            <li><a href="{{URL::to('payments')}}"><i class="glyphicon glyphicon-credit-card blue"></i> Add funds</a></li>
            <li class="active"><a href="{{URL::to('unlock-request')}}"><i class="glyphicon glyphicon-phone blue"></i> Unlock request</a></li>
            <li><a href="{{URL::to('track-order')}}"><i class=" glyphicon glyphicon-search blue"></i> Track order</a></li>
            <li><a href="{{URL::to('report')}}"><i class=" glyphicon glyphicon-send blue"></i> Reports</a></li>
            <li><a href="{{URL::to('FAQs')}}"><i class="glyphicon glyphicon-question-sign blue"></i> FAQs</a></li>
          </ul>
          <br>
        </div>

@stop


@section('header')

<img src="../public/img/mobile_phone.png">Unlock request

@stop



@section('content')
<p></p>

@include('common.notification')

<div class="col-sm-12 mf">

{{Form::open(array('url'=>'request', 'method'=>'POST'))}}

<h4 class="">To request for phone unlock fill the forms below</h4>

<label class="blck">Select Phone Brand</label>
<select name="brand" class="form-control">
   <option>Acatel</option>
   <option>Apple</option>
   <option>Azumi</option>
   <option>Blackberry</option>
   <option>Dell</option>
   <option>Doro</option>
   <option>Emporia</option>
   <option>Huawei</option>
   <option>HTC</option>
   <option>LG</option>
   <option>Microsoft</option>
   <option>Motorola</option>
   <option>Nokia</option>
   <option>Sony</option>
   <option>ZTE</option>
</select>
<p></p>

<label class="blck">Enter Phone model<i class="text-danger"> **</i></label>
<input type="text" class="form-control" name="model" placeholder="eg. iphone 5s, samsung galaxy S2 GT i9100, blackberry 8520 Curve" required>
<p></p>

<label class="blck">Enter carrier locked to<i class="text-danger"> **</i></label>
<input type="text" class="form-control" name="carrier" placeholder="eg. AT&T, Verison, Movistar" required>
<p></p>

<label class="blck">Enter your IMEI number<i class="text-danger"> ** 15 digits</i></label>
<input type="text" class="form-control" name="imei" placeholder="dial *#06# to get Imei number." required>
<p></p>

<label class="blck">Enter your phone number or email<i class="text-danger"> **</i></label>
<input type="text" class="form-control" name="telephone" placeholder="eg.0545343660" required>
<p></p>

<p><button class="btn btn-warning"><i class="glyphicon glyphicon-phone"></i> Request unlock</button></p>

<br><br>

{{Form::close()}}

</div> 

@stop