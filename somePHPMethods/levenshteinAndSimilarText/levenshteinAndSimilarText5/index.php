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
        levenshtein()	:	Belirtilecek olan iki değer arasındaki levenshtein mesafesini bularak, bulduğu değeri geriye döndürür. Levenshtein mesafesini : Bir değeri diğer bir değere dönüştürebilmek için değiştirilecek veya eklenecek veya silinecek karakter sayısı anlamına gelir.
        similar_text()	:	Belirtilecek olan iki değer arasındaki benzerliği yüzdesel olarak bularaki bulduğu değeri geriye döndürür.
        */

        $gelenDeger            =    "PHP Web Tabanlı, nesne yönelimli bir programlama dilidir. Eskiden Personal Home Page (PHP) yani Kişisel Anasayfa iken şimdilerde PHP: Hypertext Preprocessor olarak kullanıma devam edilmektedir. PHP, dinamik, kendi kendine yönetilebilir web siteleri yapılmasını sağlar.";

        $gercekDeger        =    "PHP Web Tabanlı, nesne yönelimli bir gelişmiş programlama dilidir. Eskiden Personal Home Page (PHP) yani Kişisel Anasayfa iken şimdilerde PHP: Hypertext Preprocessor olarak ismi değiştirilmiş. PHP, dinamik, kendi kendine yönetilebilir web siteleri yapılmasını sağlar.";

        echo "Gelen Değer : " . $gelenDeger . "<br />Gerçek Değer : " . $gercekDeger . "<br /><br /><br />";

        $benzerlikOrani        =    similar_text($gercekDeger, $gelenDeger, $oran);

        echo "Değer : " . $benzerlikOrani . "<br />";
        echo "Oran : %" . $oran;

    ?>
</body>

</html>