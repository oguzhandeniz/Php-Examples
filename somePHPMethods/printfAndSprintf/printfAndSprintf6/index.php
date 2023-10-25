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
            
        $value3		=	"OGUZHAN";
        printf("%'*10s", $value3);
            
        echo "<br /><br /><br />";

        $value4		=	"OGUZHAN";
        printf("%-'*10s", $value4);

        echo "<br /><br /><br />";

        $value5		=	"OGUZHAN";
	    printf("%100s", $value5);

        echo "<br /><br /><br />";

        
    ?>
</body>

</html>