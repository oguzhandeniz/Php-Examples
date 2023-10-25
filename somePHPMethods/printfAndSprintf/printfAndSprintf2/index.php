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

        $value1        =    "Oğuzhan";
        printf("Hoşgeldiniz %s bey", $value1);


        echo "<br><br><br>";


        $value2        =    "Oğuzhan";
        $result        =    sprintf("Hoşgeldiniz %s bey", $value2);
        echo $result;

        echo "<br><br><br>";


        $name       =    "Oğuzhan";
        $surname    =    "Deniz";

        printf("Hoşgeldiniz %s %s bey", $name, $surname);


        echo "<br><br><br>";

        $name2      =    "Oğuzhan";
        $surname2    =    "Deniz";
        $result2        =    sprintf("Hoşgeldiniz %s %s bey", $name2, $surname2);

        echo $result2;

    ?>
</body>

</html>