<!DOCTYPE html
          PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="en-US"
      lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wolf Scream Records | Contact Demo Submission</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css?<?php echo time(); ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/img/favicon-32x32.png">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/form.js"></script>
  </head>
  <body>

    <header id="navi">
    </header>

    <section class="hero" style="min-height: 700px;">
      <div class="background-image" style="background-image: url(../assets/img/bg_main.png)"></div>

      <div class="contact">
        <div id="error_message" style="width:100%; height:100%; display:none; ">
          <h4>Error</h4>
          <p>Sorry there was an error sending your message.</p>
        </div>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
          <h2>Thank you for your submission!</h2>
          <p>We will review and reply as soon as we're able.</p>
        </div>

        <div id="contact_title">
          <h3 class="title">Contact Us</h3>
          <p>For demo consideration, please fill out form and include a dropbox or soundcloud link in the body of the email.</p>
        </div>

        <form id="reused_form">
          <label><i class="fa fa-user" aria-hidden="true">&nbsp;</i>Name:</label>
          <input name="name" placeholder="Enter Name">
          <br/>
          <label><i class="fa fa-envelope" aria-hidden="true">&nbsp;</i>Email address:</label>
          <input name="email" placeholder="Enter Email">
          <br/>
          <label><i class="fa fa-comment" aria-hidden="true">&nbsp;</i>Message:</label>
          <textarea rows="5" cols="20" name="message" placeholder="Enter Message"></textarea>
          <br/>
          <button class="btn" type="submit" name="submit">Submit</button>
        </form>
      </div>
    </section>

    <footer>
      <p>&copy; Wolf Scream Records <span id="year">&nbsp;</span></a></p>
      <ul id="footer-social">
      </ul>
    </footer>
    <script src="../assets/js/main.js?<?php echo time(); ?>"></script>
  </body>
</html>
