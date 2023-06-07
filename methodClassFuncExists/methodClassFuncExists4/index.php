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

        trait Example
        {
        }

        if (trait_exists("Example")) {
            echo "Example adında trait bulunmaktadır.";
        } else {
            echo "Example adında trait bulunmamaktadır.";
        }



        echo "<br>";
        echo "<br>";


        if (trait_exists("Oguz")) {
            echo "Oguz adında trait bulunmaktadır.";
        } else {
            echo "Oguz adında trait bulunmamaktadır.";
        }



    ?>
</body>

</html>