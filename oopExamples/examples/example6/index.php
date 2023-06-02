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
        __construct()		:	Belirtilecek olan sınıfa, yapıcı metod tanımlamak için kullanılır.
        __destruct()		:	Belirtilecek olan sınıfa, yıkıcı metod tanımlamak için kullanılır.
        */

        class Deneme
        {

            public function __construct()
            {
                echo "Sınıf Çalıştı ve Yapıcı Metod Devreye Girdi.<br />";
            }

            public $Isim    =    "Oğuzhan";
            public $Soyisim =     "Deniz";

            public function Yaz()
            {
                $Metin    =    "Karabük Üniversitesi";
                return $Metin;
            }

            public function __destruct()
            {
                echo "Sınıf İçerisindeki Tüm Özellik ve Metotların Çalışması Tamamlandığı İçin Yıkıcı Metod Devreye Girdi.";
            }
        }

        $IslemYap    =    new Deneme;
        echo $IslemYap->Isim . " " . $IslemYap->Soyisim . " " . $IslemYap->Yaz() . "<br />";

    ?>
</body>

</html>