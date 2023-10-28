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
        
        $values	=	array("<i>Karabuk University</i>", "Computer Engineering", "Oguzhan&Deniz", "25\" JUNE", "Fenerbahce");
        
        echo "<pre>";
        print_r($values);
        echo "</pre>";
    

        $turn	=	json_encode($values, JSON_HEX_AMP);
        
        echo $turn;

    ?>
</body>

</html>