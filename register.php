<?php

$msg = '';
$msgClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {
    include 'config.php';
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $reason = htmlspecialchars($_POST['reason']);

    if (!empty($email) && !empty($name) && !empty($reason)) {
        /*
         * We are checking if user entered valid email address
         */
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = 'Please, use valid email address';
            $msgClass = 'alert-danger';
        } else {
            /*
             * We are inserting initial client
             */
            $insert_client = "INSERT INTO clients (name, email) VALUES ('$name', '$email')";
            $run_client = $mysqli->query($insert_client);
            /*
             * We are searching for the last inserted ID
             */
            $find_last_client_id = 'SELECT last_insert_id()';
            $run_last_client_id = $mysqli->query($find_last_client_id);
            $get_last_client_id = mysqli_fetch_assoc($run_last_client_id);
            $last_id = implode($get_last_client_id);
            /*
             * We are searching for the client_id and inserting data into visits table
             */
            $insert_visit = "INSERT INTO visits (client_id, reason, name) VALUES ('$last_id', '$reason', '$name')";
            $run_visit = $mysqli->query($insert_visit);

            if ($run_client && $run_visit) {
                $msg = 'You have been successfully registered!';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Something went wrong, time to check Stack Overflow!';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        $msg = 'Please, kindly fill all fields';
        $msgClass = 'alert-danger';
    }
}

include 'partials/register_header.php';
?>
<body class="text-center">
  <div class="container">
    <?php if ($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
      <form class="form-signin" action="" method="POST">
        <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
        <label for="name" class="sr-only">Your Name</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          class="form-control" 
          placeholder="Your Name" 
          required autofocus
          value=<?php echo isset($_POST['name']) ? $name : ''; ?>
        ><br>
        <label for="email" class="sr-only">Your Email</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          class="form-control" 
          placeholder="Your Email" 
          required autofocus
          value=<?php echo isset($_POST['email']) ? $email : ''; ?>
        ><br>
        <label for="reason" class="sr-only">Your Visits Reason</label>
        <input 
          type="reason" 
          id="reason" 
          name="reason" 
          class="form-control" 
          placeholder="Your Visits Reason" 
          required autofocus
          value=<?php echo isset($_POST['reason']) ? $reason : ''; ?>
        ><br>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>
      </form>
      <p class="mt-5 mb-3 text-muted">
        <a href="index.php">Go Back</a>
      </p>
    </div>
  </body>
</html>
