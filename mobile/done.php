<?php session_start(); ?>
<!DOCTYPE html>
    <!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
    <html class="no-js" lang="en" >

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Privacy Notice</title>
      <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
      <link rel="stylesheet" href="../foundation-5.2.1/css/normalize.css">
      <link rel="stylesheet" href="../foundation-5.2.1/css/foundation.css">
      <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <!-- If you are using the gem version, you need this only -->
      <link rel="stylesheet" href="../css/dpn.css">
      <script src="../foundation-5.2.1/js/vendor/modernizr.js"></script>
    </head>
    <body>

      <!-- body content here -->
  <div class="row">
    <div class="large-12 columns">
     <!-- Navigation -->
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <h1>
              <a href="../demo.html">
                Digital Privacy Notice
              </a>
            </h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
      </nav>
    <!-- End Navigation -->
 
      <div class="row">
 
  <!-- Side Bar -->
        <div class="large-4 medium-4 small-12 columns text-center"> 
          <img src="../images/dpn-home.jpg">
        </div> 
    <!-- End Side Bar -->
 
 
    <!-- Thumbnails -->
        <div class="large-8 medium-8 columns"><br>
          <div class="row collapse panel callout radius">
            <div class="medium-4 large-3 columns">
                <p class="text-center"><b><i class="fa fa-thumbs-up" style="font-size: 9rem;"></i></b></p>
            </div>
			<div class="medium-8 large-9 columns">
				  <h4>Congratulations!!!</h4>
          <p><b>Your online notice of privacy practices is ready for review at : 
				  	<?php 
				  	  //echo "Tiny URL : <a href='http://".$_SESSION['tinyURL']."' target='_blank'>".$_SESSION['tinyURL']."</a><br>";
				  		//echo "Direct URL: <a href='http://".$_SESSION['directURL']."' target='_blank'>".$_SESSION['directURL']."</a><br>";
              echo "<a href='http://".$_SESSION['directURL']."' target='_blank'>".$_SESSION['directURL']."</a><br>";
				  	?>
				  </b></p>
          <p>You can right click and save the link as a HTML file or directly share the url. If you want to create another notice, <a href="javascript:history.go(-1)"><b>click here.</a></b></p>

            </div>
          </div>
          <div class="row whitespace-xsmall"><br>
 
            <div class="large-3 medium-3 small-6 columns">
              <img src="../images/your-rights.jpg" alt="Your Rights">
            </div>
 
            <div class="large-3 medium-3 small-6 columns">
              <img src="../images/your-choices.jpg" alt="Your Choices">
            </div>
 
            <div class="large-3 medium-3 small-6 columns">
              <img src="../images/our-uses.jpg" alt="Our Uses and Disclosures">
            </div>
 
            <div class="large-3 medium-3 small-6 columns">
              <img src="../images/our-resp.jpg" alt="Our Responsibilities">
            </div>
          </div>
 
    <!-- End Thumbnails -->

          </div>
        </div>
      </div>
 
 
    <!-- Footer -->
 
      <footer class="row">
        <div class="large-12 columns"><hr />
          <div class="row">
 
            <div class="large-6 columns">
            </div>
          </div>
        </div>
      </footer>
 
    <!-- End Footer -->
 
    </div>
  </div>
    
    

      <script src="../foundation-5.2.1/js/vendor/jquery.js"></script>
      <script src="../foundation-5.2.1/js/foundation.min.js"></script>
      <script src="../foundation-5.2.1/js/foundation/foundation.topbar.js"></script>
      <script>
        $(document).foundation();
      </script>
    </body>
    </html>
    <?php session_destroy(); ?>