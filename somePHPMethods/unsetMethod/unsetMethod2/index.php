<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        /*
        unset(): Belirtilecek olan değişkeni, dizi anahtarını ve elemanını veya session'ı (oturumu) silmek / yok etmek için kullanılır.
        */

        $name       =    "Oğuzhan";
        $surname    =    "DENİZ";

        echo "İsim ve Soyisim :" . $name . " " . $surname . "<br />";

        unset($name,$surname);

        echo "İsim ve Soyisim :" . $name . " " . $surname; // Hata kodu döndürür, çünkü unset() metodu ile name ve surname adındaki değişken yok edildi.

    ?>
</body>

</html>