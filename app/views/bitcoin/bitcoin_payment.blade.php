<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
     <link href="../css/bootstrap.css" rel="stylesheet">
     <!-- <link href='https://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet' type='text/css'>
    --> <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
      
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
   <link href="../css/notice.css" rel="stylesheet">
    <!-- Custom styles for this template -->
     <link href="../css/navbar.css" rel="stylesheet">
     <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
      <link href="../css/breakingNews.css" rel="stylesheet">
      <link href="../css/animations.css" rel="stylesheet">
      <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  <!--   <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : 'your_site_key'
        });
      };
    </script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="col-md-6 col-md-offset-3">
    
    <div class="panel panel-inverse">
      <div class="panel-heading ny">
        <h3 class="panel-title blck"><font color="#fff">Bitcoin Payment Transfer<span class="pull-right hidden-xs"><i class="glyphicon glyphicon-credit-card"></i></span></h3>
      </div>
      <div class="panel-body blck mf">
         <div class="col-md-4">
          <img src="../img/bit3.png" width="128" height="128">
         </div>
        <div class="well well-sm  around col-md-6 me">
        <!-- <h4 class="whyt">ORDER DETAILS</h4> -->
          <!-- <b class="whyt">Your  unlocking service <font color="green">(working)</font></b>
          <p class="text-muted">Unlocking time: </p> -->
         <?php
          $price = $order->price; 
          $x = $price;
          $y = 0.00091;

            $btc = $x * $y;
           

          ?> 
          <span class="text-center blck">GHS TO BTC CONVERSION FOR YOUR ORDER</span>
          <h3 class="blck"><b>GH₵{{$order->price}} <i class="glyphicon glyphicon-arrow-right"></i> {{$btc}} BTC</b></h3>

         </div>
          <!-- <div class="col-md-3 pull-right">
          <b>Your Balance<b class="caret"></b></b>
          <h4><font color="#286090"><b>GH₵ {{Auth::user()->balance}}</b></font></h4>
        </div> -->
        <!-- <p class="text-center">https://www.xmlgold.eu/en/processPayment/status/bbe73383338363230323</p> -->
              <br><br><br><br><br><br>                                                                                                                                                                               
        @include('common.notification')                                                                                                                                                                                                                                                                                                              
      {{Form::open(array('url'=>'btc', 'method'=>'POST'))}}
      <br>
      <h4><b>Step 1</b></h4>
      <ol>1. Copy and transfer the money to the bitcoin address below.</ol>
      
        <h4 class="text-center"><span class="blck">BTC address</span><br><span class="text-primary">13QhZDyXxwd86kog7CeXY8urazmfjEZzRa</span></h4> 
      <!-- <span class="red">Enter a valid mobile number to recieve order notifications</span> -->
     

    <!-- <input type="hidden" class="form-control" value=""  name="product_model" >
      <input type="hidden" class="form-control" value=""  name="network_name" >
      <input type="hidden" class="form-control" value=""  name="delivery_time"> -->
      <!-- <input type="hidden" class="form-control" value="" name="p_id"> -->
      <input type="hidden" class="form-control" value="{{$order->price}}"  name="price" >

      <?php
          $price = $order->price; 
          $x = $price;
          $y = 0.00091;

            $btc = $x * $y;
           

          ?> 

      <input type="hidden" class="form-control" value="{{$btc}}"  name="btc_cash" >
      <h4><b>Step 2</b></h4>
      <ol>1.After transfer has been completed copy and paste transcation hash in the form below.
      </ol>
      <ol>2. And click on confirm payment to verify your transcation you will be notified once we confirm and verify.<br>
      <p class="red text-left"><b>NB: Confirmation takes 5-10 minutes before verification is completed.</p></b></ol>
      <p>
      <label class="blck"><b> Copy and paste transcation hash</b><i class="text-danger"></i></label></label>
      <input type="text" class="form-control" name="payment_hash" placeholder="eg.8c7c0dd4cab61080c97ea1ad1ae20284c13238f01badd548f068568a3f4d5ffa">
      
      </p>

      
      <div class="col-md-12">
      <div class="col-md-7">
        <img src="../img/contact-center-badge-lg.png" width="64" height="64">
        <span>Need help? Call us on 0503214360</span>
      </div>
      <div class="col-md-5">
      <div class="form-inline pull-right">
      <div class="form-group">
        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
        <div class="input-group">
          
         <button class="btn btn-primary btn-block">Confirm Transfer</button>

         {{Form::close()}}
        </div>
      </div>
     
    </div>
    </div>
    </div>
     <br>
    </div>
    </div>
         <p class="text-center">Copyright &copy; 2016-{{date("Y")}} Perfectunlockgh.com All rights reserved.</p>
  </div>
  </div>

  <script type="text/javascript">
            var $_Tawk_API={},$_Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/54b86851289aef4754422f80/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
  </body>
  </html>


  <!-- <p>Phone Model: BlackberryZ10</p>
      <p>Network Locked To: BlackberryZ10</p>
      <p>Unlocking Price: BlackberryZ10</p>
      <p>Phone IMEI: 33349490940494</p>
      <p>Order Contact: BlackberryZ10</p>
      <p>Delivery Time: BlackberryZ10</p>
      <p>Created At: BlackberryZ10</p>
      <p>Order Status : Unlocked</p> -->