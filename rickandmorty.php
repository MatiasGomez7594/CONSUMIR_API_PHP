<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rickandmorty.css">
    <title>Consumir Api Rick and Morty</title>
</head>
<body>
    <?php
    $data = json_decode( file_get_contents('https://rickandmortyapi.com/api/character/'), true );

    foreach($data['results'] as $personaje){
        #print_r($item);
        $nombre = $personaje['name'];
        $imagen = $personaje['image'];
        $total_episodios = $personaje['episode'];
        ?>
        <div class="galeria-personajes">
            <div class="personaje">
                <h3>Nombre completo: <?php echo $nombre?></h2>
                <img src="<?php echo $imagen?>" alt="">
                <h3><?php echo 'Episodios: '.(count($total_episodios));?></h4>
            </div>
        </div>

    

    <?php
    }
    
    ?>

    
</body>
</html>