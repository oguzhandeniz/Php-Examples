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

        $value        =    "Karabük Üniversitesi";

        if (filter_var($value, FILTER_VALIDATE_IP)) {
            echo "value IP adresidir.";
        } else {
            echo "value IP adresi değildir.";
        }

        echo "<br>";

        $value2        =    "176.240.124.82";

        if (filter_var($value2, FILTER_VALIDATE_IP)) {
            echo "value2 IP adresidir.";
        } else {
            echo "value2 IP adresi değildir.";
        }

    ?>

</body>

</html>