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
        urlencode()			:	Belirtilecek olan içeriğin URL Encoding (Uniform Resource Locator Encoding) (nizami kaynak bulucu kodlaması) karakter kodlamasını bularak, bulduğu değeri geriye döndürür.
        urldecode()			:	Belirtilecek olan ve URL Encoding (Uniform Resource Locator Encoding) (nizami kaynak bulucu kodlaması) karakter kodlaması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
        rawurlencode()		:	Belirtilecek olan içeriğin URL Encoding (Uniform Resource Locator Encoding) (nizami kaynak bulucu kodlaması) karakter kodlamasını bularak, bulduğu değeri geriye döndürür.
        rawurldecode()		:	Belirtilecek olan ve URL Encoding (Uniform Resource Locator Encoding) (nizami kaynak bulucu kodlaması) karakter kodlaması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
        */

        $deger            =    "https://www.github.com/anasayfa.php?ID=2512&KimlikBilgisi=Oğuzhan Deniz";

        $kodla		=	rawurlencode($deger);
        $coz		=	urldecode($kodla);
        
        echo $deger . "<br />";
        echo $kodla . "<br />";
        echo $coz; // urlencode'da boşluk + olarak dönüştüğü için, rawurldecode bunu çözemez. Çünkü boşluk için %20 değerini arayacaktır.
        

    ?>
</body>

</html>