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

        $num1        =    8.5;
        // Kullanımdan kaldırıldı!
        if (is_real($num1)) {
            echo '$Deger adındaki değişkenin içeriği double / float (ondalıklı sayı) içeriktir.';
        } else {
            echo '$Deger adındaki değişkenin içeriği double / float (ondalıklı sayı) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $num2        =    "Oğuzhan DENİZ";
        // Kullanımdan kaldırıldı!
        if (is_real($Deger)) {
            echo '$Deger adındaki değişkenin içeriği double / float (ondalıklı sayı) içeriktir.';
        } else {
            echo '$Deger adındaki değişkenin içeriği double / float (ondalıklı sayı) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $num3        =    10;

        if (is_numeric($num3)) {
            echo '$num3 adındaki değişkenin içeriği numeric (sayısal) içeriktir.';
        } else {
            echo '$num3 adındaki değişkenin içeriği numeric (sayısal) içerik değildir.';
        }



        echo "<br>";
        echo "<br>";


        $num4        =    8.55;

        if (is_numeric($num4)) {
            echo '$num4 adındaki değişkenin içeriği numeric (sayısal) içeriktir.';
        } else {
            echo '$num4 adındaki değişkenin içeriği numeric (sayısal) içerik değildir.';
        }



        echo "<br>";
        echo "<br>";


        $text1        =    "Karabük Üniversitesi";

        if (is_numeric($text1)) {
            echo '$text1 adındaki değişkenin içeriği numeric (sayısal) içeriktir.';
        } else {
            echo '$text1 adındaki değişkenin içeriği numeric (sayısal) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $value1        =    true;

        if (is_bool($value1)) {
            echo '$value1 adındaki değişkenin içeriği boolean (mantıksal) içeriktir.';
        } else {
            echo '$value1 adındaki değişkenin içeriği boolean (mantıksal) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $arr1        =  array();

        if (is_bool($arr1)) {
            echo '$arr1 adındaki değişkenin içeriği boolean (mantıksal) içeriktir.';
        } else {
            echo '$arr1 adındaki değişkenin içeriği boolean (mantıksal) içerik değildir.';
        }

    ?>
</body>

</html>