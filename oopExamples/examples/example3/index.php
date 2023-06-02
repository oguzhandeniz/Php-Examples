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
        class Detay
        {

            public $isim            =    "Oğuzhan";
            public const SOYISIM    =    "Deniz";
            
            public function Bilgiler()
            {
                $Meslek        =    "Computer Engineer";
                $Sehir        =    "İstanbul";
                $Metin        =    "Mesleği : " . $Meslek . "<br />İli : " . $Sehir;
                return $Metin;
            }
        }

        $Sonuc    =    new Detay;
        echo    "İsim Soyisim : " . $Sonuc->isim . " " . Detay::SOYISIM . "<br />" . $Sonuc->Bilgiler();
    ?>
</body>

</html>