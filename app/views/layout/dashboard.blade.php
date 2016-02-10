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

    <title></title>

    <!-- Bootstrap core CSS -->
     <link href="../public/css/bootstrap.css" rel="stylesheet">
       <link href="../public/css/notice.css" rel="stylesheet">
    <!-- Custom styles for this template -->
     <link href="../public/css/navbar.css" rel="stylesheet">
     <link href="../public/css/sticky-footer-navbar.css" rel="stylesheet">
     <link href="../public/css/breakingNews.css" rel="stylesheet">
     <link href="../public/css/dashboard.css" rel="stylesheet">
      <link href="../public/css/animations.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- <link href='https://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet' type='text/css'>
     --> <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <div class="container">


  <nav class="navbar navbar-default navbar-fixed-top mf">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="#"><!-- <i class="glyphicon glyphicon-phone yellow"></i> -->Perfect<span class="yellow">unlockgh</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <sup class="badge"> 3</sup></a></li>
            <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> <sup class="badge"> 3</sup></a></li>
            <li><a href="#">{{date("h:i:sa")}}</a></li>
           <li><a href="../navbar-static-top/"><img src="../public/img/Ghana.png" width="40" height="25"></a></li>
            @if(!Auth::check())
              <li><a href="{{URL::to('login')}}"</a>SIGN IN | CREATE ACCOUNT</li>
            @else
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logged in as {{ e(Auth::user()->username) }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{URL::to('')}}">DASHBOARD</a></li>
                  <li><a href="{{URL::to('order-status')}}">CHECK ORDER STATUS</a></li>
                  <li class="divider"></li>
                  <li><a href="{{URL::to('signout')}}">LOGOUT</a></li>
                  </ul>
              </li>
            </ul>
            @endif
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

          @yield('sidebar')
          
         <div class="col-sm-9  col-md-10 main">
          <h1 class="page-header blck">
          
          @yield('header')

          </h1>



          @yield('content')

          </div>
      
          <br>
        </div>
        </div>
  
         <div class="well well-sm hidden-xs mb"><h4 class="yellow"><div class="feed-2"></div></h4></div>

  <div class="nav">
    <div class="well well-sm mf">
         <center><img src="../public/img/network.png" class="img-responsive"></center>
    
    </div>
  </div> 

  <div class="nav">
  <!-- <div class="well well-lg ">
  mobile rss feed form mobile.com
  </div> -->
  </div>
  
  <div class="well well-lg mb">
      <div class="inline">
        <ul class="nav">
        <div class="col-xs-6 col-md-3">
        <li><a href=""><h4>About Us</h4></a></li>
          <ul class="nav">
            <li>Home</li>
            <li>Free Unlock Code</li>
            <li>About Us</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
        <li><a href=""><h4>Get support</h4></a></li>
          <ul class="nav">
            <li>FAQ</li>
            <li>Our Blog</li>
            <li>Call us on Skype</li>
            <li>Contact Us</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
         <li><a href=""><h4>Follow us</h4></a></li>
          <ul class="nav">
            <li>Facebook</li> 
             <li>Twitter</li>
             <li>Google+</li>
            </ul>    
         </div>
         <div class="col-xs-6 col-md-3">
       <li><a href=""><h4>Supported payment methods</h4></a></li>
        <ul class="nav">
           <li><img class="img-reponsive" src="img/money_mobi.png" width="200" height="40"></li><p></p>
         
        </ul>
         </div>
         </ul>


      </div>
     
  </div>
  
  <div class="nav">
     <footer class="">
      <div class="inline">
        <p>Copyright &copy; 2013-2015 iunlockgh.com <a  data-toggle="modal" data-target=".bootstrapmodal" class="termsModal">Terms and conditions</a>
        <i class="text-off"> | </i>
        <a href=""> How to buy</a>
        <ul class="nav">
        </ul>
        </p>
      </div>
      </div>
     </footer>
</div>
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54bfd49f46970d36" async="async"></script>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../public/js/jQuery.js"></script>
    <script src="../public/js/bootstrap.min.js"></script> 
    <script src="../public/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>  
    <script src="../public/js/jquery-1.8.2.min.js"></script>
    <script src="../public/js/jquery.breaking.js"></script>
    <script src='js/css3-animate-it.js'></script>
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


 
</body>
</html>