
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lapak Seni</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
    <div class="bg-color">
      <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Lapak Seni</a>
            </div>
            @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="lauraMenu">
              <ul class="nav navbar-nav navbar-right navbar-border">
              @auth
              <a href="{{ url('/home') }}">Home</a>
              @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
              </ul>
              @endauth
            </div>
          </div>
          @endif
        </nav>
      </header>
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
                <h2>Lapak Seni</h2>
                <p>Website Informasi<br>Kesenian di Indonesia</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center">Contoh Kesenian di Indonesia</h2>
        </div>
        <div class="col-md-12">
          <div id="myGrid" class="grid-padding">
            <div class="col-md-4 col-sm-4 padding-right-zero">
              <img src="img/reog2.jpg" class="img-responsive">
              <img src="img/port01.jpg" class="img-responsive">
              <img src="img/port02.jpg" class="img-responsive">
              <img src="img/portfolio01.jpg" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-4 padding-right-zero">
              <img src="img/portfolio02.jpg" class="img-responsive">
              <img src="img/port01.jpg" class="img-responsive">
              <img src="img/port02.jpg" class="img-responsive">
              <img src="img/reog2.jpg" class="img-responsive">
              <img src="img/port03.jpg" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-4 padding-right-zero">
              <img src="img/port01.jpg" class="img-responsive">
              <img src="img/reog2.jpg" class="img-responsive">
              <img src="img/portfolio02.jpg" class="img-responsive">
              <img src="img/port03.jpg" class="img-responsive">
              <img src="img/portfolio02.jpg" class="img-responsive">
              <img src="img/port02.jpg" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonial" class="section-padding wow fadeInUp">
    <div class="container">
      <div class="row">
        <h2 class="title text-center">Apa itu Lapak Seni ?</h2>
        <div class="test-sec">
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamsed commodo nibh ante facilisis bibendum dolor feugiat at. </p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <!--end row-->
      <div class="row">
        <div class="col-md-6">
          <div class="footer">
            © Copyright. All Rights Reserved <br>
            2019
          </div>
        </div>
        <div class="col-md-6 text-right">
          <ul class="social-list">
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-dribbble"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-vimeo"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
          </ul>
        </div>

      </div>
      <!--end row-->
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>