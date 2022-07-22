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
    $randomNumArray = [];
    while(count($randomNumArray) <= 15) {
        $randomNumber = rand(0, 66);
        if(!in_array($randomNumber, $randomNumArray)) {
            $randomNumArray[] = $randomNumber;
        }
    }
    var_dump($randomNumArray)
    ?>
</body>
</html>