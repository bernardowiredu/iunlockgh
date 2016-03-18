@extends('layout.products')


@section('header')

<h1 class="text-center blck2">CONFIRM YOUR ORDER</h1>

@stop

@section('content')

<br>
<div class="nav">
  <a class="blck2" href="{{URL::to('confirm-order')}}"><div class="col-xs-5 col-md-4 line-solid "><span class="badge"> 1</span > FILL TO UNLOCK PHONE</div></a>
   <a class="ff" href="{{URL::to('confirm-order')}}"><div class="col-xs-5 col-md-4 line-solid activated"><span class="badge"> 2</span> CONFIRM ORDER</div></a>
   <a class="blck2" href="{{URL::to('confirm-order')}}"><div class="col-xs-5 col-md-4 line-solid"><span class="badge"> 3</span> PAY FOR ORDER</div></a>
</div>

<br>
<div class="nav">
<div class="col-xs-4 col-md-3 ">
@foreach($orders as $order)
<img src="{{$order->image}}" alt="" class="img-responsive hidden-xs curvy"  width="140" height="110">
<br>
 <div class="notice notice-success" role="alert">
 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>{{$order->product_name}} <i class="glyphicon glyphicon-ok-sign"></i></strong> 
</div>
@endforeach
</div>
<div class="col-xs-10 col-md-9">

<h4 class="blck cover cnta f5"><img src="../public/img/folder_modified.png"><b>CONFIRM YOUR ORDER DETAILS</b></h4>

<div class="panel panel-inverse">
  <!-- <div class="panel-heading">
    <h3 class="panel-title blck">Panel title</h3>
  </div> -->

  @include('common.notification')

  <div class="panel-body  f5 text-center blck">

  <table class="table table-bordered mf">
  @foreach($orders as $order)
      <tbody>
        <tr>
          <td>
           Network Locked
          </td>
          <td>
           <b>{{$order->network_name}}</b>
            </td>
        </tr>
        <tr>
          <td>
           Unlocking Price
          </td>
          <td>
            <b>GH₵ {{$order->price}}</b>
            </td>
        </tr>
        <tr>
          <td>
           Phone IMEI
          </td>
          <td>
            <b>{{$order->imei}}</b>
            </td>
        </tr>
        <tr>
          <td>
            Delivery Time
          </td>
          <td>
             <b>{{$order->delivery}}</b>
            </td>
        </tr>
         <tr>
          <td>
            Order Contact
          </td>

          <td>
          <span class="blue"><i class="glyphicon glyphicon-phone"></i><b> {{$order->order_contact}} <i class="glyphicon glyphicon-edit"></i></b></span>
          </td>
        </tr>
        <tr>
        <div class="inline">
        <td>
       </td>
		
		<td>
			 <a href="{{URL::to('delete/' .$order->id)}}"><button class="btn btn-danger"> &laquo; CANCEL </button></a>
		
			<a href="{{URL::to('make-payment/' .$order->id)}}"><button class="btn btn-success ny"> CONFIRM AND PAY &raquo;</button>
		</a>
		<br><br>
		</div>
		</td>
		</tr>
    </tbody>
    @endforeach
    </table>
   


<h4>



  </div>
</div>


</div>
</div>

<br><br>

<div class="well well-sm mb">
<h4 class="blue"><b>Terms and conditions of making an order</b></h4>
</div>

<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. 
</p>


@stop