<?php

include 'includes/dbh.inc.php';
include 'includes/Client.inc.php';
include 'includes/viewclient.inc.php';
include 'partials/queue_header.php';
?>

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
            <h1 class="card-title pricing-card-title">
              <?php
                $user_count = new ViewClient();
                $user_count->showAllClientCount();
              ?>
            </h1>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Next in Line:</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">
              <?php
                $users = new ViewClient();
                $users->showAllClients();
              ?>
            </h1>
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
