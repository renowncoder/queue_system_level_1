<?php

include 'config.php';

  if (isset($_GET['delete_client'])) {
      $delete_client_id = $_GET['delete_client'];
      $delete_client = "DELETE FROM queue WHERE id='$delete_client_id'";
      $run_delete = mysqli_query($mysqli, $delete_client);

      if ($run_delete) {
          $msg = 'Client has been successfully deleted!';
          $msgClass = 'alert-success';
      } else {
          $msg = 'Something went wrong, time to check Stack Overflow!';
          $msgClass = 'alert-success';
      }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Queue Registration system | Specialist</title>

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
    <h1 class="display-4">SPECIALISTS PAGE</h1>
    <p class="lead">Here you can view and "complete" client related activity</p>
  </div>

  <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Number</th>
            <th scope="col">Client name</th>
            <th scope="col">Mark as Completed</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $i = 0;
          $get_client = 'SELECT * FROM queue';
          $run_client = mysqli_query($mysqli, $get_client);

          while ($row_client = mysqli_fetch_array($run_client)) {
              $client_id = $row_client['id'];
              $client_name = $row_client['client_name'];
              ++$i; ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $client_name; ?></td>
            <td><a href="specialist.php?delete_client=<?php echo $client_id; ?>">Complete</a></td>
          </tr>
          <?php
          } ?> 
        </tbody>
      </table>
      <p class="mt-5 mb-3 text-center">
        <a href="index.php">Go Back</a>
      </p>
  </div>
</body>
</html>
