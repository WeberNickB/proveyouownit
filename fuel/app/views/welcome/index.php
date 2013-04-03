   <script>
      !function ($) {
      $(function(){
      // carousel demo
      $('#this-carousel-id').carousel()
      })
      }(window.jQuery)
    </script>
 
    <div id="this-carousel-id" class="carousel slide">

      <div class="carousel-inner">
        <div class="item active">
          <a href="">
            <div id="logo">
              <?php echo Asset::img('1.jpg'); ?>
            </div>
          </a>
          <div class="carousel-caption">
            <p>The Devils</p>
            <p>
              <a href="">Devils GoT style</a>
            </p>
          </div>
        </div>
        <div class="item">
          <a href="">
            <?php echo Asset::img('2.gif'); ?>
          </a>
          <div class="carousel-caption">
            <p>First Logo</p>
            <p>
              <a href="">Option One</a>
            </p>
          </div>
        </div>
        <div class="item">
          <a href="">
            <?php echo Asset::img('3.gif'); ?>
          </a>
          <div class="carousel-caption">
            <p>Second Logo</p>
            <p>
              <a href="">Option Two</a>
            </p>
          </div>
        </div>        
      </div>

        <!--next and previous controls here href values must reference the id for this carousel -->
      <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
    </div>

    <div class="row">
      <div class="span4">
        <h2>What is it...</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p>
          <a class="btn" href="#">View details &raquo;</a>
        </p>
      </div>
      <div class="span4">
        <h2>Sign Up!</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p>
          <a class="btn" href="#">View details &raquo;</a>
        </p>
      </div>
      <div class="span4">
        <h2>Partners.</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p>
          <a class="btn" href="#">View details &raquo;</a>
        </p>
      </div>
    </div>

  <!-- /container -->

