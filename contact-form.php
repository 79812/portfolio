<!DOCTYPE html>
<html lang="en" >

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
      <li class="pushy-link"><a href="index.php">Homepage</a></li>
      <li class="pushy-link"><a href="aboutpage.php">About</a></li>
      <li class="pushy-link"><a href="contact.php">Contact</a></li>
      <li class="pushy-link"><a href="projects.php">Projects</a></li>
    </ul>
  </div>
</nav>

<form action="contact-form.php" method="POST">
<!-- Site Overlay -->
<div class="site-overlay"></div>

  <div class="jumbotron bg-danger">
    <div class="container">
      <h1 class="display-4"> </h1>
      <a href="/portfolio/nl/contact-form.php" class="language btn btn-dark">NL</a>
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
            <h3><b>Contact form:</b></h3></br>
            <fieldset>

              <legend>Form</legend>
              <label>First name*</label></br>
              <input type="text" name="firstName" placeholder="Enter your first name"/></br></br>

              <label>Insertion</label></br>
              <input type="text" name="insertion" placeholder="Enter your insertion name"/></br></br>
        
              <label>Last name*</label></br>
              <input type="text" name="lastName" placeholder="Enter your last name"/></br></br>
        
              <label>Message Title*</label></br>
              <textarea name="messageTitle" placeholder="Your message title goes here..."></textarea></br></br>

              <label>Message*</label></br>
              <textarea name="message" placeholder="Your message goes here..."></textarea></br></br>
        
              <label>Email*</label></br>
              <input type="text" name="email" placeholder="Enter your email"></input></br></br>

              <input class="btn btn-dark" type="submit" name="save" value="Send"/>

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
