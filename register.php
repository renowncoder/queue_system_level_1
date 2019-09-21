<?php

include 'connection.php';

$msg = '';
$msgClass = '';

if (isset($_POST['submit'])) {
    $client = $_POST['name'];
    $insert_client = "INSERT INTO clients (name) VALUES ('$client')";
    $run_client = mysqli_query($mysqli, $insert_client);

    if ($run_client) {
        $msg = 'Client has been successfully registered!';
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
        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>
      </form>
      <p class="mt-5 mb-3 text-muted">
        <a href="index.php">Go Back</a>
      </p>
    </div>
  </body>
</html>
