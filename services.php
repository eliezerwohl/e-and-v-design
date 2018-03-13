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
    <title>E and V Design | Services</title>
    <meta name="Description" content='E and V Design offers a wide-range of web development services including website design, coding, SEO, and User Experience Research. We work with individuals, businesses, and non-profits to create website experiences.'>
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
          <a  id="homeButton" class="navbar-brand" href="/">E & V <img alt="logo" id="brand-logo"  src="img/logo.png"> Design</a></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/services.php">Services</a></li>
            <li><a href="/projects.php">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div id="services">
      <div id="main">
        <div id="design" class="row">
          <div class="col-md-8 col-md-offset-2 section">
            <h1>Design and Development Services</h1>
            <div class="img-holder">
              <img src="img/service-design-green.png" class="img-responsive" alt="design symbol">
            </div>
            <h3>Basic Package</h3>
            <p>Did you buy a Wordpress theme and it just won’t work? Do you have a Wordpress theme and it’s broken? Out of date? Hacked? We can help! With this package you’ll send us the
              theme, all your content (text and photos), and hosting information. Then we’ll get your site up and running
            </p>
            <h3>Entrepreneur Package</h3>
            <p>An easy start to your new business, non-profit, or solo practice. Simply pick a layout and colors, supply us
              with your text and photos and we’ll do the rest. Soon you’ll be up and running with a customized WP site
              where you can edit photos and text easily through the dashboard
            </p>
            <h3>Premiere package</h3>
            <p>Have specific needs for your brand and business? We will custom build a site to fit your business needs.
              We will work with you to source content, as well as, help organize all information needed for your site. You
              approve layout, colors, and fonts before coding of site. This package includes 5 custom pages, personalized
              favicon, sourcing of stock photos and icons, content editing, a custom 404 page, SEO
            </p>
            <h3>E-commerce Package</h3>
            <p>Starting an online business? Time for a redesign? Let’s integrate the best ecommerce solutions into your
              WordPress site and help your business grow
            </p>
            <h3>All packages include</h3>
            <p>Mobile responsive coding, SEO. Google Analytics, pushing up your live site, and a 1 hour training session</p>
          </div>
        </div>
        <div class="color-background">
          <div id="ux" class="row">
            <div class="col-md-8 col-md-offset-2 section">
              <h2>UX Services</h2>
              <div class="img-holder">
                <img src="img/service-ux-green.png" class="img-responsive" alt="ux symbol">
              </div>
              <p>Services for startups and businesses include Usability Reports, Prototyping, User Testing, Content Audit,
                Competitive Analysis
              </p>
            </div>
          </div>
        </div>
        <div id="dev" class="row">
          <div class="col-md-8 col-md-offset-2 section">
            <h2>Development</h2>
            <div class="img-holder">
              <img src="img/service-dev-green.png" class="img-responsive" alt="dev symbol">
            </div>
            <p>We offer hosting and retainer packages for websites designed by our team. Hosting plans
              include maintenance services to keep your site up and running smoothly, while Retainer Plans free your
              time up from updating content.
            </p>
            <p>
              Have another development need? Contact us and let’s explore the solutions
            </p>
          </div>
        </div>
        <div class="color-background">
          <div id="seo" class="row">
            <div class="col-md-8 col-md-offset-2 section">
              <h2>SEO</h2>
              <div class="img-holder">
                <img src="img/service-seo-green.png" class="img-responsive" alt="seo symbol">
              </div>
              <p>All our sites are Search Engine Optimized and we’ll show you how to properly tag your content in WordPress
                so it can be easily cataloged by Google. We also will connect your site to Google Analytics so you can follow
                how your customers are finding and using your site
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require 'footer.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/location.min.js"></script>
  </body>
</html>
