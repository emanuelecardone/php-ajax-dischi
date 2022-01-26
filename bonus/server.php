<?php
    // Import database
    require __DIR__ . './database.php';
    // Get sul genere
    $filtered_genre = $_GET['genre'];

    header('Content-Type: application/json');

    if($filtered_genre === 'All'){
        $jsonpack = json_encode($database);
    } else{
        // Creo un array nel quale pusherò gli album filtrati
        $filtered_albums = [];
        // Filtro sul genere
        foreach($database as $single_album){
            if($single_album['genre'] === $filtered_genre){
                $filtered_albums[] = $single_album;
            }
        }
        $jsonpack = json_encode($filtered_albums);
    }

    echo $jsonpack;
?>