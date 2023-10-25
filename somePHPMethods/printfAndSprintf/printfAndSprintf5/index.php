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

        $value		=	1980;
        printf("Değerin Binary (İkilik) Sayı Sistemi Karşılığı %b", $value);

        echo "<br /><br /><br />";

        printf("Değerin Octal (Sekizlik) Sayı Sistemi Karşılığı %o", $value);
        
        echo "<br /><br /><br />";
	
	    printf("Değerin Hexadecimal (Onaltılık) Sayı Sistemi Karşılığı %x", $value);

        echo "<br /><br /><br />";

        printf("Değerin Hexadecimal (Onaltılık) Sayı Sistemi Karşılığı %X", $Deger);

        echo "<br /><br /><br />";

        printf("Değerin Bilimsel Gösterim Karşılığı %e", $Deger);
	
        echo "<br /><br /><br />";

        printf("Değerin Bilimsel Gösterim Karşılığı %E", $Deger);
	
        echo "<br /><br /><br />";

        

        $value2		=	19801980198019801980;
	    printf("Değerin Kısa Gösterim Karşılığı %g", $value2);
        echo "<br /><br /><br />";
        printf("Değerin Kısa Gösterim Karşılığı %G", $Deger);
        echo "<br /><br /><br />";


    ?>
</body>

</html>