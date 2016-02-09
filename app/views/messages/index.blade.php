@extends('layout.dashboard')

@section('sidebar')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <br>
            <li><a href="{{URL::to('dashboard')}}"><i class="glyphicon glyphicon-dashboard blue"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="{{URL::to('editprofile')}}"><i class="glyphicon glyphicon-user blue"></i> Edit profile</a></li>
            <li class="active"><a href="{{URL::to('messages')}}"><i class="glyphicon glyphicon-comment blue"></i> Messages <sup><span class="badge"> 3</span></sup></a></li>
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

<img src="../public/img/folder_conflicted.png"> Messages

@stop



@section('content')

@include('common.notification')

 <div class="tabbable"> 
        <ul class="nav nav-tabs well well-sm mh">
        <li class="active"><a class="yellow" href="#tab1" data-toggle="tab"><i class="icon-arrow-down"></i> Inbox <span class="label label-info"> 23</span></a></li>
        <li><a class="yellow" href="#tab2" data-toggle="tab"> <i class="icon-envelope"></i> Send Messages</a></li>
    </ul>
    <div class="tab-content ">
    <div class="tab-pane active" id="tab1">
        <p><table class="table table-striped mb">
     <thead>
        <tr>
            <th><i class="icon-envelope"></i> Inbox</th>
            <th class="text-center"> <i class="icon-cog"></i></th>
            
        </tr>
     </thead>
    
     <tbody>
        <tr>
            <td class="">
            This service is also extremely helpful if you intend to use our IMEI based iPhone factory unlocking service but before ordering you would want to make sure that your phone is locked to a carrier. After buying our service, we’ll send you detailed info about your device via Email. Here’s an example. 
            <hr>
           <p><i class="glyphicon glyphicon-dashboard"></i>: <b>2015-09-98</b> <span class="navy2">|</span> <i class="icon-share-alt"></i><b> customer service</b> </p>
            <div id="collapse1" class="panel-collapse collapse"> 
            <div class="panel-body">
                {{Form::open(array('url'=>'contacts', 'method'=>'POST'))}}
                <input type="hidden" class="input-xlarge" name="title" value="Reply to message"> 
                <input type="hidden" class="input-xlarge" name="email" value="">
                <input type="hidden" class="input-xlarge" name="help" value="reply">
                <textarea cols="300" name="message" rows="3"></textarea>
                <button type="submit"class="btn btn-default"> Reply</button>
                {{Form::close()}}
            
            </div>
            </div>
            </td>
            <td>
            <p><a href=""><button class="btn btn-small btn-default" onclick=" return ConfirmDelete('yes', 'no')"><i class="glyphicon glyphicon-trash"></i></button></a></p>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            </td>
            </tr>
     </tbody>
     
     </table>

      <div class="pagination pagination-right">
            
     </div>

        </p>
    </div>
    </div>
    </div>
@stop