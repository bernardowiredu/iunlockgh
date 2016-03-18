@extends('layout.admin')


@section('sidebar')

<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <br>
            <li ><a href="{{URL::to('admin/dashboard')}}"><i class="glyphicon glyphicon-dashboard blue"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="{{URL::to('admin/users')}}"><i class="glyphicon glyphicon-user blue"></i> Registered users</a></li>
            <li><a href="{{URL::to('admin/messages')}}"><i class="glyphicon glyphicon-comment blue"></i> Send Messages</a></li>
            <li><a href="{{URL::to('admin/order')}}"><i class="glyphicon glyphicon-folder-open blue"></i> Order history</a></li>
            <li><a href="{{URL::to('admin/payments')}}"><i class="glyphicon glyphicon-credit-card blue"></i> Payments</a></li>
            <li><a href="{{URL::to('admin/unlock')}}"><i class=" glyphicon glyphicon-question-sign blue"></i> Unlock request</a></li>
            <li><a href="{{URL::to('admin/categorys')}}"><i class="  glyphicon glyphicon-pencil blue"></i> Add products</a></li>
            <li><a href="{{URL::to('admin/phones')}}"><i class=" glyphicon glyphicon-phone blue"></i> Phones</a></li>
            <li class="active"><a href="{{URL::to('admin/networks')}}"><i class=" glyphicon glyphicon-signal blue"></i> Networks</a></li>
            <li><a href="{{URL::to('report')}}"><i class=" glyphicon glyphicon-send blue"></i> Inbox</a></li>
            <li><a href="{{URL::to('admin/news')}}"><i class="glyphicon glyphicon-question-sign blue"></i> News</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-question-sign blue"></i> FAQs</a></li>
          </ul>
          <br>
          </div>
@stop

@section('header')

<img src="../img/chart_up.png"> <h1 class="blck2">Networks</h1>

@stop

@section('content')

 @include('common.notification')

  

  <!-- Tab panes -->
  
   
	<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr class="panel panel-success green">
                  <th>#</th>
                  <th>Network Name</th>
                  <th>Duration</th>
                  <th>Prices</th>
                  <!-- <th>Header</th>
                  <th>Header</th> -->
                  <th><i class="glyphicon glyphicon-cog jbt"></i> Action</th>
                </tr>
              </thead>
              @foreach($networks as $network)
              <tbody>
                <tr>
                  <td>{{$network->id}}</td>
                  <td>{{$network->network_name}}</td>
                  <td>{{$network->delivery_time}}</td>
                  <td>{{$network->price}}</td>
                  <!-- <td>dolor</td>
				  <td>dolor</td> -->
                  <td><button class="btn btn-small btn-default" onclick=" return ConfirmDelete('yes', 'no')"><i class=" glyphicon glyphicon-trash"></i></button></td>
                </tr>
                </tbody>
                @endforeach
              <tfoot>
              	
              </tfoot>
            </table>
          </div>	
  
   
<br>

@stop