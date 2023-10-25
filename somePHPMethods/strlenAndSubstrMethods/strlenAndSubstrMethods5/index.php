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
        strlen()			:	Belirtilecek olan içeriğin karakter sayısını bularak, bulduğu değeri geriye döndürür.
        mb_strlen()			:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak karakter sayısını bularak, bulduğu değeri geriye döndürür.
        substr_count()		:	Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte kaç tane olduğunu bularak, bulduğu değeri geriye döndürür.
        mb_substr_count()	:	Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak kaç tane olduğunu bularak, bulduğu değeri geriye döndürür.
        str_word_count()	:	Belirtilecek olan içeriğin kelime sayısını bularak, bulduğu değeri geriye döndürür.
        */

        $value			=	"PHP Tüm Web Tabanlı Diller Arasında En Yaygın Olarak Kullanılanıdır. PHP Yazılım Dili Çok Gelişmiş Özelliklere Sahiptir.";
	
        echo $value . "<br />";
        
        $searchValue	=	"PHP";
        
        $result			=	substr_count($value, $searchValue, 4);
        
        echo $searchValue . " Değeri İçerikte " . $result . " Defa Kullanılmıştır.";
        
    ?>
</body>

</html>