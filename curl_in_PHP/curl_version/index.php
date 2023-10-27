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
        curl_version()		:	Kullanılmakta olan server'da (sunucuda) çalışmakta olan libcurl kütüphanesinin tüm bilgilerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        */
        
        $values	=	curl_version();
        
        echo "<pre>";
        print_r($values);
        echo "</pre>";
	

    ?>
</body>

</html>