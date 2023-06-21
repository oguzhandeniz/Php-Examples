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
        $values    =    array("Esya" => "Masa", "Renk" => "Mavi", "Vasita" => "Uçak");

        $control    =    isset($values["Renk"]);

        if ($control == true) {
            echo 'values adındaki dizi içerisinde Renk anahtarı bulunmaktadır.';
        } else {
            echo 'values adındaki dizi içerisinde Renk anahtarı bulunmamaktadır.';
        }

    ?>
</body>

</html>