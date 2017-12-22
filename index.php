<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans+Narrow|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <title>E and V Design | NJ Web Development</title>
    <meta name="Description" content='E and V Design offers web development services, including design, SEO, hosting, development, and more.  Located in Edison, NJ'>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110468142-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110468142-1');
    </script> -->

  </head>
  <body id="front">
    <nav class="navbar nav  navbar-default topNav navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a  id="homeButton" class="navbar-brand brandHide" href="#home">E and V Design</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li ><a>Services</a></li>
            <li ><a>Projects</a></li>
            <li ><a>Contact</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div class="welcomeBackground">
      <div class="welcomeDiv">
        <div class="child">
          <h1>E and V <span style="display: block; margin-top: 30px;">Design</span>
          </h1>
          <img class="center-text" src="img/logo.png">
        </div>
      </div>
    </div>
    <!--   tools used side projects  social contact -->
    <div id="main">
      <div id="aboutUs" class="container gray">
        <div  class="text-center col-sm-12">
          <h2>About</h2>
        </div>
        <div class="contentContainer col-md-8 col-md-offset-2">
          <p>
            We build unique custom sites for you and your business with an emphasis on relationships. We believe that design is a relationship not only between your website and your customers but between us during the design and development process. That’s why we take the time to talk to our clients and are not afraid of working out the details of a project. Our goal is for you and your business to have a website that reflects your personal style while also appealing to your user base. The way to do that is to include in the design conversation.
          </p>
        </div>
      </div>
      <div class="container text-center gray">
        <div class="col-sm-12">
          <h2>Services</h2>
        </div>
        <div class="col-sm-12 service">
          <div class="col-md-4">
            <img src="img/service-design.png">
            <p>Design</p>
          </div>
          <div class="col-md-4">
            <img src="img/service-dev.png">
            <p>Development</p> 
          </div>
          <div class="col-md-4">
            <img src="img/service-seo.png">
            <p>SEO</p>
          </div>
        </div>
      </div>
      <div id="clients-say" class="container text-center">
        <div id="aboutUs" class="container">
          <div class="text-center col-sm-12">
            <h2>Clients Say...</h2>
          </div>
          <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="col-sm-8 col-sm-offset-2">
                    <p>Homsar's most distinct characteristic is his unusual manner of speaking, which has varied over time. His tone of voice is generally quite exaggerated, and he often begins sentences by wailing "DAaAAaaAAaaAAaa!". His speech tends to range from perfectly normal English to often random and disconnected phrases that have little to no connection to the scene.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-8 col-sm-offset-2">
                    <p>Homsar's most distinct characteristic is his unusual manner of speaking, which has varied over time. His tone of voice is generally quite exaggerated, and he often begins sentences by wailing "DAaAAaaAAaaAAaa!". His speech tends to range from perfectly normal English to often random and disconnected phrases that have little to no connection to the scene.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="col-md-8 col-md-offset-2">
                   <p>Hsmsar's most distinct characteristic is his unusual manner of speaking, which has varied over time. His tone of voice is generally quite exaggerated, and he often begins sentences by wailing "DAaAAaaAAaaAAaa!". His speech tends to range from perfectly normal English to often random and disconnected phrases that have little to no connection to the scene.</p>
                  </div>
                </div>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="contact" class="container text-center">
        <div class="col-sm-12">
          <h2>Contact</h2>
        </div>
        <div class="contentContainer col-md-8 col-sm-12 col-md-offset-2">
          <form name="contactform" method="post" action="/form.php">
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
                <button id="submit" type="submit" class="btn btn-md btn-default">
                Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer class="text-center">
      &copy; <?php echo date("Y"); ?> E and V Design.  All rights reserved.
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>

