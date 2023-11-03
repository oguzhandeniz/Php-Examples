<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        /*
        crc32()		:	Belirtilecek olan içeriğin crc32 temsilini hesaplayıp bularak, bulduğu değeri geriye döndürür.
        */
        
        $pass		=	"Oğuzhan Deniz";
        $create	=	crc32($pass);
        echo $create;
	

    ?>
</body>

</html>