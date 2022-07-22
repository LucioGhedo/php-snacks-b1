<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    $matches= [
        [
            'home' => 'Ascoli',
            'away' => 'Milano',
            'homeScore' => 75,
            'awayScore' => 0
        ],
        [
            'home' => 'Venezia',
            'away' => 'Bergamo',
            'homeScore' => 55,
            'awayScore' => 53
        ],
        [
            'home' => 'Torino',
            'away' => 'Lecce',
            'homeScore' => 73,
            'awayScore' => 73
        ],
        [
            'home' => 'Juve',
            'away' => 'Inter',
            'homeScore' => 0,
            'awayScore' => 0
        ],
    ];
    ?>
    <?php for($i = 0; $i < count($matches); $i++) { ?>
        <h2><?php echo $matches[$i]['home'] . ' - ' . $matches[$i]['away'] . ' | ' . $matches[$i]['homeScore'] . '-' . $matches[$i]['awayScore']  ?></h2>
    <?php } ?>
</body>
</html>