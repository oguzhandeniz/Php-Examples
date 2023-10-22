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
        get_included_files()	:	Kullanılacak olan PHP dosyasına, dahil edilmiş / eklenmiş tüm PHP dosyalarının path'ini (yolunu) ve isimlerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        get_required_files()	:	Kullanılacak olan PHP dosyasına, dahil edilmiş / eklenmiş tüm PHP dosyalarının path'ini (yolunu) ve isimlerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        */

        print_r(get_included_files());


        echo "<br><br><br>";

        $info    =    get_included_files();

        print_r($info);
    ?>
</body>

</html>