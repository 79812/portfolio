<!DOCTYPE html>
<html lang="nl" >

<head>

  <meta charset="UTF-8">
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/pushy.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="images/portfolio.ico"/>

</head>

<body>

<button class="menu-btn">&#9776;</button>

<!-- Pushy Menu -->
<nav class="pushy pushy-left">
  <div class="pushy-content">
    <ul>
      <li class="pushy-link"><a href="aboutpage.php">Over mij</a></li>
      <li class="pushy-link"><a href="contact.php">Contact</a></li>
      <li class="pushy-link"><a href="projects.php">Projecten</a></li>
    </ul>
  </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

  <div class="jumbotron bg-danger">
    <div class="container">
      <h1 class="display-4">Welkom!</h1>
      <p class="lead"> Welkom naar mijn portfolio waar je informatie kan vinden over mij, mijn projecten en mijn contactgegevens.</p>
      <a href="/portfolio/index.php" class="language btn btn-dark">EN</a>
    </div>
  </div>

  <!-- particles.js container -->
  <div id="particles-js"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-4 mt-4">
        <div class="card bg-danger">
          <div class="card-body">
            <h4>Over mij!</h4>
            <p class="lead">Informatie over mij</p>
            <p>Ik ben André Arguello en ik ben een web developer dat houdt van websites. Ik kom uit Spanje. </br> Hello </br></br></p>
            <a href="aboutpage.php" class="btn btn-dark">Over mij</a>
          </div>
        </div>
      </div>      

      <div class="col-md-4 mt-4">
        <div class="card bg-danger">
          <div class="card-body">
            <h4>Contact</h4>
            <p class="lead">Contactgegevens</p>
            <p><b>Naam:</b> André Arguello</br><b>Telefoonnummer:</b> 0629384239 </br><b>Email:</b> andrearguello@fakemail.com</br><b>Adres:</b> Deltaweg 205, 5709 AB Helmond</p>
            <a href="contact.php" class="btn btn-dark">Contact</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-4">
        <div class="card bg-danger">
          <div class="card-body">
            <h4>Projecten</h4>
            <p class="lead">Mijn projecten</p>
            <p>Hier zijn sommige of mijn projecten: </br> Radiogaga </br> Gameworld </br> DC Heroes</p>
            <a href="projects.php" class="btn btn-dark">Mijn projecten</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

  <?php
    include("inc/script.php")
  ?>

</html>    