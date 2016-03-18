@extends('layout.main')


@section('header')

<h1 class="text-center uptest blck2">customer reviews</h1>
@stop

@section('content')


<h2 class="blck2">Write a customers review</h2>

@include('common.notification')

<div class="panel panel-default">
  <div class="panel-body">
   <div class="form-group">

   {{Form::open(array('url'=>'comment', 'method'=>'POST', 'id'=>'com'))}}

    <label for="message-text" class="control-label blck2">Username:</label>
    <input type="text" class="form-control" name="username" id="username"><br>

    <label for="message-text" class="control-label blck2">Location</label>
    <input type="text" class="form-control" name="location" id="location">

    <input type="hidden" class="form-control" name="time" id="time" value="{{date("h:i:sa")}}">
    <input type="hidden" class="form-control" name="date" id="date" value="{{date("Y-m-d")}}">
    <br>

    <label for="message-text" class="control-label blck2">Comments:</label>
    <textarea class="form-control" cols="3" rows="6" name="comments" id="message_text"></textarea>
     
      <input type="submit" class="btn btn-success"></button>  

      {{Form::close()}}        
             
  </div>
  </div>
</div>



@foreach($reviews as $review)
<div class="panel panel-default">
<div class="panel-body">
<p class="blue">{{$review->date}} {{$review->time}} </p>
{{$review->comments}}
<p class="text-right blue">{{$review->username}} / {{$review->location}} </p>
</div>
</div>
@endforeach


 <div class="pagination pagination-right pull-right">
	<ul style="list-style:none">
		<li>{{$reviews->links()}}</li>
	</ul>

</div>


@stop