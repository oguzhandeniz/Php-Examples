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

        $value        =    "176.240.124.82";

        if (filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            echo "Sınanan içerik IPV6 türünde IP adresidir.";
        } else {
            echo "Sınanan içerik IPV6 türünde IP adresi değildir.";
        }

    ?>
</body>

</html>