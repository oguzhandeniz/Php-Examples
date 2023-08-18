<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        /*
        substr()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre istenilen değeri bularak, bulduğu değeri geriye döndürür.
        mb_substr()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak istenilen değeri bularak, bulduğu değeri geriye döndürür.
        strstr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
        stristr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda herhangi bir değerin büyük harf / küçük harf ayrımı olmaksızın arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
        strchr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
        strrchr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, son eşleşen değerin sonrasını bularak, bulduğu değeri geriye döndürür.
        */

        $deger			=	"+905554443322";
        $sonOnHane		=	substr($deger, -10);
        $tel		=	"0" . $sonOnHane;
        
        $alanKodu		=	substr($tel, 0, 4);
        $birinciBlok	=	substr($tel, 4, 3);
        $ikiniciBlok	=	substr($tel, 7, 2);
        $ucuncuiBlok	=	substr($tel, 9, 2);
        
        echo $alanKodu . " " . $birinciBlok . " " . $ikiniciBlok . " " . $ucuncuiBlok;
    ?>
</body>

</html>