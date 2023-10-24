<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        /*
        ord()	:	Belirtilecek olan standart bir karakter değerinin ASCII (American Standart Code For Information Interchange) (Bilgi değişimi için amerikan standart kodlama sistemi) karşılığını bularak, bulduğu değeri geriye döndürür.
        chr()	:	Belirtilecek olan ASCII (American Standart Code For Information Interchange) (Bilgi değişimi için amerikan standart kodlama sistemi) değerinin standart karakter karşılığını bularak, bulduğu değeri geriye döndürür.
        */

        $karakter        =    "A";
        $karsilik        =    ord($karakter);

        echo $karakter . " : " . $karsilik;

    ?>
</body>

</html>