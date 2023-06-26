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

        $value1        =    "google";

        if (filter_var($value1, FILTER_VALIDATE_URL)) {
            echo "value1 URL adresidir.";
        } else {
            echo "value1 URL adresi değildir.";
        }

        echo "<br>";

        $value2        =    "google.com";

        if (filter_var($value2, FILTER_VALIDATE_URL)) {
            echo "value2 URL adresidir.";
        } else {
            echo "value2 URL adresi değildir.";
        }

        echo "<br>";

        $value3        =    "www.google.com";

        if (filter_var($value2, FILTER_VALIDATE_URL)) {
            echo "value3 URL adresidir.";
        } else {
            echo "value3 URL adresi değildir.";
        }

        echo "<br>";

        $value4        =    "http://www.google.com";

        if (filter_var($value4, FILTER_VALIDATE_URL)) {
            echo "value4 URL adresidir.";
        } else {
            echo "value4 URL adresi değildir.";
        }

        echo "<br>";

        $value5        =    "http://google.com";
        if (filter_var($value5, FILTER_VALIDATE_URL)) {
            echo "value5 URL adresidir.";
        } else {
            echo "value5 URL adresi değildir.";
        }

    ?>
</body>

</html>