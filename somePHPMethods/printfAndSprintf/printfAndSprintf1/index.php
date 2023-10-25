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
        printf()	:	Belirtilecek olan içeriğin, biçimli bir yapıya göre ekran çıktılanmasını sağlamak için kullanılır.
        sprintf()	:	Belirtilecek olan içeriğin, biçimli bir yapıya göre yeni bir değişken içerisine depolanmasını sağlamak için kullanılır.
        */

        printf("Oğuzhan Deniz");

        echo "<br><br><br>";

        $value    =    sprintf("Oğuzhan Deniz");
        echo $value;


        echo "<br><br><br>";


        printf("%"); // Hata kodu döndürür, çünkü dizge istek talebi belirtilmedi.


        echo "<br><br><br>";


        $value2    =    sprintf("%"); // Hata kodu döndürür, çünkü dizge istek talebi belirtilmedi.
        echo $value2;

        echo "<br><br><br>";

        printf("%%");

        echo "<br><br><br>";

        $value    =    sprintf("%%");
        echo $value;
    ?>
</body>

</html>