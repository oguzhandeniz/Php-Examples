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
        curl_getinfo()	:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunun tüm bağlantı bilgilerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        curl_error()	:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunun olası bir hata ile karşılaşması durumunda hata değerini bularak, bulduğu değeri geriye döndürür.
        */
        
        $url		=	curl_init("https://www.sahibinden.com/");
        curl_exec($url);
        $error	=	curl_error($url);
        echo $error;
        curl_close($url);

    ?>
</body>

</html>