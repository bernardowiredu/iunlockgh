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

    <title>Perfectunlockgh- best place to unlock your phones</title>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet' type='text/css'>
     --><!-- Bootstrap core CSS -->
     <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
       <link href="../public/css/bootstrap.css" rel="stylesheet">
     <link href="../public/css/popup.css" rel="stylesheet">
       <link href="../public/css/notice.css" rel="stylesheet">
    <!-- Custom styles for this template -->
     <link href="../public/css/navbar.css" rel="stylesheet">
     <link href="../public/css/sticky-footer-navbar.css" rel="stylesheet">
      <link href="../public/css/carouseller.css" rel="stylesheet">
       <link href="../public/css/breakingNews.css" rel="stylesheet">
       <link href="../public/css/font-awesome.css" rel="stylesheet">
       <link href="../public/css/animations.css" rel="stylesheet">
         <link href="../public/css/comments.css" rel="stylesheet">
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script src="../public/js/jquery.marquee.js"></script>
  </head>

  <body>

  <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="container ">

      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand" href="{{URL::to('/')}}"></i>Perfect<span class="yellow">unlockgh</span></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
              <!-- <li class=""><a href="#">Home</a></li> -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Imei Checker <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{URL::to('imei-checker')}}">NETWORK LOCK CHECK</a></li>
                  <li><a href="{{URL::to('imei-checker')}}">BLACKLISTED/BARRED/CLEAN CHECK</a></li>
                  <li><a href="{{URL::to('imei-checker')}}">FREE ICLOUD STATUS CHECK</a></li>
                  <li><a href="{{URL::to('imei-checker')}}">SPRINT USA - All IPHONE ELIGIBILITY TEST CLEAN/BLACKLISTED/UNPAID BILL</a></li>
                  
                  </ul>
              </li>
              <!-- <li><a href="{{URL::to('imei-checker')}}">IMEI CHECKER</a></li> -->
             <!--  <li><a href="{{URL::to('checkmend')}}">CHECKMEND</a></li> -->
               <!-- <li><a href="{{URL::to('request')}}">Request Unlock</a></li> -->
               <li><a href="{{URL::to('store')}}">Gevey Store</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Help <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <li><a href="{{URL::to('')}}">FAQs</a></li>
                   <li><a href="{{URL::to('order-status')}}">REQUEST UNLOCK</a></li>
                  <li><a href="{{URL::to('order-status')}}">CHECK ORDER STATUS</a></li>
                  <li><a href="{{URL::to('unlock-help')}}">UNLOCKING GUIDE</a></li>
                  <li><a href="{{URL::to('blog')}}">BLOG</a></li>
                  <li class="divider"></li>
                  <li><a href="#">CONATCT US</a></li>
                  </ul>
              </li>

               {{Form::open(array('url'=>'search', 'method'=>'GET', 'class'=>'navbar-form navbar-left'))}}
              <li><input type="text" class="form-control3" list="name" data-provide="typeahead"  name="keyword"  placeholder="Search model eg. iPhone5"></li>
              <datalist id="name" class="open">
                @foreach($products as $product)
                  <option>{{$product->product_name}}</option>
                @endforeach
              </datalist> 
              {{Form::close()}}
              </ul>

             <!--  <li>
                <script>
                document.write(getDate());
                </script>
              </li> -->
              </ul>

            <ul class="nav navbar-nav navbar-right">

            <!--  <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> <sup class="badge">   3</sup></a></li> -->
              <!-- <li class=""><a href="./">Balance: GH₵23 <span class="sr-only">(current)</span></a></li> -->
           <li><a href="../navbar-static-top/"><img src="../public/img/Ghana.png" width="40" height="25"></a></li>
            @if(!Auth::check())
              <li><a class="" href="{{URL::to('login')}}"> Signin | Create account</a>
             <!--  <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                  <form method="post" action="login" accept-charset="UTF-8">
                    <input style="margin-bottom: 15px;" type="text" placeholder="Username" class="form-control" id="username" name="username">
                    <input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
                    <input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
                    <label class="string optional" for="user_remember_me"> Remember me</label>
                    <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
                    <label style="text-align:center;margin-top:5px">or</label>
                    <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                    <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                  </form>
                </div>
              </li> -->
              </li>
            @else
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logged in as {{ e(Auth::user()->username) }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{URL::to('dashboard')}}">DASHBOARD</a></li>
                  <li><a href="{{URL::to('order-status')}}">CHECK ORDER STATUS</a></li>
                  @if(Auth::user()->role == 1)
                  <li><a href="{{URL::to('admin/categorys')}}">ADMIN HOME</a></li>
                  @else
                  @endif
                  <li class="divider"></li>
                  <li><a href="{{URL::to('signout')}}">LOGOUT</a></li>
                  </ul>
              </li>
            </ul>
            @endif
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <br>
      <div class="p"> 
          @foreach($upnav as $up)
          <span><b class="blck">{{$up->date}}</b> {{$up->message}}  &emsp;</span>
          @endforeach
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="../public/js/jquery.marquee.js"></script>

        <script>
          $('.p').marquee({
          speed: 20000,
          gap: 50,
          delayBeforeStart: 0,
          direction: 'left',
          duplicated: false,
          pauseOnHover: true
        });
        </script>
       <br><p></p>

       <div id="call1" class="well well-sm">
       <div class="row">
       <ul class="nav">
        <div class="col-sm-1 col-md-1">
        <li><a class="txt" href="{{URL::to('products/2')}}">Samsung</a></li>
        </div>
       <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/3')}}"><i class="glyphicon glyphicon-phone red"></i> HTC</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/1')}}"><i class="fa fa-apple yellow"></i> Apple</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/4')}}"> Blackberry</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/7')}}"> <i class="glyphicon glyphicon-phone blue"></i> ZTE</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/9')}}"> Motorola</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/10')}}"><!-- <i class="glyphicon glyphicon-phone green"></i> --> Huawei</a></li>
        </div>
          <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/5')}}"><i class="glyphicon glyphicon-phone red"></i> Nokia</a></li>
        </div>
          <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/6')}}"><i class="glyphicon glyphicon-phone blue"></i> LG</a></li>
        </div>
          <div class="col-sm-1 col-md-1 line2">
        <li>
         <li><a class="txt" href="{{URL::to('products/8')}}"><i class="glyphicon glyphicon-phone blck"></i> Sony</a></li>
            <!-- Contact helpline on <i class="glyphicon glyphicon-earphone yellow"></i> 0244049419 -->
         </li>
        </div>
        <div class="col-sm-1 col-md-2 line2">
        <li>
         <li class="blck ">
            Contact <i class="glyphicon glyphicon-phone-alt blue"></i> 0244072639
         </li>
        </div>
        </ul>
        </div>
        </div>



      <!-- Main component for a primary marketing message or call to action -->
      <div class="well mf">
       <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
      <!-- Indicators -->
      <ul class="nav nav-pills nav-justified">
          <li  class="active"><a href="{{URL::to('about-us')}}#"><i class="glyphicon glyphicon-user"></i> About Us</a></li>
          <li  class="rd"><a href="{{URL::to('payment-help')}}" class="whyt"><i class="glyphicon glyphicon-phone"></i> How to make Payment</a></li>
          <li  class="yh"><a href="{{URL::to('unlock-help')}}#" class="whyt"><i class=" glyphicon glyphicon-question-sign"></i> Unlocking Guide</a></li>
          <li class="gn"><a href="{{URL::to('order-status')}}" class="whyt"><i class="glyphicon glyphicon-hdd"></i> Check Order Status</a></li>
        </ul>


      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- <div class="item">
          <img  id="demo5" src="../public/img/banner1.jpg" alt="logo" width="1073" height="380">
          <div class="contenthover">
           <h1 class="text-center"><b>Galaxy Note 4</b></h1>
           <h3 class="text-center"><b>FASTEST unlocking - 100% Guaranteed</b></h3>
         </div>
           </div> -->
           <div class="item ">
          <img id="demo6"  src="../public/img/banner1.jpg" alt="pic" width="1100" height="380">
        </div>
         <!--  <div class="col-xs-9 col-md-8 pull-right push-down">0
           <div class="carousel-caption">
            <div class="jumbotron">
            <div class="animatedParent">
             <img  class="animated bounceIn" src="../public/img/lock.png">
            <img  class="animated bounceIn" src="../public/img/anyunlock.png" alt="logo" width="320" height="160">
            </div>
            <p></p>
            <a class="btn btn-primary btn-lg btn-block" href="#" role="button"><i class="fa fa-unlock"></i>  Free your iPhone's now!!! &raquo;</a>
              
        </div>
        
          </div>
          </div> -->
        
        <div class="item active">
          <img id="demo6" class="push-3x" src="../public/img/web-banner.jpg" alt="pic">
          <div class="col-xs-11 col-md-10 pull-right push-down">
           <div class="carousel-caption">
            <div class="jumbotron">
          <!--   <img  id="demo6" src="../public/img/lock.png" alt="logo"> -->
               <!-- <h1 id="selector2"> Phone Locked?</h1>
                  <div class="animatedParent">
                 Well say goodbye to restrictions and start using any network! 
                  <p>Unlock your phone at the comfort of your home</p>
                </div> -->
           <!-- <a class="btn btn-primary btn-lg btn-block blue" href="#" role="button"><i class="fa fa-unlock"></i> Free all your samsung devices now!!!</a> -->
        </div>
          </div>
          </div>
        </div>

        <div class="item ">
          <img id="demo6"  src="../public/img/Unlock_banner22.jpg" alt="pic" width="1073" height="400">
        </div>

         <div class="item ">
          <img id="demo6"  src="../public/img/BANNER22.jpg" alt="pic" width="1073" height="500">
        </div>

        <div class="item  mf">
        <img src="../public/img/hands.png" alt="pic"  width="400" height="400" >
         <div class="col-xs-11 col-md-10 pull-right push-down-sm">
          <div class="carousel-caption">

          <div class="col-xs-3 col-md-4">
          <img src="../public/brands/nokia-logo.png" width="150" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
          <img src="../public/brands/2l8u.png" width="150" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
            <img src="../public/brands/motorola-logo.png" width="150" height="100">
          </div>
          <p></p>
          <div class="col-xs-3 col-md-4">
          <img src="../public/brands/blackberry.png" width="125" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
          <img src="../public/brands/huawei.png" width="120" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
            <img src="../public/brands/Logo-1900x700_c.png" width="120" height="100">
          </div>
          <p></p>
          <div class="col-xs-3 col-md-4">
          <img src="../public/brands/Sony_Corporation-logo.png" width="150" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
          <img src="../public/brands/Apple-Logo-rainbow.png" width="150" height="100">
          </div>
           <div class="col-xs-3 col-md-4">
            <img src="../public/brands/zte-logo.png" width="130" height="100">
          </div>
          <div class="animatedParent" data-sequence="500">
           <h4 class="animated bounceIn" data-id="1">Unlock all these phone brands at the comfort of your home!!!</h4>
           </div>
          </div>
        </div>
        <!-- <div class="item">
          <img src="../public/img/bb.png" alt="pic" width="300" height="300">
          <div class="carousel-caption">
            ...
          </div>
        </div> -->
    <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
       
      </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    </div> <!-- /container -->

  <div class="well well-sm hidden-xs"><h4 class="blue"><div class="feed-2"></div></h4></div>
   
   <div class="row">
    <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img class="pull-right" src="img/iphone-66.jpg" alt="product" width="140" height="160">
        <div class="caption">
        <h4><strong>Verizon</strong></h4>
        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense</p>
       <p class="">Supported devices: <p></p><span class="yellow"><b>iPhone 4/4S/5/5C/5S/6/6+/6S/6S+</b></span></p>
         <p class="">Delivery Time: <span class="yellow"><b>1-7days</b></span></p>
        <a class="btn btn-block btn-success" role="button" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
        Unlock Phone From GH₵ 50.00
      </a>
      <div class="collapse" id="collapseExample4">
      <div class="well">
                  <form name="Network">
          <select class="form-control" name="phone" onChange="go()">
          <option value="{{URL::to('product/9')}}">iPhone 4</option>
          <option value="{{URL::to('product/8')}}">iPhone 4s</option>
          <option value="{{URL::to('product/7')}}">iPhone 5</option>
          <option value="{{URL::to('product/6')}}">iPhone 5c</option>
          <option value="{{URL::to('product/5')}}">iPhone 5s</option>
          <option value="{{URL::to('product/3')}}">iPhone 6</option>
          <option value="{{URL::to('product/4')}}">iPhone 6+</option>
          <option value="{{URL::to('product/2')}}">iPhone 6s</option>
          <option value="{{URL::to('product/1')}}">iPhone 6s+</option> 
          </select>
           <script type="text/javascript">
            function go() {
            location= document.Network.phone.
            options[document.Network.phone.selectedIndex].value
            }
          </script>
          <br>
          <input type="button" class="btn btn-warning" value="Go" onClick="go()">
          </form>
      </div>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">

      <img class="pull-right" src="img/iphone-64.jpg" alt="product" width="140" height="160">
      <div class="caption">
        <h4><strong>T-mobile</strong></h4>
        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense</p>
        <p class="">Supported devices: <p></p><span class="yellow"><b>iPhone 4/4S/5/5C/5S/6/6+/6S/6S+</b></span></p>
         <p class="">Delivery Time: <span class="yellow"><b>1-7days</b></span></p>
          
          <a class="btn btn-block btn-primary" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
            Unlock Phone From GH₵ 50.00
          </a>
          <div class="collapse" id="collapseExample1">
          <div class="well">
          <form name="Version">
          <select class="form-control" name="lock" onChange="go()">
          <option value="{{URL::to('product/9')}}">iPhone 4</option>
          <option value="{{URL::to('product/8')}}">iPhone 4s</option>
          <option value="{{URL::to('product/7')}}">iPhone 5</option>
          <option value="{{URL::to('product/6')}}">iPhone 5c</option>
          <option value="{{URL::to('product/5')}}">iPhone 5s</option>
          <option value="{{URL::to('product/3')}}">iPhone 6</option>
          <option value="{{URL::to('product/4')}}">iPhone 6+</option>
          <option value="{{URL::to('product/2')}}">iPhone 6s</option>
          <option value="{{URL::to('product/1')}}">iPhone 6s+</option> 
          </select>
           <script type="text/javascript">
            function go() {
            location= document.Version.lock.
            options[document.Version.lock.selectedIndex].value
            }
          </script>
          <br>
          <input type="button" class="btn btn-warning" value="Go" onClick="go()">
          </form>
          </div>
          </div>
    </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img class="pull-right" src="img/iphone-72.jpg" alt="product" width="140" height="160">
      <div class="caption">
        <h4><strong>Sprint</strong></h4>
        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense</p>
         <p class="">Supported devices: <p></p><span class="yellow"><b>iPhone 4/4S/5/5C/5S/6/6+/6S/6S+</b></span></p>
         <p class="">Delivery Time: <span class="yellow"><b>1-7days</b></span></p>
        <a class="btn btn-block btn-warning" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
            Unlock Phone From GH₵ 50.00
          </a>
          <div class="collapse" id="collapseExample2">
          <div class="well">
          <form name="Iphone">
          <select class="form-control" name="mobile" onChange="go()">
          <option value="{{URL::to('product/9')}}">iPhone 4</option>
          <option value="{{URL::to('product/8')}}">iPhone 4s</option>
          <option value="{{URL::to('product/7')}}">iPhone 5</option>
          <option value="{{URL::to('product/6')}}">iPhone 5c</option>
          <option value="{{URL::to('product/5')}}">iPhone 5s</option>
          <option value="{{URL::to('product/3')}}">iPhone 6</option>
          <option value="{{URL::to('product/4')}}">iPhone 6+</option>
          <option value="{{URL::to('product/2')}}">iPhone 6s</option>
          <option value="{{URL::to('product/1')}}">iPhone 6s+</option> 
          </select>
           <script type="text/javascript">
            function go() {
            location= document.Iphone.mobile.
            options[document.Iphone.mobile.selectedIndex].value
            }
          </script>
         <br>
          <input type="button" class="btn btn-warning" value="Go" onClick="go()">
          </form>
          
      </div>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img class="pull-right" src="img/iphone-56.jpg" alt="product" width="140" height="160">
      <div class="caption">
       <h4><strong>AT&T</strong></h4>
        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense</p>
         <p class="">Supported devices: <p></p><span class="yellow"><b>iPhone 4/4S/5/5C/5S/6/6+/6S/6S+</b></span></p>
         <p class="">Delivery Time: <span class="yellow"><b>1-7days</b></span></p>
        <a class="btn btn-block btn-danger" role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
          Unlock Phone From GH₵ 50.00
          </a>
          <div class="collapse" id="collapseExample3">
          <div class="well">
                    <form name="Atnt">
          <select class="form-control" name="unlocked" onChange="go()">
          <option value="{{URL::to('product/9')}}">iPhone 4</option>
          <option value="{{URL::to('product/8')}}">iPhone 4s</option>
          <option value="{{URL::to('product/7')}}">iPhone 5</option>
          <option value="{{URL::to('product/6')}}">iPhone 5c</option>
          <option value="{{URL::to('product/5')}}">iPhone 5s</option>
          <option value="{{URL::to('product/3')}}">iPhone 6</option>
          <option value="{{URL::to('product/4')}}">iPhone 6+</option>
          <option value="{{URL::to('product/2')}}">iPhone 6s</option>
          <option value="{{URL::to('product/1')}}">iPhone 6s+</option> 
          </select>
           <script type="text/javascript">
            function go() {
            location= document.Atnt.unlocked.
            options[document.Atnt.unlocked.selectedIndex].value
            }
          </script>
          <br>
          <input type="button" class="btn btn-warning" value="Go" onClick="go()">
          </form>
        </div>
      </div> </div>
    </div>
  </div>
</div>
<br><br>
<div class="well well-sm mb"><h4 class="blue"><i class="glyphicon glyphicon-thumbs-up"></i><b> Our services</b>  </h4></div>
<div class="nav"><!-- blk -->
  <div class="col-sm-6 col-md-9">
    <!-- <img src="../public/img/home.png"> -->

  <h4 class="blue"><img src="../public/img/phone1.png" class="img-thumbnail hidden-xs" alt="pic" width="70" height="70" > <b> Free your phone from your network with our Unlock Codes and use any GSM Sim!</b></h4>
  <p class="push">Planning on traveling and need to put a local SIM card into your Phone? Want to change carriers but keep your phone? 
   You may need to unlock your phone in order to use a different SIM card. You've certainly come to the right place!</p>

    <h4 class="blue"><img src="../public/img/time_machine.png"  class="img-thumbnail hidden-xs" alt="pic" width="70" height="70" ><b> Phone Unlock Code Processed & Emailed - 24 hrs a day - 7 days a week</b></h4>
   <p class="push">Our automated website will process your order and send your phone unlocking code via email or text, guarantying Faster Results and 100% Customer Services Satisfaction.</p>

    <h4 class="blue"><img src="../public/img/earth.png"  class="hidden-xs img-thumbnail" alt="pic" width="65" height="65" ><b> We can Unlock 99% of the GSM Networks</b></h4>
   <p class="push">At Perfectunlockgh we can unlock most of the GSM Networks around the world. If you are trying to unlock a phone in Europe, America, Asia, Australia and over 190 Countries in the World, give us the challenge and you won't regret. We count with the largest database of unique Unlock Codes and Unlocking solutions in Earth.
    We can even unlock the phones which Service Providers claim cannot be unlocked</p>

     <h4 class="blue"><img src="../public/img/unlock.png"  class="img-thumbnail hidden-xs" alt="pic" width="70" height="70" ><b> We offer the LOWEST COST & QUICKEST TURNAROUND on every order.</b></h4>
    <p class="push">We provide your personal unlock codes and easy to follow instructions. Still wondering about how to unlock your mobile? Chillax! Our World Class Customer Support Team is available to guide you through the process via Chat, 
    Skype or E-mail from Mon to Fri 9am to 8pm.</p>

     <h4 class="blue"><img src="../public/img/microphone.png"  class="img-thumbnail hidden-xs" alt="pic" width="70" height="70" ><b> Do you provide unlocking services and you need lots of codes?</b></h4>
    <p class="push">We are here to help you! We can offer you wholesale pricing and the best delivery time. We are on your side and we understand that having the best price is this business is essential, 
    so please get in touch with us and let us know your needs.</p>

    <br>
    <div class="well well-sm mb">
    <h4 class="blue"><i class="glyphicon glyphicon-thumbs-up"></i> <b> This Week Most Popular Unlocked Brands</b></h4>
    </div>
    <div class="carouseller row-fluid for-car">
      <div class="carousel-wrapper">
        <div class="carousel-items">
          <div class="span3 carousel-block">
              <h3 class="nrml">iPhone 6/6+</h3>
              <img id="demo" src="img/iphone6b.png" alt="product" width="180" height="180">
               <div class="contenthover">
                 <span class="whyt">45 Phones unlocked</span>
                </div>
              <p class="smll">Click here to unlock your iPhone 6 series </p>
               <center><img src="../public/img/5stars.png"></center>
               <a href="{{URL::to('products/1')}}"><button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button></a>
          </div>

        <div class="span3 carousel-block">
          <h2 class="nrml">Blackberry Z30</h2>
          <img id="demo1" src="img/bb.png" alt="product" width="170" height="180">
           <div class="contenthover">
             <span class="whyt">30 Phones Unlocked</span>
            </div>
           <p class="smll">Click here to unlock your Blackberry Z30</p>
            <center><img src="../public/img/5stars.png"></center>
               <a href="{{URL::to('products/4')}}"><button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button></a>
        </div>

        <div class="span3 carousel-block">
        <h2 class="nrml">Galaxy S6/S6 edge</h2>
         <img id="demo2" src="img/s63.png" alt="product" width="170" height="180">
          <div class="contenthover">
            <span class="whyt">7 Phones unlocked</span>
            </div>
          <p class="smll">Click here to unlock your Samsung galaxy S6 </p>
           <center><img src="../public/img/5stars.png"></center>
               <a href="{{URL::to('products/2')}}"><button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button></a>
        </div>

        <div class="span3 carousel-block">
          <h2 class="nrml">HTC oneX</h2>
           <img id="demo3" src="img/htc.png" alt="product" width="180" height="180">
           <div class="contenthover">
             <span class="whyt">11 Phones unlocked</span>
            </div>
            <p class="smll">Click here to unlock your HTC oneX</p>
             <center><img src="../public/img/5stars.png"></center>
              <a href="{{URL::to('products/3')}}"><button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button></a>
        </div>

        <div class="span3 carousel-block">
        <h2 class="nrml">iPhone 4s</h2>
         <img id="demo4" src="img/iphonecase4.png" alt="product" width="180" height="180">
         <div class="contenthover">
           <span class="whyt">14 Phones unlocked</span>
          </div>
          <p class="">Click here to unlock your iPhone 4s</p>
          <center><img src="../public/img/5stars.png"></center>
          <button class="btn btn-success"><i class="fa fa-unlock"></i> <b>Unlock Phone</b></button>
        </div>



      </div>

    </div>

    <div class="carousel-control-block">

      <div class="carousel-button-left shadow"><a href="javascript:void(0)">‹</a></div>

      <div class="carousel-button-right shadow"><a href="javascript:void(0)">›</a></div>

    </div>

  </div>
   </div>  
   <div class="col-sm-6 col-md-3 cover mf">
  <form name="phones">

   <h4 class="blue"><b>Start unlocking here</b></h4>
   <select class="form-control" name="brands"  onChange="go()">
   <option value="{{URL::to('products/1')}}">Apple</option>
   <option value="{{URL::to('products/4')}}">Blackberry</option>
   <option value="{{URL::to('products/10')}}">Huawei</option>
   <option value="{{URL::to('products/3')}}">HTC</option>
   <option value="{{URL::to('products/6')}}">LG</option>
   <option value="{{URL::to('products/2')}}">Microsoft</option>
   <option value="{{URL::to('products/9')}}">Motorola</option>
   <option value="{{URL::to('products/5')}}">Nokia</option>
   <option value="{{URL::to('products/8')}}">Sony</option>
   <option value="{{URL::to('products/2')}}">Samsung</option>
   <option value="{{URL::to('products/7')}}">ZTE</option>
   </select>
   <p></p>

   
   <p>
   <button class=" btn-block btn btn-primary"> Click to continue unlocking</button>
   </p>
   <br>
   <p>
     
   </form>
   
   <h4 class="blue"><b> BUY ALL NEW GEVEYS SIMS HERE!!</b></h4>
   <div class="thumbnail">
   <img src="../public/img/10+.jpg" class="img-responsive">
   </div>
   </p>
   <p class="whyt"><a href="{{URL::to('store')}}">Click here to gevey store and buy now !! &raquo;</a></p>
     <!--  <label>Phone model<i class="text-danger"> **</i></label></label>
     <input type="text" class="form-control" placeholder="Enter Phone model">
   </p>
   <p>
    <label>Network Phone is locked to<i class="text-danger"> **</i></label></label>
     <input type="text" class="form-control" placeholder="Enter network phone is currently locked to">
   </p>
   <p>
    <label>IMEI number<i class="text-danger"> **</i></label>
     <input type="text" class="form-control" placeholder="Enter your IMEI number">
   </p>
   <p>
    <label>Phone number<i class="text-danger"> **</i></label></label>
     <input type="text" class="form-control" placeholder="Enter Phone number">
   </p> -->
   
   <br>
   <img src="img/mb2.png">
   <p class="">We ensure 100% money back guarantee for unlocking failure from our network or system</p>
   <br>
   <img src="img/models.png" width="220" height="50">
   <p><a class="blue" href="">Click here to check phone status >></a></p>
   
    <img src="img/imeichecker.png" width="220">
   <p><a class="blue" href="">Click to check phone status &raquo;&raquo;</a></p>
   <br>
   <p>
    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="220" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
   </p>
   <div class="well well-sm ny"><h4 class="blck text-center"><b>BLOG LATEST UPDATES</b></h4>
   <ul class="list-group">
     <li class="list-group-item  f5"><a href=""> &raquo; New ways to unlock your android device to root your phone</li>
     <li class="list-group-item blck"><a href=""> &raquo; How to unlock Huawei Ascend Y530</li>
     <li class="list-group-item blck f5"><a href=""> &raquo; How to unlock Huawei Ascend Y530</li>
     <li class="list-group-item blck"><a href=""> &raquo; How to unlock Huawei Ascend Y530</li>
   </ul>
   </div>
</div>
</div>  

<br><br>
<div class="well well-sm mb"><h4 class="blue"><i class="glyphicon glyphicon-comment"></i> <b> Testmonials:- What our customers say about us </b><span class="pull-right hidden-xs"> <font family="Arial"><a class="pull-right" href="{{URL::to('reviews')}}">write a testimonal</font> <i class="glyphicon glyphicon-pencil mouse"></i></a></span></div></h4>


    <!-- ******************************************MODAL POPUP FOR REVIEWS OR COMMENTS********************************* -->
      

        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Write your testimonal@Perfectunlockgh</h4>
            </div>
            <div class="modal-body mdal">
             
                <div class="form-group">
                  {{Form::open(array('url'=>'comment', 'method'=>'POST', 'id'=>'com'))}}
                  <label for="message-text" class="control-label blck2">Username:</label>
                  <input type="text" class="form-control" name="username" id="username"><br>

                  <label for="message-text" class="control-label blck2">Location</label>
                  <input type="text" class="form-control" name="location" id="location">

                  <input type="hidden" class="form-control" name="time" id="time" value="{{date("h:i:sa")}}">
                  <input type="hidden" class="form-control" name="date" id="date" value="{{date("Y-m-d")}}">
                  <br>
                  <label for="message-text" class="control-label blck2">Message:</label>
                  <textarea class="form-control" cols="3" rows="6" name="comments" id="message_text"></textarea>
                </div>
             
            </div>
            <div class="modal-footer">
              
              <input type="submit" class="btn btn-success"></button>
              </div>
            {{Form::close()}}
          </div>
        </div>
      </div>






    {{ Form::open(array('url' => 'sigin', 'method'=>'POST')) }}
    <div class="modal fade" id="siModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel2"><i class="glyphicon glyphicon-user"></i> SIGN IN</h4>
          </div>
          <div class="modal-body">
          @include('common.notification')
          <label class="blck">Email Address</label>
          <input type="text" class="form-control" name="email" placeholder="enter your email"><br>
          <label class="blck">Password</label>
          <input type="password" class="form-control" name="password_confirmation" placeholder="enter your password">
          </div>
          <div class="modal-footer">
          <button  type="submit" class="btn btn-primary">Signin</button>
          {{Form::close()}}
          <a href="{{URL::to('register')}}"><button type="button" class="btn btn-success">Register</button></a>
         
            
          </div>
        </div>
      </div>
    </div>



<!-- ******************************************************************************************************************* -->


    
     
    
     <div class="nav">
    
     @foreach($catnav as $cat)
      <div class="col-xs-6 col-md-3 hidden-xs">
                <div class="block-text rel zmin">
                    <!-- <a title="" href="#">The Purge: Anarchy</a> -->
                  <div class="mark">Posted on {{$cat->date}} {{$cat->time}}</div>
                    <p><i class="fa fa-quote-left"></i> {{$cat->comments}} </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel blck2">
                        <img src="../public/img/comt.png"><a title="">{{$cat->username}}</a>{{$cat->location}}
              </div>
            </div>
     @endforeach
</div>

<!-- social media plugin -->
 <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5672d22e179206b6" async="async"></script>

 <br>
   <div class="nav">
    <div class="well well-sm mb">
      <h4 class="blue"><b>Popular Networks Unlocked</b></h4>
     </div>
    <div class="well well-sm mf ">
    <center><img src="../public/img/network.png" class="img-responsive" border="0"></center>
  </div>
  </div>

   

  <div class="nav">
  <div class="well well-lg text-center">
  <h3><i class="glyphicon glyphicon-phone-alt blue"></i><span class="blck2
  '"> For mobile helplines please contact  <a class="yellow" href="#">0560094454</a> OR <a class="yellow" href="#">0244072639</a> OR <a class="yellow" href="#">0269477119</a>.<br> You can also email us at <a class="yellow" href="mailto:info.iulockgh@shop.com">info.perfectunlockgh@gmail.com</a></h3><br>
  </span></div>
  </div>

  <!-- <div class="na v">
    <div class="well  well-sm mb">
      <h4 class="yellow"><b><i>For PAYPAL AND BITCOIN Payments</i></b></h4>
    </div>
    <div class="well well-sm ">
      <div class="col-xs-3 col-md-3">
    <center><img src="../public/img/pypal.png" class="img-responsive" border="0" width="105" height="90"></center>
  </div>
    <div class="col-xs-3 col-md-3">
    <h4>send to kayappiah@gmail.com</h4>
    </div>
    <div class="col-xs-3 col-md-3">

    <center><img src="../public/img/bit3.png" class="img-responsive" border="0"></center>
  </div>
    <div class="col-xs-2 col-md-3">
    <h4>send to kayappiah@gmail.com</h4>
    </div>
  </div>
  </div> -->

  <div class="nav">
  <div class="well well-lg mb">
      <div class="inline">
        <ul class="nav">
        <div class="col-xs-6 col-md-3">
        <li><a href=""><h4 class="blue"><b>About Us</b></h4></a></li>
          <ul class="nav blck2">
            <li><i class="fa fa-home"></i> Home</li>
            <li> <i class="fa fa-user"></i> About Us</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
        <li><a href=""><h4 class="blue"><b>Get support</b></h4></a></li>
          <ul class="nav blck2">
            <li>FAQ</li>
            <li>Our Blog </li>
            <li>Contact Us</li>
            <li>How to make payment</li>
            <li>Check order status</li>
            <li>Affliate program</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
         <li><a href=""><h4 class="blue"><b>Follow us</b></h4></a></li>
          <ul class="nav blck2">
              <!-- fa fa-facebook
              fa fa-google-plus
              fa fa-linkedin
              fa fa-twitter -->
            <li><i class="fa fa-facebook-square dark-blue"></i> Facebook</i></li> 
             <li><i class="fa fa-twitter-square blue"></i>  Twitter</li>
             <li><i class="fa fa-google-plus-square red"></i>  Google+</li>
            </ul>    
         </div>
         <div class="col-xs-6 col-md-3">
       <li><a href=""><h4 class="blue"><b>Payment methods</b></h4></a></li>
        <ul class="nav">
          <li><img class="img-responsive" src="img/money_mobi.png" width="200" height="40"></li><p></p>
          
        </ul>
         </div>
         </ul>

        
      </div>
     
  </div>
  </div>

  <!-- <footer class="footer">
   <p class="text-muted">Copyright &copy; 2015 Cardsrex <a  data-toggle="modal" data-target=".bootstrapmodal" class="termsModal">Terms and conditions</a> 
  </footer>
 -->

  <div class="nav">
  <footer class="">
      <div class="inline">
        <p>Copyright &copy; 2013-{{date("Y")}} Perfectunlockgh.com All rights reserved. <a  data-toggle="modal" data-target=".bootstrapmodal" class="termsModal">Terms and conditions apply</a>
        <i class="text-off">  </i>
        <ul class="nav">
       <a class="btn btn-sn btn-success pull-right" id="show-message"><i class=" glyphicon glyphicon-info-sign"></i> Payment Notice</a>
        </ul>
        </p>
      </div>
      </div>
    </footer>
    </div>

   
    <div class="hidden-xs" id="my-welcome-message">
    <h1>Payment Notice</h1>
    <p>Kindly check the various mobile accounts before making payment.</p>
    <p>Current MTN money number is 

      <h3 class="red"><b><img src="../public/img/mtn.png" class="responsive" width="80" height="40"> 0244072639</b></h3> and TIGO cash number is <h3 class="red"><b><img src="../public/img/Tigo-Cash-logo.jpg" class="responsive" width="80" height="40">027xxxxxx</b></h3>
      </p>
    <p>You can make payment into your Perfectunlock Account for the purchase of any unlocking service and if paying directly without your account for any order make sure you make Mobile Transfer Payment before making online payment for your order. 
    In making mobile transfer use your account Username as Reference ID.</p>

    <hr class="text-inverse">
    <p class="red">For payment in Paypal or Bitcoin email us directly: info.perfectunlockgh@gmail.com</p>
    </div>
    </div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/56bb5cee4003e62e1740b559/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../public/js/jQuery.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> 
    <script src="../public/js/jquery-1.8.2.min.js"></script>
    <script src="../public/js/janimate.js"></script>
     <script src="../public/js/jSequence.js"></script>
    <script src="../public/js/css3-animate.js"></script>
    <script src="../public/js/jquery.contenthover.js"></script>
    <script src="../public/js/carouseller.min.js"></script>
     <script src="../public/js/jquery.firstVisitPopup.js"></script>  
    <script src="../public/js/jquery.breaking.js"></script>
    
    <script type="text/javascript">

    $('#network_name').change(function() {
        selectedOption = $('option:selected', this);
        $('input[name=delivery]').val( selectedOption.data('delivery') );
        $('input[name=price]').val( selectedOption.data('price') );
         $('#money').html( selectedOption.data('price'));
         $('#days').html( selectedOption.data('delivery') );
    });

   
    

    </script> 


    <script type="text/javascript">
     $('.feed-2').breakingNews({
        url: 'http://feeds.feedburner.com/mobileburn/news?format=xml',
        feedSize: {
            height: '30px',
            width: '900px'
        },
        numberToShow: 10,
        refresh: 2000,
        effect: 'tricker',
        effectDuration: 50,
        onComplete: function() {
            $(this).prepend('<div class="feed-title-2" />');
            $('.feed-title-2').html(arguments[0].responseData.feed.title);
        }
    });

     </script>

    <script type="text/javascript">
    $(function () {
        $('#my-welcome-message').firstVisitPopup({
          cookieName : 'homepage',
          showAgainSelector: '#show-message'
        });
      });
      </script>


       <script type="text/javascript">
        carouseller = new carousel('.carouseller');
      </script>

      <script>
      $('#demo').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo1').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo2').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo2').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo3').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo4').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8
      });

      $('#demo5').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8,
      overlay_width:470,
      overlay_height:180,
      effect:'slide',
      slide_direction:'left',
      overlay_x_position:'left',
      overlay_y_position:'center'
     
     });


      $('#demo6').contenthover({
      overlay_background:'#000',
      overlay_opacity:0.8,
      overlay_width:470,
      overlay_height:180,
      effect:'slide',
      slide_direction:'left',
      overlay_x_position:'left',
      overlay_y_position:'center'
     
     });

     
      </script>
      <script type="text/javascript">
       
               // Animate elements with effect and call callback when finish.
        $('#selector').jAnimate(effect, callback);

        // Animate elements with effect and remove classes when finish, also call callback.
        $('#selector').jAnimateOnce(effect, callback);

        // Execute a sequence of animations passed in arrayOfEffects and call callback when finish all.
        $('#selector4').jAnimateSequence(['bounce', 'tada', 'wobble']);


      </script>

</body>
</html>
