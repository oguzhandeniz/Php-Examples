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

        $num1        =    15;

        if (is_long($num1)) {
            echo '$num1 adındaki değişkenin içeriği integer (tamsayı) içeriktir.';
        } else {
            echo '$num1 adındaki değişkenin içeriği integer (tamsayı) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $num2        =    1.5;

        if (is_long($num2)) {
            echo '$num2 adındaki değişkenin içeriği integer (tamsayı) içeriktir.';
        } else {
            echo '$num2 adındaki değişkenin içeriği integer (tamsayı) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $num3        =    8.5;

        if (is_double($num3)) {
            echo '$num3 adındaki değişkenin içeriği double / float (ondalıklı sayı) içeriktir.';
        } else {
            echo '$num3 adındaki değişkenin içeriği double / float (ondalıklı sayı) içerik değildir.';
        }



        echo "<br>";
        echo "<br>";


        $text1        =    "Oğuzhan Deniz";

        if (is_double($Deger)) {
            echo '$text1 adındaki değişkenin içeriği double / float (ondalıklı sayı) içeriktir.';
        } else {
            echo '$text1 adındaki değişkenin içeriği double / float (ondalıklı sayı) içerik değildir.';
        }



        echo "<br>";
        echo "<br>";


        $num4        =    12.5;

        if (is_float($num4)) {
            echo '$num4 adındaki değişkenin içeriği double / float (ondalıklı sayı) içeriktir.';
        } else {
            echo '$num4 adındaki değişkenin içeriği double / float (ondalıklı sayı) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $num5        =    9.5;

        if (is_float($num5)) {
            echo '$num5 adındaki değişkenin içeriği double / float (ondalıklı sayı) içeriktir.';
        } else {
            echo '$num5 adındaki değişkenin içeriği double / float (ondalıklı sayı) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $text2        =   "Karabük Üniversitesi";

        if (is_float($text2)) {
            echo '$text2 adındaki değişkenin içeriği double / float (ondalıklı sayı) içeriktir.';
        } else {
            echo '$text2 adındaki değişkenin içeriği double / float (ondalıklı sayı) içerik değildir.';
        }

    ?>
</body>

</html>