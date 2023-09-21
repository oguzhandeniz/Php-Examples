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
        http_build_query()	:	Belirtilecek olan dizi içerisindeki tüm anahtar ve değerleri bularak, bulduğu değerleri URL kodlamalı bir sorgu dizisine dönüştürerek, dönüştürdüğü değeri geriye döndürür.
        */

        $values    =    array("EgitimTuru" => "Web Programlama", "EgitimSekli" => "Görsel Eğitim Seti", "KodlamaDili" => "PHP");
        echo "<pre>";
        print_r($values);
        echo "</pre>";

        $sonuc        =    http_build_query($values);
        echo $sonuc;


    ?>
</body>

</html>