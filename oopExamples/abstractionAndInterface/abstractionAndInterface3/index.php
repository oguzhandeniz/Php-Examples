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

    abstract class Deneme
    {
        
        public $Isim1            =    "Oğuzhan";
        public const SOYISIM1    =    "Deniz";

        private $Isim2            =    "Halim Can";
        private const SOYISIM2   =    "Ocaklı";

        protected $Isim3            =    "Batın Berkin";
        protected const SOYISIM3    =    "Topaloğlu";
    }

    class Test extends Deneme
    {

    }


    ?>
</body>

</html>