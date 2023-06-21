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
        $control    =    isset($isimler[5]);

        if ($control == true) {
            echo 'isimler adındaki dizi içerisinde 5 anahtarı bulunmaktadır.';
        } else {
            echo 'isimler adındaki dizi içerisinde 5 anahtarı bulunmamaktadır.';
        }
    ?>
</body>

</html>