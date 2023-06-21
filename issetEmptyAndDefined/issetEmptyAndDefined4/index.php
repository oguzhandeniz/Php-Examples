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
        $control    =    isset($isim);

        if ($control == true) {
            echo '$isim adında değişken bulunmaktadır.';
        } else {
            echo '$isim adında herhangi bir değişken bulunmamaktadır.';
        }
    ?>
</body>

</html>