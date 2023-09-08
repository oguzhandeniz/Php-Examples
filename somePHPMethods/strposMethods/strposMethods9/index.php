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
        strpos()		:	Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin ilk eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
        mb_strpos()		:	Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak ilk eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
        stripos()		:	Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin büyük harf / küçük harf ayrımı olmaksızın ilk eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
        mb_stripos()	:	Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin büyük harf / küçük harf ayrımı olmaksızın, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak ilk eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
        strrpos()		:	Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin son eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
        mb_strrpos()	:	Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak son eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
        strripos()		:	Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin büyük harf / küçük harf ayrımı olmaksızın son eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
        mb_strripos()	:	Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin büyük harf / küçük harf ayrımı olmaksızın, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak son eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
        */

        $text    =    "PHP tüm web tabanlı programlama dilleri arasında en yaygın olarak kullanılan bir dildir. PHP yazılım dili çok üstün özelliklere sahiptir.";

        echo $text . "<br />";

        $result    =    strrpos($text, "PHP");

        echo $result;

    ?>
</body>

</html>