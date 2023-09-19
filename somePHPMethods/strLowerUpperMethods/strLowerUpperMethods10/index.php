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
        strtoupper()		:	Belirtilecek olan içeriğin tüm harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
        mb_strtoupper()		:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak tüm harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
        strtolower()		:	Belirtilecek olan içeriğin tüm harflerini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
        mb_strtolower()		:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak tüm harflerini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
        mb_convert_case()	:	Belirtilecek olan içeriğin, belirtilecek olan dönüşüm türünde ve karakter kodlaması dahilinde gelişmiş olarak tüm harflerini değiştirerek, değiştirilmiş olan değeri geriye döndürür.
            MB_CASE_UPPER	:	Belirtilecek olan içeriğin tüm harflerini büyük harf olacak şekilde değiştirmek için kullanılır.
            MB_CASE_LOWER	:	Belirtilecek olan içeriğin tüm harflerini küçük harf olacak şekilde değiştirmek için kullanılır.
            MB_CASE_TITLE	:	Belirtilecek olan içeriğin tüm kelimelerinin baş harflerini harflerini büyük harf olacak şekilde değiştirmek için kullanılır.
        */

       
        function BuyukHarfleriKucukHarflereCevir($Deger){
            $Degisecekler	=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
            $Degisenler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
            $Duzenle		=	str_replace($Degisecekler, $Degisenler, $Deger);
            $Sonuc			=	strtolower($Duzenle);
            return $Sonuc;
        }
        
        $value            =    "OĞUZHAN DENİZ - HALİM CAN OCAKLI - BATIN BERKİN TOPALOĞLU";

        echo $value . "<br />";
        
        $text			=	BuyukHarfleriKucukHarflereCevir($value);
        
        echo $text;

    ?>
</body>

</html>