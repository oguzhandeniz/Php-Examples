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

        $degerBir            =    "https%3A%2F%2Fwww.github.com%2Fanasayfa.php";
        $degerIki            =    "https%3A%2F%2Fwww.github.com%2Fana+sayfa.php";
        $degerUc             =    "https%3A%2F%2Fwww.github.com%2Fanasayfa.php%3FID%3D144%26KimlikBilgisi%3DOguzhanDeniz";
        $degerDort           =    "https%3A%2F%2Fwww.github.com%2Fanasayfa.php%3FID%3D144%26KimlikBilgisi%3DOguzhan%20Deniz";
        
        $islemBir            =    rawurldecode($degerBir);
        $islemIki            =    rawurldecode($degerIki);
        $islemUc             =    rawurldecode($degerUc);
        $islemDort           =    rawurldecode($degerDort);

        echo $degerBir . "<br />";
        echo $islemBir . "<br /><br />";

        echo $degerIki . "<br />";
        echo $islemIki . "<br /><br />";

        echo $degerUc . "<br />";
        echo $islemUc . "<br /><br />";

        echo $degerUc . "<br />";
        echo $islemDort;

    ?>
</body>

</html>