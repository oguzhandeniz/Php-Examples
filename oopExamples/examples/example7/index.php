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

            public function __construct($HostBilgisi, $VeritabaniKullaniciAdi, $VeritabaniKullaniciSifresi, $VeritabaniAdi)
            {
                $Metin = "Gelen Host Bilgisi : " . $HostBilgisi . "<br />" .
                         "Gelen Veritabanı Kullanıcı Adı Bilgisi : " . $VeritabaniKullaniciAdi . "<br />" . 
                         "Gelen Veritabanı Kullanıcı Şifre Bilgisi : " . $VeritabaniKullaniciSifresi . "<br />" . 
                         "Gelen Veritabanı Adı Bilgisi : " . $VeritabaniAdi . "<br /><br /><br />";
                echo $Metin;
            }
        }

        $Islem    =    new Deneme("localhost", "Oğuzhan-Deniz", "1998", "Back-End");

    ?>
</body>
</body>

</html>