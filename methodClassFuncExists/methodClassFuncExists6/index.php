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

        class AAA
        {
        }

        class BBB extends AAA
        {
        }

        $classOne    =    new    AAA;
        $classTwo    =    new    BBB;

        if (is_subclass_of($classTwo, "AAA")) {
            echo "BBB adındaki sınıf AAA adındaki sınıfın subclass'ıdır. (alt sınıfıdır.)";
        } else {
            echo "BBB adındaki sınıf AAA adındaki sınıfın subclass'ı (alt sınıfı) değildir.";
        }



        echo "<br>";
        echo "<br>";



        class CCC
        {
        }

        class DDD extends CCC
        {
        }

        $SinifBir    =    new    CCC;
        $SinifIki    =    new    DDD;

        if (is_subclass_of($SinifBir, "DDD")) {
            echo "CCC adındaki sınıf DDD adındaki sınıfın subclass'ıdır. (alt sınıfıdır.)";
        } else {
            echo "CCC adındaki sınıf DDD adındaki sınıfın subclass'ı (alt sınıfı) değildir.";
        }


        echo "<br>";
        echo "<br>";


        
        class KKK {
		
        }
        
        class LLL extends KKK {
            
        }
        
        if(is_subclass_of("LLL", "KKK")){
            echo "LLL adındaki sınıf KKK adındaki sınıfın subclass'ıdır. (alt sınıfıdır.)";
        }else{
            echo "LLL adındaki sınıf KKK adındaki sınıfın subclass'ı (alt sınıfı) değildir.";
        }
    ?>
</body>

</html>