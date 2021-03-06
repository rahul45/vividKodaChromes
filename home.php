<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>VividKodaChromes</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/reset.css">
        <!-- CSS reset -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Gem style -->
        <link rel="stylesheet" href="css/product.css">
        <link rel="stylesheet" href="core/core.css">
        <script src="angular/ang-render/angular.min.js"></script>
        <script src="angular/bootstrap/ui-bootstrap-tpls-0.9.0.js"></script>
        <script src="angular/angular-src/mainApp.js"></script>
        <script src="angular/angular-src/core-controller.js"></script>
        <script src="js/main.js"></script>
        <!-- Gem style -->
        <script src="js/modernizr.js"></script>
        <!-- Modernizr -->
        <link rel="stylesheet" href="css/animate.min.css">

        <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
        <script src="js/index.js"></script>
        <script src="js/carousel.js"></script>

        <!--scrolling animation-->
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </head>
    <body ng-app="vividkoda">
        <div>

            <nav role="navigation" class="navbar navbar-default navbar-fixed-top" style="background-color: black; margin-bottom: 0px;">
                <div class="container-fluid" ng-controller="core_controller">

                    <div class="navbar-header" >
                        <button type="button" ng-click ="changeshow()" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       <a href="#Home" class="navbar-brand" style="font-size: 30px; color: white; font-stretch: wider; font-weight: 600;">
                           VividKodaChromes
                       </a>
                    </div>

                    <div id="navbarCollapse" class="collapse navbar-collapse" ng-click="ulclick('list')" ng-show="shownavMenu">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#Home" style="color: white;">Home</a></li>
                            <li><a href="#WhoWeAre">About</a></li>
                            <li><a href="#What_We_Offer">What we Offer</a></li>
                            <li><a href="#Gallary">Gallery</a></li>
                            <li><a href="" ng-click="toggleModal('contactQuery')">Ask Queries</a></li>
                            <li><a href="#Contact_us">Get In Touch</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>

<!--/***********************************slide start fdrom here********************************************/-->
          
                <a id="Home"></a>
                <div class="slider_img01">
                    <div id="myCarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li class="slide-one active"></li>
                            <li class="slide-two"></li>
                            <li class="slide-three"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item" style="background-image: url('Images/slide1.jpg');">
                                <div class="wow pulse animated" data-wow-delay="500ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                    <h2>Site Work is in progress </h2>
                                </div>
                                <div class="carousel-caption">
                                    <div class="wow slideInRight">
<!--                                        <h3>First slide label</h3>-->
                                    </div>
                                    <div class="wow slideInLeft">
                                        <p>Beauty is inside your heart </p>
                                    </div>
                                </div>
                            </div>


                            <div class="item" style="background-image: url('Images/slide2.jpg')">
                                <div class="wow pulse animated" data-wow-delay="500ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                  <h2>Site Work is in progress </h2> 
                                </div>
                                <div class="carousel-caption">
                                    <div class="wow slideInRight">
<!--                                        <h3>Second slide label</h3>-->
                                    </div>
                                    <div class="wow slideInLeft">
<!--                                        <p>We build brands</p>-->
                                    </div>
                                </div>
                            </div>



                            <div class="item" style="background-image: url('Images/slide3.jpg')">
                                <div class="wow pulse animated" data-wow-delay="500ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                 <h2>Site Work is in progress </h2> 
                                </div>
                                <div class="carousel-caption">
                                    <div class="wow slideInRight">
<!--                                        <h3>Third slide label</h3>-->
                                    </div>
                                    <div class="wow slideInLeft">
<!--                                        <p>We help to make your business better. </p>-->
                                    </div>
                                </div>
                            </div>
                                  <div class="item" style="background-image: url('Images/slide4.jpg')">
                                <div class="wow pulse animated" data-wow-delay="500ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                 <h2>Site Work is in progress </h2> 
                                </div>
                                <div class="carousel-caption">
                                    <div class="wow slideInRight">
<!--                                        <h3>Third slide label</h3>-->
                                    </div>
                                    <div class="wow slideInLeft">
<!--                                        <p>We help to make your business better. </p>-->
                                    </div>
                                </div>
                            </div>
                             <div class="item" style="background-image: url('Images/bluesky.jpg')">
                                <div class="wow pulse animated" data-wow-delay="500ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                 <h2>Site Work is in progress </h2> 
                                </div>
                                <div class="carousel-caption">
                                    <div class="wow slideInRight">
<!--                                        <h3>Third slide label</h3>-->
                                    </div>
                                    <div class="wow slideInLeft">
<!--                                        <p>We help to make your business better. </p>-->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="carousel-control right">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>


<!--@@@@@@@@@@@##home page end here@@##################################-->
            
        <div class="row"> 
            <a id="WhoWeAre"></a>
            <section id="cd-team" class="cd-section whoweare">
                <div class="cd-container" >
                    <h3>About Us</h3><br>
                    <ul>
                        <li>
                            <div id="abtus01img"><img src="Images/ruchir.jpg" class="img-responsive imgow01" alt="Owner"/>

                            </div>
                            <div> 
                                 <h3 style="height:70px;">Ruchir Parsai</h3>
                            &nbsp;&nbsp;<p class="para">
"I am passionate photographer who wants to show the world, how beautiful things can be.To me Photography is not just clicking photos, but it is an "ART".I always try to work on different ideas in every field of photography but have some what expertise myself in Potraiture,Pre/Post-birth,Pre-Wedding Shoots and Candid Photography.If 
you are open to explore new ideas, let us catch up over a cup of coffee and bring new ideas into execution!"
                            </p> &nbsp;&nbsp;</div>
                        </li>

                    </ul>
                </div> <!-- cd-container -->
            </section> <!-- cd-team -->
            <div class="cd-overlay">         
            </div>
                      
        </div>
<!--##############################-our product list start from here-->
                <a id="What_We_Offer"></a>
                <div class="row" id="WhatWeOffer">
                    <div class="container">
                        <div class="wow slideInLeft">
                            <div class="row">
                                <div class="wow pulse animated" data-wow-delay="300ms" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                    <div class="product_head">What We Offer</div>
                                </div>
                                <div class="col-md-4 col-sm-6 products ">
                                    <h2>
                                        <a><span class="glyphicon glyphicon-stats"></span></a>&nbsp;&nbsp;

                                        Maternity (Pre/Post Birth)</h2>
                                    <p>
                                        
                                    </p>
                                </div>

                                <div class="col-md-4 col-sm-6 products ">
                                    <h2>
                                        <a><span class="glyphicon glyphicon-road"></span></a>&nbsp;&nbsp;Pre-wedding/Wedding Portfolio</h2>
                                    <p>
                                        
                                    </p>
                                </div>

                                <div class="col-md-4 col-sm-6 products  ">
                                    <h2>
                                        <a><span class="glyphicon glyphicon-refresh"></span></a>&nbsp;&nbsp;Potraiture</h2>
                                    <p>
                                        
                                    </p>
                                </div>

                                <div class="col-md-4 col-sm-6 products ">
                                    <h2>
                                        <a><span class="glyphicon glyphicon-fire"></span></a>&nbsp;&nbsp;Product Photography</h2>
                                     <p>
                                        
                                    </p>
                                </div>

                                <div class="col-md-4 col-sm-6 products  ">
                                    <h2>
                                        <a><span class="glyphicon glyphicon-bullhorn"></span></a>&nbsp;&nbsp;Fashion</h2>
                                    <p>
                                    </p>
                                </div>

                                <div class="col-md-4 col-sm-6 products  ">
                                    <h2>
                                        <a><span class="glyphicon glyphicon-time"></span></a>&nbsp;&nbsp;Events</h2>
                                   <p>                                   
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--###############-our product list start from here#################-->
<!--###-gallery start from here###################################-->
            <a id="Gallary"></a>
            <div class="wow slideInRight">
                <div class="row gallary">
                    <h3>Gallery at Glance</h3>
                    <iframe src="Flip_turn/index.html" width="100%" height="650" frameborder="0" style="border: 0"></iframe>
                </div>
            </div>

<!-- ##address start from here############################################-->
            <a id="Contact_us"></a>
            <div class="contact_us">
                <div class="wow swing center animated">
                    <h3>Get In Touch</h3>
                    <address>
                        Saki Naka, <br>
                         Andheri East<br>
                        Mumbai - 400069
                        Mob:+91-9004140537<br>
                    </address>
                </div>
            </div>
            <div>
                <iframe class="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="200" src="https://maps.google.com/maps?hl=en&amp;q=saki naka Andheri (East),mumbai&amp;ie=UTF8&amp;t=m&amp;z=6&amp;iwloc=B&amp;output=embed"></iframe>
            </div>

        <!-- footer start from here-@##################################-->
             <div class="p_footer">
                <div class="col-sm-12 t_right">
                    &copy; 2015 vividkodachromes.com <a href="#home"></a>
                </div>
            </div>

    </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>