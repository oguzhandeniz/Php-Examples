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

        $docTwo    =    "docs/example1.txt";

        if (file_exists($docTwo)) {
            echo "Belirtilen Dosya Bulundu.";
        } else {
            echo "Belirtilen Dosya Bulunamıyor.";
        }

    ?>
</body>

</html>