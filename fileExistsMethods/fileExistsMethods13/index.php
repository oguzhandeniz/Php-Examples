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

        $logoImg    =    "logo.png";

        if (is_uploaded_file($logoImg)) {
            echo "Belirtilen Dosya Yüklenebilir Bir Dosyadır.";
        } else {
            echo "Belirtilen Dosya Yüklenebilir Bir Dosya Değildir.";
        }

    ?>
</body>

</html>