<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootcamp</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/video-js.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="container" class="tim">
      <header>
        <div class="container">
          <div class="header">
            <center>
              <h3>Bootcamp</h3>
            </center>  
          </div>
            <div class="jumbotron">
              <iframe src="http://www.youtube.com/embed/H_iRrXqfp5Q" frameborder="0"></iframe>     
            </div>
        </div>
      </header>

      <section class="form">
        <div class="container">
          <div class="row subscribe">
            <h2 id="description">Abboneer op onze nieuwsbrief!</h2>
            <div class="indicates-required"><span class="asterisk">*</span> Verplichte velden</div>
            <form id="signup" action="http://bootcampdekempen.elitetrainers.eu/index.php" method="get">
              <div class="col-md-6 col-sm-12">
                <label for="email" id="address-label">Voornaam</label>
                <input type="text" name="fname" id="fname">
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="email" id="address-label">Email*</label>
                <input type="text" name="email" id="email">
              </div>
              <div class="col-sm-12 buttonwrapper">
                <div class="progress-button">
                  <input type="submit" value="LET&#39;S GO" class="button">
                </div>
              </div>          
              <span class="response"></span>
            </form>    
          </div>
          <div class="row succes" style="display: none;"></div>
        </div>
      </section>

      <footer>
        <div class="container">
          <p>&copy; 2016 Bootcamp</p>
        </div>
      </footer>
    </div>
    
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>