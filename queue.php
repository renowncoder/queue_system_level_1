<?php

include 'config.php';

  function getClients()
  {
      global $mysqli;

      $get_clients = 'SELECT * FROM clients ORDER BY 1 ASC LIMIT 0,1';
      $run_clients = mysqli_query($mysqli, $get_clients);
      while ($row_clients = mysqli_fetch_array($run_clients)) {
          $client_name = $row_clients['name'];
          echo "<h1 class='card-title pricing-card-title'>$client_name</h1>";
      }
  }

      $get_clients = 'SELECT * FROM clients';
      $run_clients = mysqli_query($mysqli, $get_clients);
      $count_clients = mysqli_num_rows($run_clients);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Queue Registration system | Queue</title>

    <!-- Bootstrap core CSS -->
    <link 
      rel="stylesheet" 
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"
    >
    <link 
      rel="stylesheet" 
      href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" 
      integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" 
      crossorigin="anonymous"
    >

    <!-- Custom styles for this website -->
    <link href="css/queue.css" rel="stylesheet">
  </head>
<body>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">QUEUE INFORMATION</h1>
    <p class="lead">Here you can view total number of clients waiting, including next in line.</p>
  </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Total People Waiting:</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo $count_clients; ?></h1>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Next in Line:</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php getClients(); ?></h1>
          </div>
        </div>
      </div>
      <p class="text-center text-muted">
        <a href="index.php">Go Back</a>
      </p>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  </body>
</html>
