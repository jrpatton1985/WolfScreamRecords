<!DOCTYPE html
          PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="en-US"
      lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wolf Scream Records | Release</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css?<?php echo time(); ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/img/favicon-32x32.png">
  </head>
  <body>

    <header id="navi">
    </header>

    <section class="hero">
      <div class="container">
        <h1>Music</h1>
        <div class="background-image" style="background-image: url(../assets/img/bg_main_bw.png); opacity: 0.25;"></div>
        <div class="grid">
        </div>
      </div>
    </section>

    <footer>
      <p>&copy; Wolf Scream Records <span id="year">&nbsp;</span></a></p>
      <ul>
        <li><a href="http://www.facebook.com/wolfscreamrecords/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <li><a href="http://www.instagram.com/wolfscreamrecords/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
        <li><a href="https://soundcloud.com/wolf-scream-records/" target="_blank"><i class="fa fa-soundcloud fa-2x"></i></a></li>
      </ul>
    </footer>

    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script>
    <script src="https://d3js.org/d3.v4.js"></script>
    <script>
        ;(function() {
            // Initialize
            var bLazy = new Blazy();
            setTimeout(bLazy.revalidate, 100);
        })();
    </script>
    <script src="../assets/js/main.js?<?php echo time(); ?>"></script>
    <script src="../assets/js/release.js?<?php echo time(); ?>"></script>
    <script src="../assets/js/buildReleases.js?<?php echo time(); ?>"></script>
  </body>
</html>
