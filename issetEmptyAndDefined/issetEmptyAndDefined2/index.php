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
        define("ISIM", "Oğuzhan Deniz");

        $control    =    defined("ISIM");

        if ($control == true) {
            echo "ISIM adında sabit bulunmaktadır.";
        } else {
            echo "ISIM adında herhangi bir sabit bulunmamaktadır.";
        }
    ?>
</body>

</html>