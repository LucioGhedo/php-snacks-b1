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
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    ?>
    <div class="grey">
        <?php for($i = 0; $i < count($db['teachers']); $i++) { ?>
            <?php echo $db['teachers'][$i]['name'] . ' ' . $db['teachers'][$i]['lastname'] ?> <br>
        <?php } ?>
    </div>
    <div class="green">
        <?php for($i = 0; $i < count($db['pm']); $i++) { ?>
            <?php echo $db['pm'][$i]['name'] . ' ' . $db['pm'][$i]['lastname'] ?> <br>
        <?php } ?>
    </div>

</body>
</html>