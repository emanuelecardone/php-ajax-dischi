<?php
    // Import database
    require __DIR__ . './database.php';
    // Get sul genere
    $album_genre = $_GET('genre');

    header('Content-Type: application/json');

    if($album_genre === 'All'){
        $jsonpack = json_encode($database);
    }

    echo $jsonpack;
?>