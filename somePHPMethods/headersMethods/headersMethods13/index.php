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
            header()		:	Belirtilecek olan içerik dahilinde, istemciye işlenmiş HTTP üst bilgisi iletmek için kullanılır.
            get_headers()	:	Belirtilecek olan URL doğrultusunda HTML isteğine karşı sunucunun verdiği tüm yanıtları kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
            get_meta_tags()	:	Belirtilecek olan URL doğrultusunda HTML dosyasında bulunan ve name değerine sahip tüm meta etiketlerini kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
            */


        $Adres    =    "https://github.com/oguzhandeniz";

        $Sonuc    =    get_meta_tags($Adres);

        echo "oguzhandeniz Github'ın Bilgileri<br />";
        echo "Description Bilgisi : " . $Sonuc["description"] . "<br />";
        echo "Keywords Bilgisi : " . $Sonuc["keywords"];


    ?>
</body>

</html>