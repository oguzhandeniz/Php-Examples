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

        class Example
        {
        }

        $islem    =    new Example;

        if (method_exists($islem, "Example")) {
            echo "Example adında metod bulunmaktadır.";
        } else {
            echo "Example adında metod bulunmamaktadır.";
        }



        echo "<br>";
        echo "<br>";



        class Example2
        {

            public $name    =     "Oğuzhan Deniz";
        }

        $islem2    =    new Example2;

        if (property_exists($islem2, "name")) {
            echo "name adında özellik bulunmaktadır.";
        } else {
            echo "name adında özellik bulunmamaktadır.";
        }



        echo "<br>";
        echo "<br>";



        class Example3
        {
        }

        $islem3    =    new Example3;

        if (property_exists($islem3, "Isim")) {
            echo "Isim adında özellik bulunmaktadır.";
        } else {
            echo "Isim adında özellik bulunmamaktadır.";
        }

    ?>
</body>

</html>