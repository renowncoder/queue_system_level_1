<?php

$db = mysqli_connect('localhost', 'root', 'root', 'queue_system');

function getClients()
{
    global $db;

    $get_clients = 'SELECT * FROM clients';
    $run_clients = mysqli_query($db, $get_clients);
    while ($row_clients = mysqli_fetch_array($run_clients)) {
        $client_name = $row_clients['name'];
        echo "<h1 class='card-title pricing-card-title'>$client_name</h1>";
    }
}
