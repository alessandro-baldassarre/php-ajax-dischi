<?php 

    include_once __DIR__ . "/data.php" ;




    if (isset($_GET['genre'])){

        $filteredAlbums = [];
        foreach($albums as $album){
            if($album["genre"] === $_GET['genre']){
                $filteredAlbums[] = $album;
            }
        }
        
        header('Content-Type: application/json');
        echo json_encode(
            [
                'results' =>  $filteredAlbums,
                'length' => count($filteredAlbums)
            ]);

    }
    else{

        header('Content-Type: application/json');
        echo json_encode(
        [
            'results' =>  $albums,
            'length' => count($albums)
        ]);

    }

 ?>