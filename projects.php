<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <title>Projects</title>
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
      <li class="pushy-link"><a href="index.php">Homepage</a></li>
      <li class="pushy-link"><a href="contact.php">Contact</a></li>
      <li class="pushy-link"><a href="aboutpage.php">About</a></li>
    </ul>
  </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

  <div class="jumbotron bg-danger">
    <div class="container">
      <h1 class="display-4"> </h1>
      <a href="/portfolio/nl/projects.php" class="language btn btn-dark">NL</a>
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
            <h4>These are my projects</h4>

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