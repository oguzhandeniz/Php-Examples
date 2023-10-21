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

        echo "Bilgisayarın / Sunucunun İşletim Sistemi : " . getenv("OS") . "<br />";
        echo "Bilgisayarın / Sunucunun Kullanıcı Adı : " . getenv("USER");

    ?>
</body>

</html>