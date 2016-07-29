<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jordan Brauer | Welcome</title>
    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/jbrauer.css">
    <link rel="stylesheet" type="text/css" href="js/vendor/jquery-autocomplete/styles.css">
    <link rel="stylesheet" type="text/css" href="css/foundation.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/shame.css">
  </head>
  <body>
    <!-- navigation -->
    <div class="row expanded">
      <div class="top-bar" style="box-shadow: 0px 4px 16px #CCC; -webkit-transition: 1s ease all;">
        <div class="jb-wrapper" style="margin: 0 auto; max-width: 1200px; width: auto;">
          <div class="row expanded" style="margin-bottom: 16px;">
            <div class="column">
              <div class="top-bar-title">
                <img class="logo-topbar" data-interchange="[img/logo/jbrauer/svg/jbrauer-alt-logo.svg, small], [img/logo/jbrauer/svg/jbrauer-logo.svg, medium], [img/logo/jbrauer/svg/jbrauer-logo.svg, large]" alt="jordan brauer logo" src="img/logo/jbrauer/svg/jbrauer-alt-logo.svg">
                <div class="subheader" style="font: 12px consolas, monospace">Web Design &amp; Development</div> <!-- /.subheader -->
              </div> <!-- /.top-bar-title -->
              <ul class="menu float-right">
                <!-- <li><a href="#"><i class="fa fa-md fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-md fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-md fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-md fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-md fa-codepen"></i></a></li> -->
                <li><a class="small success button" href="#">Hire Me!</a></li>
              </ul>
            </div> <!-- /.column-->
          </div> <!-- /.row -->
          <div class="row expanded">
            <div class="column">
              <div data-responsive-toggle="responsive-menu-1" data-hide-for="medium">
                <button id="menu-btn" class="small button" data-toggle style="margin-bottom: 8px;"><i class="fa fa-md fa-bars"></i> Menu</button>
              </div><!-- /data-responsive-toggle -->
              <div id="responsive-menu-1">
                <div class="top-bar-left">
                  <ul class="dropdown menu vertical medium-horizontal" data-dropdown-menu>
                    <li class="active"><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Resume</a></li>
                  </ul>
                </div> <!-- /.top-bar-left -->
                <div class="top-bar-right">
                  <ul class="menu">
                    <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-codepen"></i></a></li>
                    <!-- <li><a class="tiny success button" href="#">Hire Me!</a></li> -->
                  </ul>
                </div> <!-- /.top-bar-right-->
              </div> <!-- /#responsive-menu-1 -->
            </div> <!-- /.column -->
          </div> <!-- /.row -->
        </div>
      </div> <!-- /.top-bar -->
      <!--
      <div class="row expanded">
        <nav aria-label="You are here:" role="navigation">
          <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
          </ul>
        </nav>
      </div>
      -->
    </div><!-- /.row -->
    <!-- /navigation -->

    <!-- main content -->
    <div class="row column" style="background: #0b9;">
      <!-- <p>hello</p> -->
    </div>

    <!-- footer -->
    <div class="row expanded">
    </div>

    <!-- scripts -->
    <script type="text/javascript" src="js/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/vendor/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="js/vendor/lodash/lodash.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-cookie/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-autocomplete/jquery.autocomplete.min.js"></script>
    <!-- <script type="text/javascript" src="js/jbrauer/jbrauer.js"></script> -->
    <script type="text/javascript" src="js/foundation/foundation.js"></script>
    <!-- <script src="https://use.fontawesome.com/c477074d77.js"></script> -->
    <script type="text/javascript">
      $(document).foundation();
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
      var $menu_btn = $('#menu-btn');

      $menu_btn.on('click', function(){
        if (!$menu_btn.hasClass('alert')) {
          $menu_btn.addClass('alert')
                   .html('<i class="fa fa-md fa-times"></i> Close');
        } else if ($menu_btn.hasClass('alert')) {
          $menu_btn.removeClass('alert')
                   .html('<i class="fa fa-md fa-bars"></i> Menu');
        }
      });
    });
    </script>
  </body>
</html>
