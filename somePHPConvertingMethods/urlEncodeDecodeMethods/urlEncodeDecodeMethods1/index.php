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

        $degerBir            =    "https://github.com/anasayfa.php";
        $degerIki            =    "https://github.com/ana sayfa";
        $degerUc            =    "https://github.com/anasayfa.php?ID=2512&KimlikBilgisi=OguzhanDeniz";
        $degerDort            =    "https://github.com/anasayfa.php?ID=2512&KimlikBilgisi=Oguzhan Deniz";

        $islemBir            =    urlencode($degerBir);
        $islemIki            =    urlencode($degerIki);
        $islemUc            =    urlencode($degerUc);
        $islemDort            =    urlencode($degerDort);


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