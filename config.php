<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'user');
    define('DB_PASSWORD', 'password');
    define('DB_NAME', 'db_name');

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_error) {
        echo "Sorry, there seems to be a connection issue.\n";
        echo 'Error: '.$mysqli->connect_error.'\n';
        exit();
    }
