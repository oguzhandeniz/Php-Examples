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

        $num1    =    5;
        $num2    =    8;

        echo $num1 + $num2 . "<br />";

        printf($num1 + $num2);

        echo "<br />";

        printf("%s + %s", $num1, $num2);



        echo "<br /><br /><br /><br />";



        $one    =    5;
        $two    =    8;

        echo $one + $two . "<br />";

        $resultOne    =    sprintf($one + $two);

        echo $resultOne;

        echo "<br />";

        $resultTwo    =    sprintf("%s + %s", $one, $two);

        echo $resultTwo;

    ?>
</body>

</html>