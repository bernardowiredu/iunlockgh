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
     <link href="../public/css/bootstrap.css" rel="stylesheet">
     <link href="../public/css/notice.css" rel="stylesheet">
     s
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
   <!--  <link href='https://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet' type='text/css'>
     -->
       <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
   <!-- Custom styles for this template -->
     <link href="../public/css/navbar.css" rel="stylesheet">
     <link href="../public/css/sticky-footer-navbar.css" rel="stylesheet">
      <link href="../public/css/breakingNews.css" rel="stylesheet">
       <link href="../public/css/font-awesome.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}"><!-- <i class="glyphicon glyphicon-phone yellow"></i> -->Perfect<span class="yellow">UnlockGh</span></a>
          </div>
        <div id="navbar" class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
              <!-- <li class=""><a href="#">Home</a></li> -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">IMEI CHECKER <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{URL::to('')}}">Network Lock Check</a></li>
                  <li><a href="{{URL::to('order-status')}}">Blacklisted/Barred/Clean Check</a></li>
                  <li><a href="{{URL::to('signout')}}">Free ICLOUD Status Check</a></li>
                  <li><a href="{{URL::to('signout')}}">Sprint USA - All iPhone Eligibility Test Clean/Blacklist/Unpaid Bill</a></li>
                  
                  </ul>
              </li>
              <!-- <li><a href="{{URL::to('imei-checker')}}">IMEI CHECKER</a></li>
              <li><a href="{{URL::to('checkmend')}}">CHECKMEND</a></li> -->
               <li><a href="{{URL::to('request-unlock')}}">REQUEST UNLOCK</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">HELP <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <li><a href="{{URL::to('')}}">FAQs</a></li>
                  <li><a href="{{URL::to('order-status')}}">Check Order Status</a></li>
                  <li><a href="{{URL::to('unlock-help')}}">Unlocking Guide</a></li>
                  <li><a href="{{URL::to('blog')}}">Blog</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Contact Us</a></li>
                  </ul>
              </li>

              {{Form::open(array('url'=>'search', 'method'=>'GET'))}}
              <li><input type="text" class="form-controller" data-provide="typeahead"  name="keyword"  placeholder="Click here to Search for your model eg. iPhone5"></li>
              {{Form::close()}}
              </ul>

            <ul class="nav navbar-nav navbar-right">
              <!-- <li class=""><a href="./">Balance: GH₵23 <span class="sr-only">(current)</span></a></li> -->
           <li><a href="../navbar-static-top/"><img src="../public/img/Ghana.png" width="40" height="25"></a></li>
            @if(!Auth::check())
              <li><a href="{{URL::to('login')}}"> SIGN IN | CREATE ACCOUNT </a></li>
            @else
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logged in as {{Auth::user()->username}} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{URL::to('')}}">Dashboard</a></li>
                  <li><a href="{{URL::to('order-status')}}">Check Order Status</a></li>
                  <li class="divider"></li>
                  <li><a href="{{URL::to('signout')}}">Logout</a></li>
                  </ul>
              </li>
            </ul>
            @endif
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
        <div class='marquee'> 

          <span> 2015-08-21 We are currently carrying out website updates and our chat facility will not be live from 15.00 hrs GMT &emsp;</span>
           <span> 2015-08-21 We are currently carrying out website updates and our chat facility will not be live from 15.00 hrs GMT </span>
        
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="../public/js/jquery.marquee.js"></script>

        <script>
          $('.marquee').marquee({
          speed: 20000,
          gap: 50,
          delayBeforeStart: 0,
          direction: 'left',
          duplicated: false,
          pauseOnHover: true
        });
        </script>
        <!--   *********widget********************************* -->
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
       <!--  <div class="addthis_native_toolbox"></div> -->
       <br>
       <div id="call1" class="well well-sm mb txt-shadow">
       <div class="row">
       <ul class="nav">
        <div class="col-sm-1 col-md-1">
        <li><a class="txt " href="{{URL::to('products/2')}}">Samsung</a></li>
        </div>
       <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/3')}}"><i class="glyphicon glyphicon-phone red"></i> HTC</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/1')}}"><i class="fa fa-apple yellow"></i> Apple</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/4')}}">Blackberry</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/7')}}"> <i class="glyphicon glyphicon-phone blue"></i> ZTE</a></li>
        </div>
        <div class="col-sm-1 col-md-1 line2">
        <li><a class="txt" href="{{URL::to('products/9')}}">Motorola</a></li>
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
         <li><a class="txt" href="{{URL::to('products/8')}}"><i class="glyphicon glyphicon-phone yellow"></i>Sony</a></li>
            <!-- Contact helpline on <i class="glyphicon glyphicon-earphone yellow"></i> 0244049419 -->
         </li>
        </div>
        <div class="col-sm-1 col-md-2">
        <li>
         <li>
            Contact <i class="glyphicon glyphicon-phone-alt blue"></i> 0244049419
         </li>
        </div>
        </ul>
        </div>
        </div>




     <!-- /container -->

<div class="well well-sm"><h4 class="yellow"><div class="feed-2"></div></h4></div>
   
  
<div class="well well-sm mb"><h4 class="yellow"><i class="glyphicon glyphicon-thumbs-up"></i> 

@yield('header')

</h4></div>

<div class=" col-md-offset-2 col-md-8 nav"><!-- blk -->
 

  @yield('content')

    
   
   
</div>
<br><br>
<div class="well well-sm mb"><h4 class="blue"><i class="glyphicon glyphicon-comment"></i> <b> Testmonials:- What our customers say about us </b><span class="pull-right hidden-xs"> <font family="Arial"><a class="pull-right" href="{{URL::to('reviews')}}">write a testimonal</font> <i class="glyphicon glyphicon-pencil mouse"></i></a></span></div></h4>

    <!-- ******************************************MODAL POPUP FOR REVIEWS OR COMMENTS********************************* -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Write your testimonal@iunlockgh</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="message-text" class="control-label">Message:</label>
                  <textarea class="form-control" cols="3" rows="6" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Send message</button>
            </div>
          </div>
        </div>
      </div>


<!-- ******************************************************************************************************************* -->


    
  <div class="nav">
    <!-- <div class="panel panel-default">
    @foreach($catnav as $cat)
    <div class="col-xs-6 col-md-3">
    <div class="panel-body">
      <i class="fa fa-quote-left blue"></i> {{$cat->comments}} 
      <br><p></p>
      <div class="well well-sm mb">
      <i class="fa fa-user blue"></i> <b>{{$cat->username}}</b>
    </div>
    </div>
    <div class="panel-footer yellow mb">Posted: {{$cat->date}} {{$cat->time}}</div>
    </div>
    @endforeach
    </div> -->
     @foreach($catnav as $cat)
      <div class="col-xs-6 col-md-3 hidden-xs">
                <div class="block-text rel zmin">
                    <!-- <a title="" href="#">The Purge: Anarchy</a> -->
                  <div class="mark">Posted on {{$cat->date}} {{$cat->time}}</div>
                    <p><i class="fa fa-quote-left"></i> {{$cat->comments}} </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                        <img src="../public/img/comt.png"><a title="">{{$cat->username}}</a>kumasi
              </div>
            </div>
     @endforeach
</div>
    
 

  <div class="nav">
    <div class="well well-sm mf">
          <center><img src="../public/img/network.png" class="img-responsive"></center>
        <!-- <p class="text-center"><font color="#33383E">For enquires call 0503214360</font></p> -->
    </div>
  </div>

  <div class="nav">
  <div class="well well-md text-center">
  <h3><i class="glyphicon glyphicon-phone-alt"></i> For mobile helplines please contact <a class="yellow" href="#">0503214360</a> OR <a class="yellow" href="#">0244072639</a> OR <a class="yellow" href="#">0501366148</a>.<br> You can also email us at <a class="yellow" href="mailto:info.iulockgh@shop.com">info.iunlockgh.com</a></h3><br>
  </div>
  </div>

  <div class="nav">
  <div class="well well-lg">
      <div class="inline">
        <ul class="nav">
        <div class="col-xs-6 col-md-3">
        <li><a href=""><h4 class="yellow">About Us</h4></a></li>
          <ul class="nav">
           <li><i class="fa fa-home"></i> Home</li>
            <li> <i class="fa fa-user"></i> About Us</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
        <li><a href=""><h4 class="yellow">Get support</h4></a></li>
          <ul class="nav">
            <li>FAQ</li>
            <li>Our Blog</li>
            <li>Contact Us</li>
            <li>How to make payment</li>
          </ul>
         </div>
         <div class="col-xs-6 col-md-3">
         <li><a href=""><h4 class="yellow">Follow us</h4></a></li>
          <ul class="nav">
             <li><i class="fa fa-facebook dark-blue"></i> Facebook</i></li> 
             <li><i class="fa fa-twitter blue"></i>  Twitter</li>
             <li><i class="fa fa-google-plus red"></i>  Google+</li>
            </ul>    
         </div>
         <div class="col-xs-6 col-md-3">
       <li><a href=""><h4 class="yellow">Supported payment methods</h4></a></li>
        <ul class="nav">
           <li><img class="img-reponsive" src="img/money_mobi.png" width="200" height="40"></li><p></p>
            </ul>
         </div>
         </ul>
        </div>
      </div>


  <!-- <footer class="footer">
   <p class="text-muted">Copyright &copy; 2015 Cardsrex <a  data-toggle="modal" data-target=".bootstrapmodal" class="termsModal">Terms and conditions</a> 
  </footer>
 -->
 
    

    <div class="nav">
     <footer class="">
      <div class="inline">
        <p>Copyright &copy; 2015 iunlockgh.com <a  data-toggle="modal" data-target=".bootstrapmodal" class="termsModal">Terms and conditions</a>
        <i class="text-off"> | </i>
        <a href=""> How to buy</a>
        <!-- <ul class="nav">
        <li class="pull-right">Current time 12:07:12</li>
        </ul> -->
        </p>
      </div>
      </div>
    </footer>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54bfd49f46970d36" async="async"></script>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../public/js/jQuery.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>  
    <script src="../public/js/jquery-1.8.2.min.js"></script>
    <script src="../public/js/jquery.breaking.js"></script>
  
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
