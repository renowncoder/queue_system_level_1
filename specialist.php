<?php

include 'config.php';

  if (isset($_GET['delete_visit'])) {
      $delete_visit_id = $_GET['delete_visit'];
      $delete_visit = "DELETE FROM visits WHERE id='$delete_visit_id'";
      $run_delete = $mysqli->query($delete_visit);

      if ($run_delete) {
          $msg = 'Client has been successfully deleted!';
          $msgClass = 'alert-success';
      } else {
          $msg = 'Something went wrong, time to check Stack Overflow!';
          $msgClass = 'alert-success';
      }
  }

include 'partials/specialist_header.php';
?>
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
            <th scope="col">Visits Reason</th>
            <th scope="col">Mark as Completed</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $i = 0;
          $get_visits = 'SELECT * FROM visits';
          $run_visits = $mysqli->query($get_visits);

          while ($row_visits = $run_visits->fetch_assoc()) {
              $id = $row_visits['id'];
              $client_id = $row_visits['client_id'];
              $client_name = $row_visits['name'];
              $reason = $row_visits['reason'];
              ++$i; ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $client_name; ?></td>
            <td><?php echo $reason; ?></td>
            <td><a href="specialist.php?delete_visit=<?php echo $id; ?>">Complete</a></td>
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
