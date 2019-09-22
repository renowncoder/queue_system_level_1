<?php
  include 'partials/index_header.php';
?>
<body>
  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Queue registration System</h1>
        <p class="lead text-muted">
          This system is built with PHP and MySQL.
        </p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div class="card-body">
                <p class="card-text">Register Page</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a 
                      type="button" 
                      class="btn btn-sm btn-outline-secondary" 
                      href="register.php">View
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div class="card-body">
                <p class="card-text">Queue Page</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a 
                      type="button" 
                      class="btn btn-sm btn-outline-secondary" 
                      href="queue.php">View
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div class="card-body">
                <p class="card-text">Specialist Page</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a 
                      type="button" 
                      class="btn btn-sm btn-outline-secondary" 
                      href="specialist.php">View
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted">
    <div class="container">
      <p>Queue System in PHP and MySQL</p>
      <p>Visit my <a href="https://github.com/dimacellist">github</a></p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
</body>
</html>
