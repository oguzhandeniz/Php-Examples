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
        curl_init()		:	Yeni bir CURL oturumu başlatmak / tanımlamak için kullanılır.
        curl_exec()		:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunu çalıştırmak için kullanılır.
        curl_close()	:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunu sonlandırmak / kapatmak için kullanılır.
        */
        
        $url		=	curl_init("https://www.youtube.com/");
        curl_exec($url);
        curl_close($url);

    ?>
</body>

</html>