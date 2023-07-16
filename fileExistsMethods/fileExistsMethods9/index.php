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

        $oguz    =    "oguz.txt";

        if (is_executable($oguz)) {
            echo "Belirtilen Dosya Çalıştırılabilir Bir Dosyadır.";
        } else {
            echo "Belirtilen Dosya Çalıştırılabilir Bir Dosya Değildir.";
        }

    ?>
</body>

</html>