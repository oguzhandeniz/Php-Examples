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

        
        function IceriginSadeceIlkHarfiniBuyukHarfYap($Deger)
        {
            $Uzunluk                           =    strlen($Deger);
            $IlkHarfiBul                       =    mb_substr($Deger, 0, 1, "UTF-8");
            $KalanIcerigiBul                   =    mb_substr($Deger, 1, $Uzunluk, "UTF-8");
            $KucuktenBuyugeDegisecekler        =    array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
            $KucuktenBuyugeDegisenler          =    array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
            $BuyuktenKucugeDegisecekler        =    array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
            $BuyuktenKucugeDegisenler          =    array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
            $IlkHarfiDuzenle                   =    strtoupper(str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkHarfiBul));
            $KalanIcerigiDuzenle               =    strtolower(str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul));
            $Sonuc                             =    $IlkHarfiDuzenle . $KalanIcerigiDuzenle;
            return $Sonuc;
        }

        $value            =    "OĞUZHAN DENİZ - HALİM CAN OCAKLI - BATIN BERKİN TOPALOĞLU";

        echo $value . "<br />";

        $text            =    IceriginSadeceIlkHarfiniBuyukHarfYap($value);

        echo $text;


    ?>
</body>

</html>