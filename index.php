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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Php Hotels</title>
</head>
<body>
    <div class="px-5 h-100 d-flex align-items-center justify-content-center bg-dark">
        <table class="table table-dark table-striped">
            <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance to center</th>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach($hotels as $key => $item){?>
                    <tr>
                        <?php foreach($item as $id => $hotel){ ?>
                            <td>
                                <?php 
                                    if($id == "parking"){
                                        if($hotel){
                                            echo "Yes";
                                        }
                                        else echo "No";
                                    }

                                    else if($id == "vote")
                                        echo $hotel."/5";

                                    else if($id == "distance_to_center")
                                        echo $hotel." km";

                                    else echo $hotel; 
                                ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>