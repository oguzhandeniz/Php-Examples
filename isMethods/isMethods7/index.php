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

        $arr1        =    array("Halim Can", "Batın Berkin");

        if (is_array($arr1)) {
            echo '$arr1 adındaki değişkenin içeriği array (dizi) içeriktir.';
        } else {
            echo '$arr1 adındaki değişkenin içeriği array (dizi) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $val2        =    8;

        if (is_array($val2)) {
            echo '$val2 adındaki değişkenin içeriği array (dizi) içeriktir.';
        } else {
            echo '$val2 adındaki değişkenin içeriği array (dizi) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        class Deneme
        {
        }

        $islem    =    new Deneme;

        if (is_object($islem)) {
            echo 'Islem adındaki değişkenin içeriği object (nesne) içeriktir.';
        } else {
            echo 'islem adındaki değişkenin içeriği object (nesne) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $islem2    =    true;

        if (is_object($islem2)) {
            echo 'islem2 adındaki değişkenin içeriği object (nesne) içeriktir.';
        } else {
            echo 'islem2 adındaki değişkenin içeriği object (nesne) içerik değildir.';
        }

    ?>
</body>

</html>