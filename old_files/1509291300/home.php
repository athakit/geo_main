<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="author" content="Denis Samardjiev" />
  <meta name="description" content="Raleway | HTML5, CSS3, Responsive Parallax, Mega Multi-purpose Bootrap 3 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <title>Gifted Education Office | KMUTT</title>
  
  <!-- Royal Preloader CSS -->
  <link rel="stylesheet" type="text/css" href="css/royal_preloader.css">

  <!-- jQuery Files -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!-- Royal Preloader -->
  <script type="text/javascript" src="js/royal_preloader.min.js"></script>
  <script type="text/javascript">
    Royal_Preloader.config({
        mode:         'number',
        showProgress:   false,
        background:   '#ffffff'
    });
  </script>

  <!-- Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" title="main-css">
  <link href="css/bootstrap-social.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet" >
  <link href="css/jquery.snippet.css" rel="stylesheet">
  <link href="css/buttons.css" rel="stylesheet">
  <link href="css/style-switcher.css" rel="stylesheet">
  
  <!-- Alternate Stylesheets // choose what you want and remove rest for production -->
  <link rel="alternate stylesheet" type="text/css" href="css/colors/blue.css" title="blue">
  <link rel="alternate stylesheet" type="text/css" href="css/colors/green.css" title="green">
  <link rel="alternate stylesheet" type="text/css" href="css/colors/purple.css" title="purple">
  <link rel="alternate stylesheet" type="text/css" href="css/colors/dark-blue.css" title="dark-blue">
  <link rel="alternate stylesheet" type="text/css" href="css/colors/red.css" title="red">
  <link rel="alternate stylesheet" type="text/css" href="css/colors/silver.css" title="silver">
  <link rel="alternate stylesheet" type="text/css" href="css/colors/pinkish.css" title="pinkish">
  <link rel="alternate stylesheet" type="text/css" href="css/colors/seagul.css" title="seagul">
  <link rel="alternate stylesheet" type="text/css" href="css/width-full.css" title="width-full">
  <link rel="alternate stylesheet" type="text/css" href="css/width-boxed.css" title="width-boxed">

  <!-- Icon Fonts -->
  <link href='css/ionicons.min.css' rel='stylesheet' type='text/css'>
  <link href='css/font-awesome.css' rel='stylesheet' type='text/css'>

  <!-- Magnific Popup -->
  <link href='css/magnific-popup.css' rel='stylesheet' type='text/css'>
</head>
<body class="royal_preloader scrollreveal">

  <div id="royal_preloader"></div>
  
  <!-- Begin Boxed or Fullwidth Layout -->
  <div id="bg-boxed">
      <div class="boxed">

<?php
$activePage = 'home'; 
require('header.php'); 
?>

      <!-- Begin Carousel -->
      <div id="slider3" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators carousel-indicators-caption">
          <li data-target="#slider3" data-slide-to="0" class="active"></li>
          <li data-target="#slider3" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="images/backgrounds/bg7.jpg" alt="Carousel Image 1">
            <div class="carousel-caption fadeInUpBig-animated">
                        <h3 class="no-margin text-white">Slide Title</h3>
                        <p class="text-light-grey hidden-xs no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
          </div>
          <div class="item">
            <img class="img-responsive" src="images/backgrounds/bg8.jpg" alt="Carousel Image 2">
            <div class="carousel-caption fadeInUpBig-animated">
                        <h3 class="no-margin text-white">Slide Title 2</h3>
                        <p class="text-light-grey hidden-xs no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#slider3" role="button" data-slide="prev">
          <span class="ion-ios7-arrow-left carousel-arrow-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#slider3" role="button" data-slide="next">
          <span class="ion-ios7-arrow-right carousel-arrow-right" aria-hidden="true"></span>
        </a>
      </div>
      <!-- End Carousel -->

      <!-- Begin Video + Intro  -->
      <div id="about" class="background-light-grey pt50 pb50">
        <div class="container">

          <!-- Begin Accordion Row -->
          <div class="row">
            <!-- Video -->
            <div class="col-sm-6 responsive-video mb30-xs" data-sr="enter left over .9s move 100px">
              <iframe src="https://player.vimeo.com/video/70217963" width="500" height="281" style="border: none; border-width: 0px;"></iframe>
            </div><!-- /column -->
            <div class="col-sm-6">
              <div class="heading mb20"><h4><span class="ion-android-developer mr15"></span>We Are Raleway</h4></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu risus libero. Donec et lorem lacinia, <a class="tooltip-active" data-toggle="tooltip" data-placement="top" title="Tooltip on top">adipiscing</a> nunc nec, hendrerit sapien. Sed in scelerisque tortor. Praesent porttitor odio non ullamcorper gravida.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu risus libero. Donec et lorem lacinisent porttitor odio non ullamcorper gravida.</p>
              <!-- List -->
              <ul class="list-arrow-2-color">
                  <li><small>Etiam mollis pharetra adipiscing. Etiam porta in sem vitae suscipit. </small></li>
                  <li><small>Consectetur adipiscing elit. Maecenas tempsam suscipit sagittis vestibulum.</small></li>
                  <li><small>Nulla volutpat aliquam velit</small></li>
                  <li><small>Faucibus porta lacus fringilla vel</small></li>
              </ul>  
            </div><!-- /column -->
          </div><!-- /row -->
          <!-- End Accordion Row -->

        </div><!-- /container -->
      </div><!-- /content -->
      <!-- End Video + Intro -->

      <!-- Begin Skills -->
      <div class="pt40 mb40 border-top">
        <div class="container">
          <!-- Title -->
          <div class="row">
            <div class="col-sm-12">
              <p class="lead text-center">The <b><mark>Skills</mark></b><br></p>
              <hr style="width:200px">
            </div>
          </div>
          <div class="row">
            <!-- Content 1 -->
            <div class="col-sm-4" data-sr="enter left over 1s">
                <h4><span class="ion-beaker bordered-icon-sm mr15"></span> Parallax.</h4>
                <p class="no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
            </div>
            <!-- Content 2 -->
            <div class="col-sm-4 mt20-xs" data-sr="enter top over 1s">
                <h4><span class="ion-beer bordered-icon-sm mr15"></span> Animate.</h4>
                <p class="no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
            </div>
            <!-- Content 3 -->
            <div class="col-sm-4 mt20-xs" data-sr="enter right over 1s">
                <h4><span class="ion-home bordered-icon-sm mr15"></span> Home.</h4>
                <p class="no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
            </div>
          </div>
          <div class="row mt20">
            <!-- Content 4 -->
            <div class="col-sm-4" data-sr="enter left over 1s">
                <h4><span class="ion-android-camera bordered-icon-sm mr15"></span> Create.</h4>
                <p class="no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
            </div>
            <!-- Content 5 -->
            <div class="col-sm-4 mt20-xs" data-sr="enter bottom over 1s">
                <h4><span class="ion-android-earth bordered-icon-sm mr15"></span> Visualize.</h4>
                <p class="no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
            </div>
            <!-- Content 6 -->
            <div class="col-sm-4 mt20-xs" data-sr="enter right over 1s">
                <h4><span class="ion-android-lightbulb bordered-icon-sm mr15"></span> Imagine.</h4>
                <p class="no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
            </div>
          </div>
        </div><!-- /container -->
      </div><!-- /cta -->
      <!-- End Skills -->

      <!-- Begin Our Work -->
      <section class="border-top pt40 mb15">
        <div id="portfolio" class="container">

          <!-- Begin Title -->
          <div class="row" data-sr="enter right">
            <div class="col-xs-4 col-xs-offset-4 text-center">
              <div class="heading"><h4>Our Work</h4></div>
            </div>
          </div>

          <!-- Portfolio Filter -->
          <div data-sr="enter left" class="row mb30">
            <ul class="nav nav-pills col-xs-12 text-center">
              <li class="filter" data-filter="all">All</li>
              <li class="filter" data-filter="print">Print</li>
              <li class="filter" data-filter="web">Web</li>
              <li class="filter" data-filter="illustration">Illustration</li>
            </ul>
          </div>

          <!-- Portfolio Items -->
          <div class="row">
            <ul id="myPortfolio" class="col-sm-12 no-padding text-center">
              <!-- Begin Item 1 -->
                <li onclick="" class="item illustration col-sm-4">
                  <div class="border">
                  <div class="view port-borderless portfolio-hover-1">
                    <!-- Project Thumb -->
                    <img class="img-responsive" src="images/projects/thumbs/illustration1.jpg" alt="..." />
                        <div class="mask">
                          <div class="portfolio-hover-content">
                            <!-- Zoom + Project Link -->
                        <a href="images/projects/illustration1.jpg" class="info image-zoom-link">
                          <div class="portfolio-icon-holder"><span class="ion-ios7-search portfolio-icons"></span></div>
                        </a>
                        <a href="portfolio-single-project.html" class="info">
                          <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                        </a>
                      </div><!-- /portfolio hover content -->
                    </div><!-- /mask-->
                  </div><!-- /portfolio hover -->
                  <div class="portfolio-text background-white">
                      <h3 class="portfolio-title"><a href="single-project.html">Beach</a></h3>
                      <div class="project-category">Illustration</div>
                  </div>
                </div>
              </li><!-- /list item -->
              <!-- End Item 1 -->

              <!-- Item 2 -->
                <li onclick="" class="item web col-sm-4">
                <div class="border">
                  <div class="view port-borderless portfolio-hover-1">
                    <!-- Project Thumb -->
                    <img class="img-responsive" src="images/projects/thumbs/web1.jpg" alt="..." />
                        <div class="mask">
                          <div class="portfolio-hover-content">
                        <a class="popup-vimeo info" href="https://vimeo.com/80836225">
                          <div class="portfolio-icon-holder"><span class="ion-ios7-search portfolio-icons"></span></div>
                        </a>
                        <a href="portfolio-single-project.html" class="info">
                          <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                        </a>
                      </div><!-- /portfolio hover content -->
                    </div><!-- /mask-->
                  </div><!-- /portfolio hover -->
                  <div class="portfolio-text background-white">
                      <h3 class="portfolio-title"><a class="popup-vimeo" href="https://vimeo.com/80836225">Wyoming</a></h3>
                      <div class="project-category">Web</div>
                  </div>
                </div>
              </li><!-- /list item -->
              <!-- End Item 2 -->

                <!-- Item 3 -->
                <li onclick="" class="item print col-sm-4">
                <div class="border">
                  <div class="view port-borderless portfolio-hover-1">
                    <!-- Project Thumb -->
                    <img class="img-responsive" src="images/projects/thumbs/print1.jpg" alt="..." />
                        <div class="mask">
                          <div class="portfolio-hover-content">
                            <!-- Zoom + Project Link -->
                        <a href="images/projects/print1.jpg" class="info image-zoom-link">
                          <div class="portfolio-icon-holder"><span class="ion-ios7-search portfolio-icons"></span></div>
                        </a>
                        <a href="portfolio-single-project.html" class="info">
                          <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                        </a>
                      </div><!-- /portfolio hover content -->
                    </div><!-- /mask-->
                  </div><!-- /portfolio hover -->
                  <div class="portfolio-text background-white">
                      <h3 class="portfolio-title"><a href="single-project.html">Metal</a></h3>
                      <div class="project-category">Print</div>
                  </div>
                </div>
              </li><!-- /list item -->
              <!-- End Item 3 -->

                <!-- Item 4 -->
                <li onclick="" class="item illustration col-sm-4">
                <div class="border">
                  <div class="view port-borderless portfolio-hover-1">
                    <!-- Project Thumb -->
                    <img class="img-responsive" src="images/projects/thumbs/illustration2.jpg" alt="..." />
                        <div class="mask">
                          <div class="portfolio-hover-content">
                            <!-- Zoom + Project Link -->
                        <a href="images/projects/illustration2.jpg" class="info image-zoom-link">
                          <div class="portfolio-icon-holder"><span class="ion-ios7-search portfolio-icons"></span></div>
                        </a>
                        <a href="portfolio-single-project.html" class="info">
                          <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                        </a>
                      </div><!-- /portfolio hover content -->
                    </div><!-- /mask-->
                  </div><!-- /portfolio hover -->
                  <div class="portfolio-text background-white">
                      <h3 class="portfolio-title"><a href="single-project.html">Bridge</a></h3>
                      <div class="project-category">Illustration</div>
                  </div>
                </div>
              </li><!-- /list item -->
              <!-- End Item 4 -->

                <!-- Item 5 -->
                <li onclick="" class="item print col-sm-4">
                <div class="border">
                  <div class="view port-borderless portfolio-hover-1">
                    <!-- Project Thumb -->
                    <img class="img-responsive" src="images/projects/thumbs/print2.jpg" alt="..." />
                        <div class="mask">
                          <div class="portfolio-hover-content">
                            <!-- Zoom + Project Link -->
                        <a href="images/projects/print2.jpg" class="info image-zoom-link">
                          <div class="portfolio-icon-holder"><span class="ion-ios7-search portfolio-icons"></span></div>
                        </a>
                        <a href="portfolio-single-project.html" class="info">
                          <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                        </a>
                      </div><!-- /portfolio hover content -->
                    </div><!-- /mask-->
                  </div><!-- /portfolio hover -->
                  <div class="portfolio-text background-white">
                      <h3 class="portfolio-title"><a href="single-project.html">Camera</a></h3>
                      <div class="project-category">Print</div>
                  </div>
                </div>
              </li><!-- /list item -->
              <!-- End Item 5 -->

                <!-- Item 6 -->
                <li onclick="" class="item web col-sm-4">
                <div class="border">
                  <div class="view port-borderless portfolio-hover-1">
                    <!-- Project Thumb -->
                    <img class="img-responsive" src="images/projects/thumbs/web3.jpg" alt="..." />
                        <div class="mask">
                          <div class="portfolio-hover-content">
                            <!-- Zoom + Project Link -->
                        <a href="images/projects/web3.jpg" class="info image-zoom-link">
                          <div class="portfolio-icon-holder"><span class="ion-ios7-search portfolio-icons"></span></div>
                        </a>
                        <a href="portfolio-single-project.html" class="info">
                          <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                        </a>
                      </div><!-- /portfolio hover content -->
                    </div><!-- /mask-->
                  </div><!-- /portfolio hover -->
                  <div class="portfolio-text background-white">
                      <h3 class="portfolio-title"><a href="single-project.html">Our City</a></h3>
                      <div class="project-category">Web</div>
                  </div>
                </div>
              </li><!-- /list item -->
              <!-- End Item 6 -->

                <!-- Item 7 -->
                <li onclick="" class="item illustration col-sm-4">
                <div class="border">
                  <div class="view port-borderless portfolio-hover-1">
                    <!-- Project Thumb -->
                    <img class="img-responsive" src="images/projects/thumbs/illustration3.jpg" alt="..." />
                        <div class="mask">
                          <div class="portfolio-hover-content">
                            <!-- Zoom + Project Link -->
                        <a href="images/projects/illustration3.jpg" class="info image-zoom-link">
                          <div class="portfolio-icon-holder"><span class="ion-ios7-search portfolio-icons"></span></div>
                        </a>
                        <a href="portfolio-single-project.html" class="info">
                          <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                        </a>
                      </div><!-- /portfolio hover content -->
                    </div><!-- /mask-->
                  </div><!-- /portfolio hover -->
                  <div class="portfolio-text background-white">
                      <h3 class="portfolio-title"><a href="single-project.html">Eary</a></h3>
                      <div class="project-category">Illustration</div>
                  </div>
                </div>
              </li><!-- /list item -->
              <!-- End Item 7 -->

                <!-- Item 8 -->
                <li onclick="" class="item web col-sm-4">
                <div class="border">
                  <div class="view port-borderless portfolio-hover-1">
                    <!-- Project Thumb -->
                    <img class="img-responsive" src="images/projects/thumbs/web2.jpg" alt="..." />
                        <div class="mask">
                          <div class="portfolio-hover-content">
                            <!-- Zoom + Project Link -->
                        <a href="images/projects/web2.jpg" class="info image-zoom-link">
                          <div class="portfolio-icon-holder"><span class="ion-ios7-search portfolio-icons"></span></div>
                        </a>
                        <a href="portfolio-single-project.html" class="info">
                          <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                        </a>
                      </div><!-- /portfolio hover content -->
                    </div><!-- /mask-->
                  </div><!-- /portfolio hover -->
                  <div class="portfolio-text background-white">
                      <h3 class="portfolio-title"><a href="single-project.html">Happyus</a></h3>
                      <div class="project-category">Web</div>
                  </div>
                </div>
              </li><!-- /list item -->
              <!-- End Item 8 -->

                <!-- Item 9 -->
                <li onclick="" class="item print col-sm-4">
                <div class="border">
                  <div class="view port-borderless portfolio-hover-1">
                    <!-- Project Thumb -->
                    <img class="img-responsive" src="images/projects/thumbs/print3.jpg" alt="..." />
                        <div class="mask">
                          <div class="portfolio-hover-content">
                            <!-- Zoom + Project Link -->
                        <a href="images/projects/print3.jpg" class="info image-zoom-link">
                          <div class="portfolio-icon-holder"><span class="ion-ios7-search portfolio-icons"></span></div>
                        </a>
                        <a href="portfolio-single-project.html" class="info">
                          <div class="portfolio-icon-holder"><span class="ion-link portfolio-icons"></span></div>
                        </a>
                      </div><!-- /portfolio hover content -->
                    </div><!-- /mask-->
                  </div><!-- /portfolio hover -->
                  <div class="portfolio-text background-white">
                      <h3 class="portfolio-title"><a href="single-project.html">Material</a></h3>
                      <div class="project-category">Print</div>
                  </div>
                </div>
              </li><!-- /list item -->
              <!-- End Item 9 -->

            </ul><!-- /portfolio ul -->
          </div><!-- /row -->

          <!-- Lead Text -->
          <div class="row">
            <div class="mb20 col-sm-6 col-sm-offset-3 text-center">
              <span class="lead"><b>Maecenas tempsam suscipit</b> sagittis vestibulum. Aliquam eu risus libero. Donec et lorem lacinisent porttitor odio non ullamcorper gravida.</span>
            </div>
          </div>

        </div><!-- /container -->
      </section><!-- /content -->
      <!-- End Our Work -->

      <!-- Begin Intro + Small Carousel -->
      <div class="background-light-grey pt40 pb40 border-top">
        <div class="container">
          <!-- Begin Carousel + Content -->
          <div class="row">

            <!-- Content Inside -->
            <div class="col-sm-8">
              <div class="heading mb20 mb30-xs"><h4><span class="ion-beaker mr15"></span>The Studio</h4></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu risus libero. Donec et lorem lacinia, <a class="tooltip-active" data-toggle="tooltip" data-placement="top" title="Tooltip on top">adipiscing</a> nunc nec, hendrerit sapien. Sed in scelerisque tortor. Praesent porttitor odio non ullamcorper gravida.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu risus libero. Donec et lorem lacinisent porttitor odio non ullamcorper gravida.</p>
              <!-- List -->
              <ul class="list-arrow-2-color no-margin">
                  <li><small>Etiam mollis pharetra adipiscing. Etiam porta in sem vitae suscipit. </small></li>
                  <li><small>Consectetur adipiscing elit. Maecenas tempsam suscipit sagittis vestibulum.</small></li>
                  <li><small>Nulla volutpat aliquam velit</small></li>
                  <li><small>Faucibus porta lacus fringilla vel</small></li>
              </ul>  
            </div><!-- /column -->
            <!-- End Content Inside -->

            <!-- Begin Carousel -->
            <div class="col-sm-4 mt30-xs" data-sr="enter right over .9s">
              <div id="aboutCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#aboutCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#aboutCarousel" data-slide-to="1"></li>
                  <li data-target="#aboutCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div style="background-image:url('images/backgrounds/stock2.jpg'); height:260px;" data-0="background-position: 50% 0px;" data-500="background-position: 50% -70px;"></div>
                  </div>
                  <div class="item">
                    <div style="background-image:url('images/backgrounds/stock3.jpg'); height:260px" data-0="background-position: 50% 0px;" data-500="background-position: 50% -70px;"></div>
                  </div>
                  <div class="item">
                    <div style="background-image:url('images/backgrounds/stock1.jpg'); height:260px" data-0="background-position: 50% 0px;" data-500="background-position: 50% -70px;"></div>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#aboutCarousel" role="button" data-slide="prev">
                  <span class="ion-ios7-arrow-left carousel-arrow-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#aboutCarousel" role="button" data-slide="next">
                  <span class="ion-ios7-arrow-right carousel-arrow-right" aria-hidden="true"></span>
                </a>
              </div>
            </div><!-- /column -->
            <!-- End Carousel -->

          </div><!-- /row -->
          <!-- End Carousel + Content -->

        </div><!-- /container -->
      </div><!-- /content -->
      <!-- End Intro + Small Carousel -->

      <!-- Begin Recent Work + Clients -->
      <section class="pt40 mb40 border-top">
        <div class="container">   
          <div class="row">
            <div class="col-lg-12">
              <div class="heading mb30">
                <h4><span class="ion-android-social-user mr15"></span>Recent Work</h4>
                        <div class="owl-controls">
                            <div id="customNav" class="owl-nav"></div>
                        </div>
              </div>
              <div id="owl-carousel-thumb" class="owl-carousel">
                <div>
                  <div class="thumbnail">
                            <div class="caption">
                              <div class="thumbnail-caption-holder">
                                  <h4 class="text-white">The Latia Project</h4>
                                  <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="images/backgrounds/stock1.jpg" alt="...">
                        </div>
                </div>
                <div>
                  <div class="thumbnail">
                            <div class="caption">
                              <div class="thumbnail-caption-holder">
                                  <h4 class="text-white">Goose UI</h4>
                                  <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="images/backgrounds/stock2.jpg" alt="...">
                        </div>
                </div>
                <div>
                  <div class="thumbnail">
                            <div class="caption">
                              <div class="thumbnail-caption-holder">
                                  <h4 class="text-white">Schroder's List</h4>
                                  <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="images/backgrounds/stock3.jpg" alt="...">
                        </div>
                </div>
                <div>
                  <div class="thumbnail">
                            <div class="caption">
                              <div class="thumbnail-caption-holder">
                                  <h4 class="text-white">NO Pelicans</h4>
                                  <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="images/backgrounds/stock4.jpg" alt="...">
                        </div>
                </div>
                <div>
                  <div class="thumbnail">
                            <div class="caption">
                              <div class="thumbnail-caption-holder">
                                  <h4 class="text-white">Fanbango</h4>
                                  <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="images/backgrounds/stock5.jpg" alt="...">
                        </div>
                </div>
                <div>
                  <div class="thumbnail">
                            <div class="caption">
                              <div class="thumbnail-caption-holder">
                                  <h4 class="text-white">The Latia Project</h4>
                                  <a href="#" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                                </div>
                            </div>
                            <img src="images/backgrounds/stock6.jpg" alt="...">
                        </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Client 1 -->
            <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left" >
              <a href="#"><img src="images/logos/boomerang.png" class="img-responsive clients-img" alt="Client 1"></a>
            </div>

            <!-- Client 2 -->
            <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left">
              <a href="#"><img src="images/logos/backlight.png" class="img-responsive clients-img" alt="Client 2"></a>
            </div>

            <!-- Client 3 -->
            <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left">
              <a href="#"><img src="images/logos/equi.png" class="img-responsive clients-img" alt="Client 3"></a>
            </div>

            <!-- Client 4 -->
            <div class="col-sm-2 col-xs-4" data-sr="enter left">
              <a href="#"><img src="images/logos/ome.png" class="img-responsive clients-img" alt="Client 4"></a>
            </div>

            <!-- Client 5 -->
            <div class="col-sm-2 col-xs-4" data-sr="enter left">
              <a href="#"><img src="images/logos/euro.png" class="img-responsive clients-img" alt="Client 5"></a>
            </div>

            <!-- Client 6 -->
            <div class="col-sm-2 col-xs-4" data-sr="enter left">
              <a href="#"><img src="images/logos/micro.png" class="img-responsive clients-img" alt="Client 6"></a>
            </div>
          </div><!-- /row -->

        </div><!-- /container -->
      </section><!-- /section -->
      <!-- End Recent Work + Clients -->


<?php
require 'footer.php'; 
?>

    </div><!-- /boxed -->
  </div><!-- /bg boxed-->
  <!-- End Boxed or Fullwidth Layout -->
  
  <!-- Javascript Files -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/hover-dropdown.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
  <script type="text/javascript" src="js/scrollReveal.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="js/jquery.snippet.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/style-switcher.js"></script>
  <script type="text/javascript" src="js/activate-snippet.js"></script>
  <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script>
    var config = {
      easing: 'hustle',
      mobile:  true,
      delay:  'onload'
    }
    window.sr = new scrollReveal( config );
    </script>
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>