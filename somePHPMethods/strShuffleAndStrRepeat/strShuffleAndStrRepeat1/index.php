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
        str_shuffle()	:	Belirtilecek olan içeriğin tüm karakterlerini rastgele karıştırarak, karıştırılmış olan değeri geriye döndürür.
        strrev()		:	Belirtilecek olan içeriği sondan başa olmak üzere ters çevirerek, çevrilmiş olan değeri geriye döndürür.
        str_repeat()	:	Belirtilecek olan içeriği, belirtilecek olan sayı değeri kadar tekrarlayarak, oluşturulmuş olan değeri geriye döndürür.
        */

        $text        =    "PHP Back-End Developer";

        echo $text . "<br />";

        $method    =    str_shuffle($text);

        echo $method;

    ?>
</body>

</html>