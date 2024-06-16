<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>
</head>

<body>

    <ol>
        <?php
            foreach($hotels as $hotel) {
                echo "<li><ul>";
                echo "<li>Nome: ".$hotel["name"]."</li>";
                echo "<li>Descrizione: ".$hotel["description"]."</li>";
                echo "<li>Parcheggio: ";
                if ($hotel["parking"]==true) {echo "Sì";} 
                else {echo "No";}
                echo "</li>";
                echo "<li>Valutazione: ".$hotel["vote"]."</li>";
                echo "<li>Distanza dal centro: ".$hotel["distance_to_center"]."</li><hr>";
                echo "</li></ul></li>";
          }
        ?>
    </ol>
    
</body>
</html>