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
$selectSQL = "SELECT projectTitle, projectDescription, projectImage, projectCategory FROM projects ";

$result = $conn->query($selectSQL);
?>


</head>

<body>

<button class="menu-btn">&#9776;</button>

<!-- Pushy Menu -->
<nav class="pushy pushy-left">
  <div class="pushy-content">
    <ul>
      <li class="pushy-link"><a href="index.php">Homepage</a></li>
      <li class="pushy-link"><a href="#">Contact</a></li>
      <li class="pushy-link"><a href="#">Projects</a></li>
    </ul>
  </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

  <div class="jumbotron bg-danger">
    <div class="container">
      <h1 class="display-4"> </h1>
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
              <table>
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Img</th>
                    <th>Category</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  foreach($result as $k => $v)
                  {
                    ?>
                      <tr>
                        <td><?php echo $v['projectTitle']; ?></td>
                        <td><?php echo $v['projectDescription']; ?></td>
                        <td><?php echo $v['projectImage']; ?></td>
                        <td><?php echo $v['projectCategory']; ?></td>
                      </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
              <p class="lead"></br></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/particle.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <!-- stats.js lib -->
  <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/pushy.min.js"></script>

</body>
</html>
