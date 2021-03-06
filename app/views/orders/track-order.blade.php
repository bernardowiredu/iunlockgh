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
            <li><a href="{{URL::to('payments')}}"><i class="glyphicon glyphicon-credit-card blue"></i> Add funds</a></li>
            <li><a href="{{URL::to('unlock-request')}}"><i class="glyphicon glyphicon-phone blue"></i> Unlock request</a></li>
            <li class="active"><a href="{{URL::to('track-order')}}"><i class=" glyphicon glyphicon-search blue"></i> Track order</a></li>
            <li><a href="{{URL::to('report')}}"><i class=" glyphicon glyphicon-send blue"></i> Reports</a></li>
            <li><a href="{{URL::to('FAQs')}}"><i class="glyphicon glyphicon-question-sign blue"></i> FAQs</a></li>
          </ul>
          <br>
        </div>

@stop

@section('header')

<img src="../public/img/zoom_out.png"> Track order

@stop



@section('content')

{{Form::open(array('url'=>'track-order', 'method'=>'GET'))}}

<div class="col-sm-6 col-md-7 line3 well well-lg mc">

@include('common.notification')


<h4 class=""><b>To check your IMEI, fill the form below now:</b></h4>

<label>Enter a valid IMEI number<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="Enter your IMEI" name="keyword" required>
<p></p>

<!-- <p><input type="checkbox" required> I have read and accepted terms and conditions</p>
 --><br>
<p><button class="btn btn-warning"><i class="glyphicon glyphicon-search"></i> Check your order</button></p>
<br>
</div>

{{Form::close()}}

<div class="col-sm-3 col-md-5">
@foreach($payments as $payment)
<h4 class=" well well-sm blck mf"><b>Your order IMEI {{$payment->imei}} </b></h4>
<p>Phone name: <b class="red">{{$payment->product_model}}</b> <a href="{{URL::to('order-details/' .$payment->id)}}"> View full order here</a>  </p>
<p>Network locked to: <b>{{$payment->network_name}}</b></p>
<p>Delivery Time: <b>{{$payment->delivery_time}}</b></p>
<p>Order at: <b>{{$payment->created_at}}</b></p>
<p>Delivery Status: <i class="fa fa-exclamation-triangle red"></i> <b class="green">Your device is Unlocked</b></p>
<p>Delivery Method: <i class="glyphicon glyphicon-envelope blue"></i><b> Email/Phone</b>  </p><br>
 </div>

@endforeach
<br><br><br><br><br><br><br><br><br>


<p class="">NB: You will be automatically notified when your phone has been unlocked</p>
<br><br><br><br>




@stop