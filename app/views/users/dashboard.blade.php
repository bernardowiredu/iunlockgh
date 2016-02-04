@extends('layout.dashboard')

@section('sidebar')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <br>
            <li class="active"><a href="{{URL::to('dashboard')}}"><i class="glyphicon glyphicon-dashboard blue"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="{{URL::to('editprofile')}}"><i class="glyphicon glyphicon-user blue"></i> Edit profile</a></li>
            <li><a href="{{URL::to('messages')}}"><i class="glyphicon glyphicon-comment blue"></i> Messages <sup><span class="badge"> 3</span></sup></a></li>
            <li><a href="{{URL::to('order-history')}}"><i class="glyphicon glyphicon-folder-open blue"></i> Order history</a></li>
            <li><a href="{{URL::to('payments')}}"><i class="glyphicon glyphicon-credit-card blue"></i> Add funds</a></li>
            <li><a href="{{URL::to('unlock-request')}}"><i class="glyphicon glyphicon-phone blue"></i> Unlock request</a></li>
            <li><a href="{{URL::to('track-order')}}"><i class=" glyphicon glyphicon-search blue"></i> Track order</a></li>
            <li><a href="{{URL::to('report')}}"><i class=" glyphicon glyphicon-send blue"></i> Reports</a></li>
            <li><a href="{{URL::to('FAQs')}}"><i class="glyphicon glyphicon-question-sign blue"></i> FAQs</a></li>
          </ul>
          <br>
        </div>

@stop

@section('header')

<img src="../public/img/home.png"><span class="blck2">{{Auth::user()->username}} Dashboard</span> 

@stop


@section('content')


		<div class="row placeholders">
      <div class="animatedParent" data-sequence="500">
            <div class="col-xs-6 col-sm-3 placeholder animated bounceInup" data-id="1">
              <div class="plate blu2">
              <span><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i> ORDERS</span>
              <h4>30</h4>
              </div>
              <div class="hole blu">
              <!-- <i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i> -->
              </div>
              <h4><a class="blck2" href="">View</a></h4>
              <!-- <span class="">orders</span> -->
            </div>

            <div class="col-xs-6 col-sm-3 placeholder animated bounceInup" data-id="1">
                <div class="plate green2">
             <span><i class="glyphicon glyphicon-credit-card" aria-hidden="true"></i> PAYMENTS</span>
             <h4>9</h4>
              </div>
               <div class="hole green">
             <!--  <i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i> -->
              </div>
              <h4><a class="blck2" href="">View</a></h4>
              <!-- <span class="">payments</span> -->
            </div>
            <div class="col-xs-6 col-sm-3 placeholder animated bounceInup" data-id="1">
               <div class="plate rou2">
              <span><i class="glyphicon glyphicon-phone"></i> UNLOCK REQUEST</span>
               <h4>12</h4>
              </div>
               <div class="hole rou">
              <!-- <i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i> -->
              </div>
              <h4><a class="blck2" href="">View</a></h4>
              <!-- <span class="">requests</span> -->
            </div>
            <div class="col-xs-6 col-sm-3 placeholder animated bounceInup" data-id="1">
               <div class="plate voi2">
             <span><i class="glyphicon glyphicon-comment"></i> MESSAGES</span>
              <h4>30</h4>
              </div>
               <div class="hole voi">
              <!-- <i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i> -->
              </div>
              <h4><a class="blck2" href="">View</a></h4>
              <!-- <span class="">messages</span> -->
            </div>
          </div>
        </div>

          <h2 class="sub-header blck2">Unlocking orders</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th><span class="blck2">Phone</span></th>
                  <th><span class="blck2">Network</span></th>
                  <th><span class="blck2">Price</span></th>
                  <th><span class="blck2">Order-imei</span></th>
                  <th><span class="blck2">Delivery</span></th>
                  <th><span class="blck2">Status</span></th>
                 
                </tr>
              </thead>

              @foreach($payment as $payment)
              <tbody>
                <tr>
                  <td>{{$payment->product_model}}</td>
                  <td>{{$payment->network_name}}</td>
                  <td>{{$payment->price}}</td>
                  <td>{{$payment->imei}}</td>
                  <td>{{$payment->delivery_time}}</td>
                  <td><span class="label label-success">unlocked</span></td>
                </tr>
               </tbody>
               @endforeach
            </table>
          </div>



@stop

<script src="../public/js/jquery-1.8.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../public/js/css3-animate.js"></script>