    </div> <!-- /#section-main -->

    <!-- | Footer Section | -->
    <div id="section-footer">
      <footer class="footer" style="padding: 2rem 0; background: #e6e6e6;">
        <div class="row">
          <div class="columns small-12 medium-6 large-6">
            <h6>Contact Me</h6>
            <form action="#" method="post">
              <div class="row">
                <div class="columns small-12 medium-6 large-6">
                  <label for="firstname">* First Name:
                    <input id="firstname" name="firstnamename" type="text" placeholder="First Name" required>
                  </label>
                </div> <!-- /.column -->
                <div class="columns small-12 medium-6 large-6">
                  <label for="lastname">Last Name:
                    <input id="lastname" name="lastname" type="text" placeholder="Last Name">
                  </label>
                </div> <!-- /.column -->
              </div> <!-- /.row -->
              <div class="row">
                <div class="columns small-12 medium-12 large-12">
                  <label for="email">* Email:
                    <input id="email" name="email" type="email" placeholder="someone@example.com" required>
                  </label>
                </div> <!-- /.column -->
              </div> <!-- /.row -->
              <div class="row">
                <div class="column small-12 medium-12 large-12">
                  <label for="message">* Message:
                    <textarea id="message" name="message" placeholder="Message..." required></textarea>
                  </label>
                </div> <!-- /.column -->
              </div> <!-- /.row -->
              <div class="row">
                <div class="column small-12 medium-12 large-12">
                  <input id="submit" class="expanded button" name="submit" type="submit" value="Send">
                </div> <!-- /.column -->
              </div> <!-- /.row -->
            </form>
          </div> <!-- /.column -->
          <div class="columns small-12 medium-3 large-3">
            <h6>Affiliates</h6>
            <ul class="vertical medium-vertical menu">
              <li><a href="#">DigitalOcean</a></li>
              <li><a href="#">Freshbooks</a></li>
              <li><a href="#">Namecheap</a></li>
            </ul>
          </div> <!-- /.column -->
          <div class="columns small-12 medium-3 large-3">
            <h6>Follow Me</h6>
            <ul class="vertical medium-vertical menu">
              <li><a href="#"><i class="fa fa-lg fa-facebook"></i> /jbrauerwebdesign</a></li>
              <li><a href="#"><i class="fa fa-lg fa-twitter"></i> @jordbrauer</a></li>
              <li><a href="#"><i class="fa fa-lg fa-github"></i> @jordanbrauer</a></li>
              <li><a href="#"><i class="fa fa-lg fa-codepen"></i> @jordanbrauer</a></li>
              <li><a href="#"><i class="fa fa-lg fa-linkedin"></i> /jordanbrauer</a></li>
            </ul>
          </div> <!-- /.column -->
        </div> <!-- /.row -->
        <div class="row column buffer-m-t-32" style="font-size: 12px">
          <ul class="horizontal menu pull-left">
            <li class="subheader">jBrauer Web Design &amp; Development &copy; 2016</li>
          </ul>
          <ul class="horizontal menu pull-right">
            <li><a href="#">Affiliates</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
          <span class="clearfix"></span>
        </div> <!-- /.row -->
      </footer>
    </div> <!-- /#section-footer -->

    <!-- | External Scripts | -->
    <script type="text/javascript" src="js/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/vendor/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="js/vendor/lodash/lodash.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-cookie/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-autocomplete/jquery.autocomplete.min.js"></script>
    <!-- <script type="text/javascript" src="js/jbrauer/jbrauer.js"></script> -->
    <script type="text/javascript" src="js/foundation/foundation.js"></script>
    <!-- <script type="text/javascript" src="js/foundation/plugins/foundation.sticky.js"></script> -->
    <!-- <script src="https://use.fontawesome.com/c477074d77.js"></script> -->

    <!-- | Internal Script | -->
    <script type="text/javascript">
    // initalize foundation.
    $(document).foundation();

    // declare variables.
    var $window = $(window);
        $top_bar = $('.top-bar'),
        $menu_btn = $('#responsive-menu-btn');

    // top bar sticky shrink class toggle.
    // $top_bar.on('sticky.zf.stuckto:top', function() {
    //   var $this = $(this);
    //
    //   $this.addClass('shrink');
    // }).on('sticky.zf.unstuckfrom:top', function() {
    //   var $this = $(this);
    //
    //   $this.removeClass('shrink');
    // })

    function minifyLogo()
    {
      var $top_bar_logo = $('.top-bar-logo'),
          $hire_btn = $('#btn-hire'),
          $pos_y_win = $window.scrollTop();

      if ($pos_y_win >= 471) {
        $hire_btn.removeClass('hide');
        $top_bar_logo.removeClass('hide');
      } else {
        $hire_btn.addClass('hide');
        $top_bar_logo.addClass('hide');
      }

      // test log.
      // console.log('Window Position: ' + $pos_y_win);
    }

    $(window).on('scroll', function(){
      minifyLogo();
    });

    // top bar responsive menu button context toggle.
    $menu_btn.on('click', function(){
      $this = $(this);

      $this.toggleClass('alert').promise().done(function()
      {
        if ($this.hasClass('alert')) {
          $this.html('<i class="fa fa-md fa-times"></i> Close');
        } else {
          $this.html('<i class="fa fa-md fa-bars"></i> Menu');
        }
      });
    });
    </script>
  </body>
</html>
