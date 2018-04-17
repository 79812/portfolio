<!DOCTYPE html>
<html lang="nl" >

<head>

  <meta charset="UTF-8">
  <title>Projecten</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/pushy.css">
  <link rel="stylesheet" type="text/css" href="css/style-projects.css">
  <link rel="shortcut icon" href="images/portfolio.ico"/>

<?php
  include("inc/databaseconn.php")
?>

<?php
  include("inc/projects.php")
?>

</head>

<body>

<button class="menu-btn">&#9776;</button>

<!-- Pushy Menu -->
<nav class="pushy pushy-left">
  <div class="pushy-content">
    <ul>
      <li class="pushy-link"><a href="index.php">Homepagina</a></li>
      <li class="pushy-link"><a href="contact.php">Contact</a></li>
      <li class="pushy-link"><a href="aboutpage.php">Over mij</a></li>
    </ul>
  </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

  <div class="jumbotron bg-danger">
    <div class="container">
      <h1 class="display-4"> </h1>
      <a href="/portfolio/projects.php" class="language btn btn-dark">EN</a>
      <p class="lead"> </p>      
    </div>
  </div>

  <!-- particles.js container -->
  <div id="particles-js"></div>

  <div class="container">
    <div class="ctnr-projects row">
      <div class="col-md-12 mt-6">
        <div class="card bg-secondary">
          <div class="ctnr-height card-body">
            <h4>Dit zijn mijn projecten</h4>

              <?php
              include("inc/fetchProjects.php")
              ?>
        
              <p class="lead"></br></p>
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