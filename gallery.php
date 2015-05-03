<?php require 'contact.php'; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="de"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="de"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="de"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Zotter - Bad &amp; Energie</title>
        <meta name="description" content="Zotter - Bad &amp; Energie">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="all.min.css">
        <link rel="stylesheet" type="text/css" href="gallery-resources/UberGallery.css" />
        <link rel="stylesheet" type="text/css" href="gallery-resources/colorbox/3/colorbox.css" />     
        <script src="modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="jquery-1.11.2.min.js"><\/script>')</script>
        <script src="bootstrap.min.js"></script>
        <script src="bootstrap-lightbox.min.js"></script>
        <script src="all.min.js"></script>
        <script type="text/javascript" src="gallery-resources/colorbox/jquery.colorbox.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
          });
        </script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- NAVIGATION -->    
    <div>
      <ul class="nav nav-pills navbar-fixed-top nav-custom" id="main_navigation">
        <li class="dropdown"><a class="btn-nav nav-active" href="index.php" role="button" data-slide-to="0" id="nav_home">Home</a></li>
        <li class="dropdown"><a class="btn-nav" href="index.php" role="button" data-slide-to="1" id="nav_aboutzotter">&Uuml;ber Zotter</b></a></li>
        <li class="dropdown"><a class="btn-nav" href="index.php" role="button" data-slide-to="2" id="nav_bath">Bad</b></a></li>
        <li class="dropdown"><a class="btn-nav" href="index.php" role="button" data-slide-to="3" id="nav_energy">Energie</b></a></li>
        <li class="dropdown"><a class="btn-nav" href="index.php" role="button" data-slide-to="4" id="nav_zotterpoints">Zotterpoints</a></li></li>
        <li class="dropdown"><a class="btn-nav" href="index.php" role="button" data-slide-to="17" id="nav_news">Aktuelles</a></li></li>
      </ul>
    </div>
    <!-- !NAVIGATION -->
    <div class="clearfix"></div>
    <!-- Header & Carousel -->
    <div class="container-fluid nav-fix">
      <div class="row col-header">
        <div class="col-md-12">
          <div class="row">

            <!-- SUB-NAV SLIDER -->
            <div class="col-md-3 times">            
              <div id="carousel-sub-nav" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner carousel-sub-nav" id="sub_navigation">
                  <div class="item active" id="subnav_home">
                    <div class="sub-nav">
                      &nbsp;
                    </div>
                    <div>
                      <br />
                      <p class="openinghours"><span class="glyphicon glyphicon-chevron-right"></span> MO - DO: 07:30 - 12:00 &amp; 13:00 - 17:00<br />FR: 07:30 - 12:00</p>
                    </div>
                  </div>
                  <!-- SUB-NAV - ABOUT US -->
                  <div class="item" id="subnav_aboutzotter">
                    <div class="sub-nav">
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="index.php#content" data-slide-to="7">&Uuml;ber uns</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="index.php#content" data-slide-to="6">Mitarbeiter</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="index.php#content" data-slide-to="8">Kontakt</a>
                    </div>
                    <div>
                      <br />
                      <p class="openinghours"><span class="glyphicon glyphicon-chevron-right"></span> MO - DO: 07:30 - 12:00 &amp; 13:00 - 17:00<br />FR: 07:30 - 12:00</p>
                    </div>                 
                  </div>
                  <!-- ENDOF: SUB-NAV - ABOUT US -->
                  <!-- SUB-NAV - BATHROOM -->
                  <div class="item" id="subnav_bath">
                    <div class="sub-nav">
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#content" data-slide-to="9">Das Zotterbad</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#content" data-slide-to="10">Badplanung</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#content" data-slide-to="11">Barrierefrei</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#content" data-slide-to="12">Das kleine Bad</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#content" data-slide-to="13">Wellness</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#content" data-slide-to="14">Wanne raus - Dusche rein</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#content" data-slide-to="15">Staubfrei Arbeiten</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="gallery.php" data-slide-to="15">Bildergalerie</a>
                    </div>
                    <div>
                      <br />
                      <p class="openinghours"><span class="glyphicon glyphicon-chevron-right"></span> MO - DO: 07:30 - 12:00 &amp; 13:00 - 17:00<br />FR: 07:30 - 12:00</p>
                    </div>
                  </div>
                  <!-- ENDOF: SUB-NAV - BATHROOM -->
                  <!-- SUB-NAV - NEWS -->
                  <div class="item" id="subnav_news">
                    <div class="sub-nav">
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#content" data-slide-to="17">RenoDeco</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#content" data-slide-to="18">Klima Design Wände</a>
                    </div>
                    <div>
                      <br />
                      <p class="openinghours"><span class="glyphicon glyphicon-chevron-right"></span> MO - DO: 07:30 - 12:00 &amp; 13:00 - 17:00<br />FR: 07:30 - 12:00</p>
                    </div>                
                  </div>
                  <!-- ENDOF: SUB-NAV - NEWS -->
                  <!-- SUB-NAV - ENERGY -->
                  <div class="item" id="subnav_energy">
                    <div class="sub-nav">
                      &nbsp;
                    </div>
                    <div>
                      <br />
                      <p class="openinghours"><span class="glyphicon glyphicon-chevron-right"></span> MO - DO: 07:30 - 12:00 &amp; 13:00 - 17:00<br />FR: 07:30 - 12:00</p>
                    </div>                
                  </div>
                  <!-- ENDOF: SUB-NAV - ENERGY -->
                  <!-- SUB-NAV - ZOTTERPOINTS -->
                  <div class="item" id="subnav_zotterpoints">
                    <div class="sub-nav">
                      &nbsp;
                    </div>
                    <div>
                      <br />
                      <p class="openinghours"><span class="glyphicon glyphicon-chevron-right"></span> MO - DO: 07:30 - 12:00 &amp; 13:00 - 17:00<br />FR: 07:30 - 12:00</p>
                    </div>                
                  </div>
                  <!-- ENDOF: SUB-NAV - ZOTTERPOINTS -->
                </div>
              </div>
            </div>
            <!-- ENDOF: SUB-NAV SLIDER -->
          <!-- IMAGE SLIDER -->
            <div class="col-md-6 hidden-xs hidden-sm">
                <div id="carousel-generic" class="carousel slide carousel-big" data-ride="carousel" data-interval="false">
                <!-- INDICATORS -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-generic" data-slide-to="4"></li>
                </ol>
                <!-- ENDOF: INDICATORS -->
               
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="./img/main04.jpg" alt="Zotterbad">
                    <div class="carousel-caption">
                        <h3>&nbsp;</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/main02.jpg" alt="Zotterbad">
                    <div class="carousel-caption">
                        <h3>&nbsp;</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/main03.jpg" alt="Zotterbad">
                    <div class="carousel-caption">
                        <h3>&nbsp;</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/main01.jpg" alt="Zotterbad">
                    <div class="carousel-caption">
                        <h3>&nbsp;</h3>
                    </div>
                  </div>
                </div>
               
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>               
           </div><!-- ENDOF: IMAGE-Carousel -->

          <div class="col-sm-3 hidden-xs hidden-sm">
            <img class="header-logo" src="./img/logo--header.jpg">
          </div>          
          </div>
        </div>
      </div>
      </div>
      <!-- CONTENT CAROUSEL -->
      <div class="container">
      <div class="col-md-12">
                <div id="content" class="carousel slide carousel-user" data-ride="carousel" data-interval="false">        
                <!-- Wrapper for slides -->
                <div class="carousel-inner">                  
                  <div class="item active" data-active-slide="0">
                  <span id="xyz" data-sub-nav="home"></span>
                    <div class="row content">
                      <div class="col-md-2"></div>
                      <div class="col-md-8 gallery">
                        <?php                           
                          include_once('gallery-resources/UberGallery.php'); 
                          $gs = new UberGallery;
                          $gallery = $gs->createGallery('img/gallery-images'); 
                        ?>
                        <p>&nbsp;</p>                        
                      </div>
                      <div class="col-md-2"></div>
                    </div>
                  </div>
                </div>
              </div> <!-- Carousel -->
           </div>
      </div>      
    </div> <!-- /container --> 
    <footer>
        <p>&copy; <a href="http://www.zotterbad.at">Bad &amp; Energie Zotter GmbH 2015</a> - Solarstraße 1, 9360 Friesach - Tel.: +43 (0)4268/26 44 0 - Fax: +43 (0)4268/26 44 4 - Email: <a href="mailto:office@zotterbad.at">office@zotterbad.at</a> -
        <a href="#content" data-slide-to="8">Impressum</a> - Grafik &amp; Design: <a href="http://www.kopf-kunst.at" target="_blank">KopfKunst</a></p>
    </footer>   
    <script src="//localhost:35729/livereload.js"></script>   

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
