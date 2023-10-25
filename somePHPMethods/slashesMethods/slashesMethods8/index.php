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
        addslashes()	:	Belirtilecek olan içerikte bulunan ' (tek tırnak) ve " (çift tırnak) işaretlerinin önüne \ (ters slash) yani kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
        stripslashes()	:	Belirtilecek olan içerikte bulunan ve önüne \ (ters slash) yani kaçırma operatörü eklenmiş olan tüm karakterlerin önünde bulunan \ (ters slash) yani kaçırma operatörlerini kaldırır ve aktif bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
        addcslashes()	:	Belirtilecek olan içerikte bulunan, belirtilecek olan özel karakterlerin önüne \ (ters slash) yani kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
        stripcslashes()	:	Belirtilecek olan içerikte bulunan ve önüne \ (ters slash) yani kaçırma operatörü eklenmiş olan tüm közel arakterlerin önünde bulunan \ (ters slash) yani kaçırma operatörlerini kaldırır ve aktif bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
        quotemeta()		:	Belirtilecek olan içerikte bulunan, özel karakterlerin önüne \ (ters slash) yani kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür. Karakterler . $ \ ? + * ^ [ ] ( )
        */

        $text        =    "FENERBAHÇE - 1907";
        echo $text . "<br /><br />";

        $newText    =    addcslashes($text, "0..9");
        echo $newText . "<br /><br />";

        $lastText    =    stripcslashes($text);
        echo $lastText;

    ?>
</body>

</html>