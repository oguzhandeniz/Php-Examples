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
        getenv()	:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir ortam değişkeninin değerini bularak, bulduğu değeri geriye döndürür.
        putenv()	:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir ortam değişkenine, belirtilecek olan değeri atamak için kullanılır.
        */

        echo "<pre>";
        print_r(getenv());
        echo "</pre>";

        echo "<br /><br /><br />";

        putenv("ISIM=Oğuzhan");
        putenv("SOYISIM=Deniz");
        putenv("BILGI=BackEnd Developer");
        putenv("FIRMA=DenizSoft");

        echo "ISIM Adındaki Ortam Değişkeninin Değeri : " . getenv("ISIM") . "<br />";
        echo "SOYISIM Adındaki Ortam Değişkeninin Değeri : " . getenv("SOYISIM") . "<br />";
        echo "BILGI Adındaki Ortam Değişkeninin Değeri : " . getenv("BILGI") . "<br />";
        echo "FIRMA Adındaki Ortam Değişkeninin Değeri : " . getenv("FIRMA");

    ?>
</body>

</html>