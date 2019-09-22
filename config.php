<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'queue_system');

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_error) {
        echo "Sorry, there seems to be a connection issue.\n";
        echo 'Error: '.$mysqli->connect_error.'\n';
        exit();
    }
