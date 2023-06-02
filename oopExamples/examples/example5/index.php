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

        /*
        var 	:	Herhangi bir sınıf içerisinde standart değişken tanımlamak için kullanılır.
        */

        class Deneme
        {

            var $Isim    =    "Oğuzhan Deniz";
        }

        $Islem    =    new Deneme;

        echo $Islem->Isim;

    ?>
</body>

</html>