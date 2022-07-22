<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    $class66 = [
        [
            'name' => 'Mario',
            'lastname' => 'Rossi',
            'marks' => [
                'italiano' => 9,
                'matematica' => 4,
                'storia' => 8,
                'ginnastica' => 10
            ],
        ],
        [
            'name' => 'Luca',
            'lastname' => 'Verdi',
            'marks' => [
                'italiano' => 5,
                'matematica' => 2,
                'storia' => 6,
                'ginnastica' => 10
            ],
        ],
        [
            'name' => 'Laura',
            'lastname' => 'Marrone',
            'marks' => [
                'italiano' => 10,
                'matematica' => 10,
                'storia' => 10,
                'ginnastica' => 6
            ],
        ],
        [
            'name' => 'Pietro',
            'lastname' => 'Paccione',
            'marks' => [
                'italiano' => 10,
                'matematica' => 7,
                'storia' => 10,
                'ginnastica' => 6
            ],
        ],
    ]
    ?>
    <?php function calcAverage($ita, $mate, $sto, $ginn) {
        $average = ($ita + $mate + $sto + $ginn) / 4;
        echo $average;
    } ?>
    <div>
        <?php for($i = 0; $i < count($class66); $i++) {?>
            <div class="student">
                <?php echo $class66[$i]['name'] . ' ' . $class66[$i]['lastname']  ?> <br>
                MEDIA STUDENTE:<?php calcAverage($class66[$i]['marks']['italiano'], $class66[$i]['marks']['matematica'], $class66[$i]['marks']['storia'], $class66[$i]['marks']['ginnastica']) ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>