@extends('layout.main')



@section('header')


<h1 class="text-center uptest blck2">Request Phone unlocking</h1>

@stop



@section('content')

<br>
<div class="hidden-xs">
<img src="img/mobile_phone.png"><img src="img/arrow.png" class="hidden-xs"><img src="img/unlock.png" class="hidden-xs">
</div>
<h4 class="well mf"><b class="blue">REQUEST UNLOCKER – Select phone ,Carrier, and IMEI number..</b></h4>

<!-- <h4 class="yellow"><b><i>REQUEST UNLOCKER – Select phone ,Carrier, and IMEI number..</i></b></h4> -->

Request Unlocker aids customers who can not find their phone models in our unlocking list to send us a phone unlock request and 

we will further search for the model in our database  and contact customer through mail or contact to send unlocking details of that particular model.


<!--  <h4 class="yellow"><b><i>REQUEST PHONE UNLOCK</i></b></h4> -->
<h4 class=" well well-sm"><b class="blck">Follow the request unlocking procedure to request phone unlocking</b></h4>

 <ul class="nav">
 <li>1. Select Phone Manufacturer of the phone you requesting for unlocking.</li>
 <li>2. Enter the model of the phone eg. <b class="blue">iphone 5s, samsung galaxy S2 GT i9100, blackberry 8520 Curve.</b></li>
 <li>3. Enter the carrier the phone is locked to  eg. <b class="blue">AT&T, Verison, Movistar.</b></li>
 <li>4. Enter phone's IMEI number <b class="blue">usually a 15 digits number or dial *#06# to get Imei number.</b></li>	
 <li>5. Enter your mobile number or Email through which you can be contacted.</b></li>

 </ul>

<br>



<div class="panel panel-primary">
  <div class="panel-heading">Phone unlock request</div>
  <div class="panel-body blck">

@include('common.notification')

{{Form::open(array('url'=>'request', 'method'=>'POST'))}}


<label class="blck">Select Brand</label>
<select  name="brand" class="form-control">
   <option>Select phone brand</option>
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
    <option>Samsung</option>
   <option>Sony</option>
   <option>ZTE</option>
</select>
<p></p>

<label class="blck">Enter Phone model<i class="text-danger"> **</i></label>
<input type="text" class="form-control" name="model" placeholder="eg. iphone 5s, samsung galaxy S2 GT i9100, blackberry 8520 Curve" required>
<p></p>

<label class="blck">Carrier locked to <i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="eg.AT&T" name="carrier">
<p></p>

<label class="blck">Enter your IMEI number<i class="text-danger"> ** 15 digits</i></label>
<input type="text" class="form-control" maxilength="15" minilength="15" placeholder="dial *#06# to get Imei number" name="imei">
<p></p>

<label class="blck">Enter your phone number or email<i class="text-danger"> **</i></label>
<input type="text" class="form-control" placeholder="eg.0545343660" name="telephone">
<p></p>

<!-- <p><input type="checkbox" required> I have read and accepted terms and conditions</p> -->

<p><button class=" btn btn-block btn-primary"><i class="glyphicon glyphicon-phone"></i> Request Unlock</button></p>

{{Form::close()}}

   
  </div>
</div>










@stop