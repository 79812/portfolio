<!DOCTYPE html>
<html lang="nl" >

<head>

  <meta charset="UTF-8">
  <title>Contact form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/pushy.css">
  <link rel="stylesheet" type="text/css" href="css/style-form.css">
  <link rel="shortcut icon" href="images/portfolio.ico"/>

<?php
  include("inc/form.php")
?>

</head>

<body>

<button class="menu-btn">&#9776;</button>

<!-- Pushy Menu -->
<nav class="pushy pushy-left">
  <div class="pushy-content">
    <ul>
      <li class="pushy-link"><a href="index.php">Homepagina</a></li>
      <li class="pushy-link"><a href="aboutpage.php">Over mij</a></li>
      <li class="pushy-link"><a href="contact.php">Contact</a></li>
      <li class="pushy-link"><a href="projects.php">Projecten</a></li>
    </ul>
  </div>
</nav>

<form action="contact-form.php" method="POST">
<!-- Site Overlay -->
<div class="site-overlay"></div>

  <div class="jumbotron bg-danger">
    <div class="container">
      <h1 class="display-4"> </h1>
      <a href="/portfolio/contact-form.php" class="language btn btn-dark">EN</a>
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
            <h3><b>Contact formulier:</b></h3></br>
            <fieldset>

              <legend>Form</legend>
              <label>Voornaam*</label></br>
              <input type="text" name="firstName" placeholder="Vul uw voornaam..."/></br></br>

              <label>Tussenvoegsel</label></br>
              <input type="text" name="insertion" placeholder="Vul uw tussenvoegsel..."/></br></br>
        
              <label>Achternaam*</label></br>
              <input type="text" name="lastName" placeholder="Vul uw achternaam..."/></br></br>
        
              <label>Onderwerp*</label></br>
              <textarea name="messageTitle" placeholder="Vul uw onderwerp..."></textarea></br></br>

              <label>Bericht*</label></br>
              <textarea name="message" placeholder="Vul uw bericht..."></textarea></br></br>
        
              <label>Emailadres*</label></br>
              <input type="text" name="email" placeholder="Vul uw email..."></input></br></br>

              <input class="btn btn-dark" type="submit" name="save" value="Sturen" />
              
              <?php
              echo $message;
              echo "<br/>";
              foreach($errormessages as $error)
              {
              echo $error;
              echo "<br/>";
              }              
              ?>
              
            </fieldset>
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
