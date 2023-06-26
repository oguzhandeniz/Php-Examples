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

        $value        =    "info";

        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            echo "value E-Mail adresidir.";
        } else {
            echo "value E-Mail adresi değildir.";
        }
        

        echo "<br>";


        $value2		=	"info@extraegitim";
        
        if(filter_var($value2, FILTER_VALIDATE_EMAIL)){
            echo "value2 E-Mail adresidir.";
        }else{
            echo "value2 E-Mail adresi değildir.";
        }
        
    
        echo "<br>";


        $value3		=	"info@extraegitim.com";
        
        if(filter_var($value3, FILTER_VALIDATE_EMAIL)){
            echo "value3 E-Mail adresidir.";
        }else{
            echo "value3 E-Mail adresi değildir.";
        }


    ?>
</body>

</html>