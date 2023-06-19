<?php
require_once("Classes/HalimCanOcakli.php");
require_once("Classes/BatinBerkinTopaloglu.php");
require_once("Classes/OguzhanDeniz.php");
?>
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

        $Bir    =    new Uyeler\Halim\Deneme;
        echo $Bir->Harf . "<br />";
        $Iki	=	new \Odemeler\Halim\Test;
	    echo $Iki->Rakam . "<br /><br />";

        $Iki    =    new Uyeler\Oguzhan\Islemler\Kaydet\Deneme;
        echo $Iki->Harf . "<br />";
        $Dort	=	new \Odemeler\Oguzhan\Test;
        echo $Dort->Rakam . "<br /><br />";

        $Uc        =    new Uyeler\Berkin\Deneme;
        echo $Uc->Harf . "<br />";
        $Alti	=	new \Odemeler\Berkin\Test;
        echo $Alti->Rakam . "<br /><br />";

    ?>
</body>

</html>