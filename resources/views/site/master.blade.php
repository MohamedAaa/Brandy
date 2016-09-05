<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ siteSettings('site_name') }}</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    {{ Html::style('site/css/preloader.css') }}

    <!-- Icon Font-->
    {{ Html::style('site/style.css') }}
    {{ Html::style('site/css/owl.carousel.css') }}
    {{ Html::style('site/css/owl.theme.default.css') }}

    <!-- Animate CSS-->
    {{ Html::style('site/css/animate.css') }}


    <!-- Bootstrap -->
    <link href="site/css/bootstrap.min.css" rel="stylesheet">



    <!-- Style -->
    <link href="site/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="site/css/responsive.css" rel="stylesheet">
    
</head>

<body>
    
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <header id="HOME" style="background-position: 50% -125px;">
	        <div class="section_overlay">
	            <nav class="navbar navbar-default navbar-fixed-top">
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                  <a class="navbar-brand" href="#"><img src="site/images/logo.png" alt=""></a>
	                </div>

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  <ul class="nav navbar-nav navbar-right">
	                    <li><a href="#HOME">Home</a></li>
	                    <li><a href="#SERVICE">Services</a></li>
	                    <li><a href="#ABOUT">About</a></li>
	                    <li><a href="#TESTIMONIAL">Testimonial</a></li>
	                    <li><a href="#WORK">Work</a></li>
	                    <li><a href="#CONTACT">Contact</a></li>
	                  </ul>
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 

	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="home_text wow fadeInUp animated">
	                            <h2>{{ siteSettings('welcome') }}</h2>
	                            <p>a user interface and user experience specialist</p>
	                            <img src="site/images/shape.png" alt="">                        
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="scroll_down">
                            <a href="#SERVICE"><img src="site/images/scroll.png" alt=""></a>
	                            <h4>Scroll Down</h4>
	                        </div>
	                    </div>
	                </div>
	            </div>            
	        </div>  
	    </section>         
    </header>



    @yield('content')



    <footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img src="site/images/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Follow Me on Here</h2>
                        <ul class="icon_list">
                            <li><a href="{{ siteSettings('fb') }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ siteSettings('tw') }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ siteSettings('g_plus') }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="{{ siteSettings('in') }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="http://www.dribbble.com/abdullahnoman"target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; brandy 2015.All Right Reserved By <a href="http://www.themeforest.net/user/thecodecafe"target="_blank">Code Cafe Team</a></p>
                        <p>Made with love for creative people.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- =========================
     SCRIPTS 
============================== -->


    <script src="site/js/jquery.min.js"></script>
    <script src="site/js/bootstrap.min.js"></script>
    <script src="site/js/jquery.nicescroll.js"></script>
    <script src="site/js/owl.carousel.js"></script>
    <script src="site/js/wow.js"></script>
    <script src="site/js/script.js"></script>




</body>

</html>