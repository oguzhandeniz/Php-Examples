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
        json_encode()	:	Belirtilecek olan içeriğin, JSON karşılığını bularak, bulduğu değeri geriye döndürür.
            JSON_HEX_TAG		:	Belirtilecek olan içerikte bulunan tag (etiket) başlangıç ve bitiş karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
            JSON_HEX_APOS		:	Belirtilecek olan içerikte bulunan ' (tek tırnak) karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
            JSON_HEX_QUOT		:	Belirtilecek olan içerikte bulunan " (çift tırnak) karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
            JSON_HEX_AMP		:	Belirtilecek olan içerikte bulunan & (ampersant) karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
            JSON_FORCE_OBJECT	:	Belirtilecek olan içeriği nesne dönüşüm yapısına göre zorlamak için kullanılır.
        json_decode()	:	Belirtilecek olan JSON değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
        */
 
        $file		=	file_get_contents("OrnekGelismis.json");
        $turn	=	json_decode($file);
            
        echo "<pre>";
        print_r($turn);
        echo "</pre>";
        
        echo $turn->Firma . " <br /><br />";
        echo $turn->Yonetici . " <br /><br />";
        echo $turn->Egitimler[0] . " <br /><br />";
        echo $turn->Egitimler[1] . " <br /><br />";
        echo $turn->Egitimler[2] . " <br /><br />";
        echo $turn->Egitimler[3] . " <br /><br />";

        $SinifBir	=	$turn->Egitmenler[0];
        echo $SinifBir->Adi. " <br />";
        echo $SinifBir->Ders. " <br /><br />";

        $SinifIki	=	$turn->Egitmenler[1];
        echo $SinifIki->Adi. " <br />";
        echo $SinifIki->Ders. " <br /><br />";

        $SinifUc	=	$turn->Egitmenler[2];
        echo $SinifUc->Adi. " <br />";
        echo $SinifUc->Ders. " <br /><br />";

        $SinifDort	=	$turn->Egitmenler[3];
        echo $SinifDort->Adi. " <br />";
        echo $SinifDort->Ders;
        
       

    ?>
</body>

</html>