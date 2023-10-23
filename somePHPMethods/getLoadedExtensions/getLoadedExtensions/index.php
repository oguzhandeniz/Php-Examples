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
        get_loaded_extensions()		:	PHP yazılımı içerisinde derlenmiş ve yüklenmiş sisteme tanımlı olan tüm modüllerin listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        get_extension_funcs()		:	PHP yazılımı içerisinde derlenmiş ve yüklenmiş sisteme tanımlı ve belirtilecek olan modülün tüm fonksiyonlarının listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        */

        echo "<pre>";
        print_r(get_loaded_extensions());
        echo "</pre>";

    ?>
</body>

</html>