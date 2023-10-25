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


        $gelenDeger        =    "Oğzuhan Dezni";
        $gercekDeger    =    "Oğuzhan Deniz";
        
        echo "Gelen Değer : " . $gelenDeger . "<br />Gerçek Değer : " . $gercekDeger . "<br /><br /><br />";
        
        $fark            =    levenshtein($gelenDeger, $gercekDeger);
        
        if($fark==0){
            echo "Tebrikler, tam eşleşme sağlandı.";
        }elseif($fark==1){
            echo "Tebrikler, 1 yaklaşık eşleşme sağlandı.";
        }elseif($fark==2){
            echo "İdare eder, 2 yaklaşık eşleşme sağlandı.";
        }else{
            echo "Çok kötü, 3 veya daha üstü yaklaşık eşleşme sağlandı.";
        }

    ?>
</body>

</html>