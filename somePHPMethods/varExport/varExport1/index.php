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
        var_export()	:	Belirtilecek olan harhangi bir değişkenin çözümlenebilir gösterimini bularak, bulduğu gösterimin ekran çıktılanmasını sağlamak için kullanılır.
        */

        $name        =    "Oğuzhan DENİZ";
        $date        =    2023;

        echo $name . "<br />";
        echo $date . "<br />". "<br />";

        var_export($name);
        echo "<br />";
        var_export($date);

    ?>
</body>

</html>