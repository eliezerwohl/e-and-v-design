<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
<link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/main.css">
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
          <a  id="homeButton" class="navbar-brand" href="/testpage">E & V <img alt="logo" id="brand-logo"  src="img/logo.png"> Design</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/testpage/services.php">Services</a></li>
            <li><a href="/testpage/projects.php">Projects</a></li>
            <li><a href="/testpage/contact.php">Contact</a></li>
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
     <script type="text/javascript" src="js/testpage/contact.php.min.js"></script>
  </body>
</html>
