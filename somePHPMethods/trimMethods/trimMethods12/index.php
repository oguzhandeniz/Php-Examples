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

        /*
        trim()		:	Belirtilecek olan içeriğin, varsa başındaki ve sonundaki tüm boşlukları, sekmeleri ve yeni satır karakterlerini silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa başındaki ve sonundaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
        ltrim()		:	Belirtilecek olan içeriğin, varsa başındaki / solundaki tüm boşlukları, sekmeleri ve yeni satır karakterlerini silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa başındaki / solundaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
        rtrim()		:	Belirtilecek olan içeriğin, varsa sonundaki / sağındaki tüm boşlukları, sekmeleri ve yeni satır karakterlerini silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa sonundaki / sağındaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
        chop()		:	Belirtilecek olan içeriğin, varsa sonundaki / sağındaki tüm boşlukları, sekmeleri ve yeni satır karakterlerini silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa sonundaki / sağındaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
        */

        $name        =    "xxxOĞUZHANxxx";

	
        echo $name . "<br />";
        
        $lastValue	=	chop($name, "x");
        
        echo $lastValue;

    ?>
</body>

</html>