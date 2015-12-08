@extends('layout.holder')




@section('content')
<br><br>

 <!--  <h1>PerfectUnlockgh.com</h1> -->
<div class="nav f5">
  <div class="span7">
	<div class="col-sm-offset-1 col-md-5 push-2x hidden-xs">
	<img src="img/homepage-image-bootloader.png" class="img-responsive" width="380" height="350">
  
	
	<div class="animatedParent" data-sequence="500">
  <h2 class="animated bounceIn txt-shadow" data-id="1">Unlock your cell phone and use any network!</h2>
  <p>
		<ul class="nav big">
			<li><i class="glyphicon glyphicon-ok green animated bounceInLeft" data-id='2'></i> We offer our services at the cheapest rates</li><p></p>
			<li><i class="glyphicon glyphicon-ok green animated bounceInLeft" data-id='3'></i> We offer 100% Money back guarantee.</li><p></p>
			<li><i class="glyphicon glyphicon-ok green animated bounceInLeft" data-id='4'></i> We offer unlock which is permanent and doesn’t void warranty.</li><p></p>
			<li><i class="glyphicon glyphicon-ok green animated bounceInLeft" data-id='5'></i> We provide technical support after unlocking your iPhone</li><p></p>
			<li><i class="glyphicon glyphicon-ok green animated bounceInLeft" data-id='6'></i> After using our service, your device can use any sim</li><p></p>
		</ul>
	</p>
  </div>
	</div>
  </div>
	<div class="col-sm-5 col-md-5 bg-n">
 

     {{ Form::open(array('url' => 'login', 'method'=>'POST', 'class' => 'form-signin')) }}

      @include('common.notification')
      

        {{ Form::token() }}

        
        <h3 class="form-signin-heading text-primary"><i class=" glyphicon glyphicon-user"></i> Log in</h3>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="inputbg form-control " name="email" placeholder="Email address" required autofocus>
        <p></p>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> <span class="blck">Remember me</span> 
          </label>
        </div>
        <button class="btn btn-lg  btn-primary btn-block" type="submit"><i class="glyphicon glyphicon-hand-right"></i> Sign in</button
      </form>
      <p></p>
      <p class="text-center"><a href="{{URL::to('forgotten-password')}}" class="btn btn-danger"><font color="#fff">Forgotten password ? click here</font></a></p>

      
       <h3 class="text-primary text-center">I'm a new customer</h3>
        <p class="text-center blck">You can create an account in just a few simple steps. Click below to begin.</p>
       
       {{Form::close()}}
        <center><a href="{{URL::to('register')}}"><button class="btn btn-success animated" type="submit">Create new account</button></a></center>
       
        <br>
    </div>

   
</div> 




@stop


<script src="../public/js/bootstrap-tooltip.js"></script>
<script src="../public/js/jquery-1.8.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../public/js/css3-animate.js"></script>
<script type="text/javascript">
 $('#exampleInputEmail1').tooltip( 'please enter your username' );
 $('#email').tooltip( 'please enter a valid email address' );
 </script>




