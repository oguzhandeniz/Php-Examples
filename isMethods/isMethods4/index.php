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

        $val1        =    null;

        if (is_null($val1)) {
            echo '$val1 adındaki değişkenin içeriği null (boş / değeri olmayan) içeriktir.';
        } else {
            echo '$val1 adındaki değişkenin içeriği null (boş / değeri olmayan) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $text1        =   "PHP Eğitim";

        if (is_null($text1)) {
            echo '$text1 adındaki değişkenin içeriği null (boş / değeri olmayan) içeriktir.';
        } else {
            echo '$text1 adındaki değişkenin içeriği null (boş / değeri olmayan) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        $doc1        =    fopen("Ornek.txt", "r");

        if (is_resource($doc1)) {
            echo '$doc1 adındaki değişkenin içeriği dosya bir resource (kaynak) içeriktir.';
        } else {
            echo '$doc1 adındaki değişkenin içeriği dosya bir resource (kaynak) içerik değildir.';
        }



    ?>
</body>

</html>