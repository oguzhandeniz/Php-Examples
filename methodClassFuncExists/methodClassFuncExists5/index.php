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

        interface Ornek1
        {
        }

        if (interface_exists("Ornek1")) {
            echo "Ornek1 adında interface bulunmaktadır.";
        } else {
            echo "Ornek1 adında interface bulunmamaktadır.";
        }



        echo "<br>";
        echo "<br>";


        if (interface_exists("Ornek")) {
            echo "Ornek adında interface bulunmaktadır.";
        } else {
            echo "Ornek adında interface bulunmamaktadır.";
        }



    ?>
</body>

</html>