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
        
        $DegerBir        =    1;
        $DegerIki        =    10;
        $DegerUc        =    100;
        $DegerDort        =    1000;
        $DegerBes        =    10000;

        $AAA             =    sprintf("%d", $DegerBir);
        echo $AAA;
        echo "<br />";
        $BBB             =    sprintf("%d", $DegerIki);
        echo $BBB;
        echo "<br />";
        $CCC             =    sprintf("%d", $DegerUc);
        echo $CCC;
        echo "<br />";
        $DDD             =    sprintf("%d", $DegerDort);
        echo $DDD;
        echo "<br />";
        $EEE             =    sprintf("%d", $DegerBes);
        echo $EEE;

        echo "<br /><br /><br /><br /><br />";

        $FFF             =    sprintf("%05d", $DegerBir);
        echo $FFF;
        echo "<br />";
        $GGG             =    sprintf("%05d", $DegerIki);
        echo $GGG;
        echo "<br />";
        $HHH             =    sprintf("%05d", $DegerUc);
        echo $HHH;
        echo "<br />";
        $III             =    sprintf("%05d", $DegerDort);
        echo $III;
        echo "<br />";
        $JJJ             =    sprintf("%05d", $DegerBes);
        echo $JJJ;


    ?>
</body>

</html>