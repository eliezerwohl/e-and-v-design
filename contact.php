<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon"  href="/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/main.min.css">
    <title>E and V Design | Contact Us</title>
    <meta name="Description" content='E and V Design is a web design and development group that offers a range of website services. Contact us for more information'>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110468142-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-110468142-1');
      </script>
  </head>
  <body id="page">
    <nav class="navbar nav  navbar-default scrollNav navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a  id="homeButton" class="navbar-brand" href="/">E & V <img alt="logo" id="brand-logo"  src="img/logo.png"> Design</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/services.php">Services</a></li>
            <li><a href="/projects.php">Projects</a></li>
            <li><a href="/contact.php">Contact</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div id ="main">
      <div id="contact" class="container">
        <h1>Contact</h1>
        <div class="col-md-8 col-md-offset-2">
          <p>As a local design company we enjoy getting to know our clients and work to create websites that reflect your business’ unique needs. With a background in User Experience and Information Science we specialize in balancing business and customer needs along with cutting edge development and coding. Contact us today!</p>
          <div>
            <form name="contactform" method="post" action="/form">
              <div class="contact-container">
                <div class="col-sm-6">
                  <input  id="name" placeholder="name" class="col-xs-12">
                </div>
                <div class="col-sm-6">
                  <input id="email" placeholder="email" class="col-xs-12">
                </div>
              </div>
              <div class="contact-container">
                <div class="col-sm-12">
                  <textarea  id="message" placeholder="message" rows="8" class="col-xs-12"></textarea>
                </div>
              </div>
              <div class="contact-container">
                <div class="col-sm-12 text-center">
                  <div class="message text-center"></div>
                                  <input id="location" type="hidden" name="location" value="contact page">
                  <button id="submit" type="submit" class="btn btn-md btn-default">
                  Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php require 'footer.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/contact.min.js"></script>
  </body>
</html>
