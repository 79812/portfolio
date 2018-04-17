<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <title>About</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/pushy.css">
  <link rel="stylesheet" type="text/css" href="css/style-about.css">
  <link rel="shortcut icon" href="images/portfolio.ico"/>

</head>

<body>

<button class="menu-btn">&#9776;</button>

<!-- Pushy Menu -->
<nav class="pushy pushy-left">
  <div class="pushy-content">
    <ul>
      <li class="pushy-link"><a href="index.php">Homepage</a></li>
      <li class="pushy-link"><a href="contact.php">Contact</a></li>
      <li class="pushy-link"><a href="projects.php">Projects</a></li>
    </ul>
  </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

  <div class="jumbotron bg-danger">
    <div class="container">
      <h1 class="display-4"> </h1>
      <a href="/portfolio/nl/aboutpage.php" class="language btn btn-dark">NL</a>
      <p class="lead"> </p>      
    </div>
  </div>

  <!-- particles.js container -->
  <div id="particles-js"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-6">
        <div class="card bg-secondary">
          <div class="card-body">
            <h4>Info about me</h4>
            <p class="lead">My name is André Arguello and im a web developer who likes to develop websites. I'm from Murcia, Spain. </br> My skills: Im good with PHP and CSS. </br> My grades are not the best at the moment but they will get better soon. </br> I have a VMBO-T certificate (Lower Vocational Education) and Im bilingual (Spanish and Dutch).
            </br></br>
            This is my Spotify playlist:</br></br>
            <iframe src="https://open.spotify.com/embed?uri=spotify:user:vlad_ducky:playlist:4V77z0XdBK9wJ9H8ZzyUmb" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe><div class="slide-image"><img class="image-size" name="slide"></br></div>
            </p>
            <a class="btn btn-dark" href="files/" download="cv.pdf">Download CV</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>

  <?php
    include("inc/script.php")
  ?>
  <?php
    include("inc/footer.php")
  ?>
  
</html>    
