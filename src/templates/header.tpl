<!doctype html>
<html class="no-js" lang="{$page_lang}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jBrauer Web Design | {$page_title}</title>
    <!-- | External Stylesheets | -->
    <link rel="stylesheet" type="text/css" href="css/jbrauer.css">
    <link rel="stylesheet" type="text/css" href="js/vendor/jquery-autocomplete/styles.css">
    <link rel="stylesheet" type="text/css" href="css/foundation.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/shame.css">
  </head>
  <body>
    {if $page_title == 'Home'}
    <!-- | Header & Navigation Section | -->
    <div id="section-header" class="expanded row" style="height:522px;"> <!-- height must be equal to full height before collapse to prevent jarring -->

      <!-- | Top Bar | -->
      <div class="top-bar" style="padding:1rem;">
        <div class="top-bar-title">
          <a href="index.php">
            <img data-interchange="[img/logo/jbrauer/png/logo-jbrauer-icon-cropped-rgb.png, small], [img/logo/jbrauer/png/logo-jbrauer-banner-cropped-rgb.png, large]" alt="jBrauer Web Design &amp; Development" class="logo-topbar-md">
            <!-- <br>
            <small class="subheader ff-consolas">Web Design &amp; Development</small> -->
          </a>

          <!-- | Small logo (medium screen +) | -->
          <div class="top-bar-logo text-center hide-for-small-only hide" style="position:fixed; top:0; z-index:10; margin:0.75rem;">
            <a href="index.php" style="display: inline-block;">
              <img src="img/logo/jbrauer/svg/logo-jbrauer-icon-rgb.svg" alt="jBrauer Web Design &amp; Development" class="logo-topbar-sm">
              <br>
              <small class="subheader ff-consolas" style="font-size:7px;">Web Design &amp; Development</small>
            </a>
          </div> <!-- /#top-bar-logo -->

          <!-- | Medium hire me button | -->
          <a class="small hollow button" href="#" style="position: absolute; top:0; right:0; z-index:10; margin: 0.75rem;">Affiliates</a>
          <a id="btn-hire" class="small success button hide" href="#" style="position: fixed; top:0; right:0; z-index:10; margin: 0.75rem;">Hire Me!</a>

          <div class="clearfix"></div>
        </div> <!-- /.top-bar-title -->
      </div> <!-- /#top-bar-1 -->

      <!-- | Hero Header | -->
      <header id="header-hero" class="header-hero text-center">
        <h1>Changing the World Through Design</h1>
        <p class="lead subheader">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <br>
        <a class="large button" href="#">Learn More</a>
        <a class="large success button" href="#">Hire Me!</a>
      </header>

      <!-- | Sticky Navigation | -->
      <nav data-sticky-container>
        <div id="sticky-navigation" class="sticky" data-sticky data-margin-top="0" data-top-anchor="header-hero:bottom" data-btm-anchor="section-footer:bottom" data-sticky-on="small">

          <!-- | Responsive Menu Toggle | -->
          <div id="responsive-menu-toggle" class="top-bar hide-for-medium">
            <div class="top-bar-title" style="width: auto;">
              <div class="pull-left" data-responsive-toggle="responsive-menu" data-hide-for="medium">
                <button id="responsive-menu-btn" class="small button" data-toggle><i class="fa fa-md fa-bars"></i> Menu</button>
              </div> <!-- /data-responsive-toggle -->

            </div> <!-- /.top-bar-title -->

            <!-- | Small logo (small screen) | -->
            <a class="top-bar-logo text-center show-for-small-only hide" href="index.php" style="display: inline-block; margin: 0 auto;">
              <img src="img/logo/jbrauer/svg/logo-jbrauer-icon-rgb.svg" alt="jBrauer Web Design &amp; Development" class="logo-topbar-sm">
              <br>
              <small class="subheader ff-consolas" style="font-size:7px;">Web Design &amp; Development</small>
            </a> <!-- /#top-bar-logo -->
          </div><!-- /#responsive-menu-toggle -->

          <!-- | Responsive Menu | -->
          <div id="responsive-menu" class="multi-bar">

            <!-- | Multi-bar Top Bar 1 | -->
            <!-- <div class="top-bar hide-for-small-only">
              <div class="top-bar-title text-center">
                <a href="index.php">
                  <img src="img/logo/jbrauer/png/logo-banner-jbrauer.png" alt="jBrauer Web Design &amp; Development" class="logo-topbar-md">
                  <br>
                  <small class="subheader ff-consolas">Web Design &amp; Development</small>
                </a>
              </div> /.top-bar-title
            </div> /#top-bar-1 -->

            <!-- | Multi-bar Top Bar 2 | -->
            <div id="top-bar-2" class="top-bar">
              <div class="top-bar-title">
              </div> <!-- /.top-bar-title -->
              <div class="top-bar-left">
                <ul class="menu vertical medium-horizontal">
                  <li {if $page_title == 'About'}class="active"{/if}><a href="about.php">About</a></li>
                  <li {if $page_title == 'Services'}class="active"{/if}><a href="#">Services</a></li>
                  <li {if $page_title == 'Contact'}class="active"{/if}><a href="#">Contact</a></li>
                  <li {if $page_title == 'Portfolio'}class="active"{/if}><a href="#">Portfolio</a></li>
                </ul>
              </div> <!-- /.top-bar-left -->
              <div class="top-bar-right">
                <ul class="menu pull-left">
                  <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-lg fa-github"></i></a></li>
                  <li><a href="#"><i class="fa fa-lg fa-codepen"></i></a></li>
                  <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
                  <!-- <li><a href="#" class="small success button">Hire Me!</a></li> -->
                </ul>
                <!-- <ul class="menu pull-right pull-left-for-small-only">
                  <li><a href="#" class="small success button">Hire Me!</a></li>
                </ul> -->
              </div> <!-- /.top-bar-right -->

            </div> <!-- /#top-bar-2 -->
          </div> <!-- /#responsive-menu -->
        </div> <!-- /.sticky -->
      </nav>
    </div> <!-- /#section-header -->
    {else}
      {* default header/navigation bar *}
    {/if}

    <!-- | Main Content Section | -->
    <div id="section-main">
