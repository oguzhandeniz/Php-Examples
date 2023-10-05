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
        mb_convert_encoding()	:	Belirtilecek olan içeriği, belirtilecek olan karakter kodlaması dahilinde dönüştürerek, karakter kodlaması dönüştürülmüş olan değeri geriye döndürür.
                                    auto değeri verilmesi durumunda ASCII, JIS, UTF-8, EUC-JP, SJIS kodlaması sırası kullanılır.
        mb_detect_encoding()	:	Belirtilecek olan içeriğin karakter kodlamasını algılayarak, bulduğu değeri geriye döndürür.
        mb_list_encodings()		:	PHP yazılımı içerisinde kullanılabilecek olan sisteme tanımlı tüm karakter kodlaması listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        */
        
        $values		=	mb_list_encodings();
        echo "<pre>";
        print_r($values);
        echo "</pre>";


    ?>
</body>

</html>