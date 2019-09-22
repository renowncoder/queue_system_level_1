<?php

ini_set('display_errors', 1);

$msg = '';
$msgClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {
    include 'config.php';
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $reason = htmlspecialchars($_POST['reason']);

    if (!empty($email) && !empty($name) && !empty($reason)) {
        //Check email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = 'Please, use valid email address';
            $msgClass = 'alert-danger';
        } else {
            //Insert Initial Client
            $insert_client = "INSERT INTO clients (name, email) VALUES ('$name', '$email')";
            $run_client = mysqli_query($mysqli, $insert_client);
            //Get Last Inserted Client Id
            $find_last_client_id = 'SELECT last_insert_id()';
            $run_last_client_id = mysqli_query($mysqli, $find_last_client_id);
            $get_last_client_id = mysqli_fetch_assoc($run_last_client_id);
            $last_id = implode($get_last_client_id);
            //Insert into Visits
            $insert_visit = "INSERT INTO visits (client_id, reason, name) VALUES ('$last_id', '$reason', '$name')";
            $run_visit = mysqli_query($mysqli, $insert_visit);

            if ($run_client && $run_visit) {
                $msg = 'You have been successfully registered!';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Something went wrong, time to check Stack Overflow!';
                $msgClass = 'alert-success';
            }
        }
    } else {
        $msg = 'Please, kindly fill all fields';
        $msgClass = 'alert-danger';
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

    <title>Queue Registration system | Register</title>

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
    <link href="css/client.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="container">
    <?php if ($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
      <form class="form-signin" action="" method="POST">
        <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
        <label for="name" class="sr-only">Your Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required autofocus><br>
        <label for="email" class="sr-only">Your Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required autofocus><br>
        <label for="reason" class="sr-only">Your Visits Reason</label>
        <input type="reason" id="reason" name="reason" class="form-control" placeholder="Your Visits Reason" required autofocus><br>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>
      </form>
      <p class="mt-5 mb-3 text-muted">
        <a href="index.php">Go Back</a>
      </p>
    </div>
  </body>
</html>
