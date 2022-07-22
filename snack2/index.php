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
    $userName = $_GET['name'];
    $userMail = $_GET['mail'];
    $userAge = $_GET['age'];
    ?>
    <?php if(strlen($userName) > 3) {
        if(substr_count($userMail, '@') == 1) {
            if(substr_count($userMail, '.') == 1) {
                if(is_numeric($userAge)) {
                    echo 'Accesso riuscito';
                } else {
                    echo 'Accesso negato';
                }
            } else {
                echo 'Accesso negato';
            }
        } else {
            echo 'Accesso negato';
        }
    } ?>
</body>
</html>