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

        $name        =    "Oğuzhan Deniz";
        $colors    =    array("Sarı", "Lacivert", "Kırmızı", "Beyaz");
        setcookie("Info", "Karabük Üniversitesi");

        echo "<pre>";
        print_r(get_defined_vars());
        echo "</pre>";

    ?>
</body>

</html>