<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sun Oct 11 2015 03:20:34 GMT+0000 (UTC) -->
<html data-wf-site="56195dafe7b2febb5f8202d6" data-wf-page="56195daf91391cbb5fab4df6">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/gritdev.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:300,regular,500"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
</head>
<body>
  <div class="w-nav navigation-bar" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
    <div class="w-container"><a class="w-nav-brand brand-link" href="index.php"><h1 class="brand-text">Gritdev</h1></a>
      <nav class="w-nav-menu navigation-menu" role="navigation">
        <a class="w-nav-link navigation-link" href="/index.php#Home">Home</a>
        <a class="w-nav-link navigation-link" href="/index.php#Services">Services</a>
        <a class="w-nav-link navigation-link" href="/index.php#Portfolio">Portfolio</a>
        <a class="w-nav-link navigation-link" href="/index.php#About">About</a>
        <a class="w-nav-link navigation-link" href="contact.php">Contact Us</a>
      </nav>
      <div class="w-nav-button hamburger-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="w-section section">
    <div class="w-container">
      <div class="section-title-group">
        <h2 class="section-heading centered">Contact us</h2>
        <div class="section-subheading center">in the message be sure to include the details of your project along with what graphic design services or logo design that will be needed. if you have a current website that needs any work (responsive, redesign) make sure to include the link for your site.&nbsp;WE LOOK FORWARD TO HEARING ABOUT YOUR INQUIRY.</div>
      </div>

      <div class="w-form form-wrapper">
        <form class="form" id="email-form" data-name="Email Form" method="post" action="contact.php">
          <input class="w-input form-field" id="Name" type="text" placeholder="Enter your name..." name="name" required="required" data-name="Name">
          <input class="w-input form-field" id="Email" type="email" placeholder="Enter your email..." name="email" required="required" data-name="Email">
          <input class="w-input form-field" id="Phone" type="text" placeholder="Enter your phone number..." name="phone" required="required" data-name="Phone">
          <textarea class="w-input form-field text-area" id="field-2" placeholder="Message" name="message" data-name="Field 2"></textarea>
          <input class="w-button button full-width" type="submit" value="Send message" name="emailform">
        </form>
      </div>


    </div>
  </div>
  <div>
  <?php
    include 'formtomail.php';
  ?>


  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>