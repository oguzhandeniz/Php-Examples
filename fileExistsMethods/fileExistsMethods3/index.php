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

        $docsExample    =    "docs/exampleFile";

        if (is_dir($docsExample)) {
            echo "Belirtilen İçerik Dizindir.";
        } else {
            echo "Belirtilen İçerik Dizin Değildir.";
        }
    ?>
</body>

</html>