<?php
    require __DIR__ . './database.php';

    header('Content-Type: application/json');
    $jsonpack = json_encode($database);

    echo $jsonpack;
?>