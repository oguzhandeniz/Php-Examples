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

        class AAA
        {
        }

        $classOne    =    new    AAA;

        if (is_a($classOne, "AAA")) {
            echo '$classOne adındaki değişken AAA adındaki sınıfın nesnel örneğidir.';
        } else {
            echo '$classOne adındaki değişken AAA adındaki sınıfın nesnel örneği değildir.';
        }


        echo "<br>";
        echo "<br>";


        class XXX
        {
        }

        class YYY
        {
        }

        $classTwo    =    new    YYY;

        if (is_a($classTwo, "XXX")) {
            echo '$classTwo adındaki değişken XXX adındaki sınıfın nesnel örneğidir.';
        } else {
            echo '$classTwo adındaki değişken XXX adındaki sınıfın nesnel örneği değildir.';
        }

    ?>
</body>

</html>