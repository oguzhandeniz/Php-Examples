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

        $value        =    "3FFE:2800:2:1344:00FC:0AFF:FEFC:1022";

        if (filter_var($value, FILTER_VALIDATE_IP)) {
            echo "value IP adresidir.";
        } else {
            echo "value IP adresi değildir.";
        }

    ?>
</body>

</html>