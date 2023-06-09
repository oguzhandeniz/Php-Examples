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

        class Deneme
        {
            public $name    =    "Halim Can";
            public $surname =    "Ocaklı";
            public $city    =    "İstanbul";
            public $age;
            public const SCHOOL 	=	"Karabük University";
        }

        $islem             =    new Deneme;
        $islem->name       =    "Oğuzhan";
        $islem->surname    =    "Deniz";
        $islem->age        =    25;

        echo $islem->name . " " . 
             $islem->surname . " " . 
             $islem->city . " " .
             $islem->age . " " .
             Deneme::SCHOOL;

    ?>
</body>
</body>

</html>