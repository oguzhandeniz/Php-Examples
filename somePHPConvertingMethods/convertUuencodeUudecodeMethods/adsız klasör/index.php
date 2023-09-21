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
        convert_uuencode()	:	Belirtilecek olan içeriği uuencode (Unix to Unix Encoding) (unix'ten unix'e kodlayıcı) algoritması kodlamasını bularak, bulduğu değeri geriye döndürür.
        convert_uudecode()	:	Belirtilecek olan ve uuencode (Unix to Unix Encoding) (unix'ten unix'e kodlayıcı) algoritması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
        */

        $text		=	"Fenerbahçe";
        echo $text . "<br />";
        $kodla		=	convert_uuencode($text);
        echo $kodla . "<br />";
        $coz		=	convert_uudecode($kodla);
        echo $coz;

    ?>
</body>

</html>