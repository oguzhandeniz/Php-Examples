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
        wordwrap()	:	Belirtilecek olan içeriğe, belirtilecek olan karakter sıra numarası aralıklarına göre, belirtilecek olan değer / değerleri ekleyerek, eklenmiş olan değeri geriye döndürür.
        str_pad()	:	Belirtilecek olan içeriğin, belirtilecek olan değer / değerler doğrultusunda, başına, sonuna veya hem başına hemde sonuna değer ekleyerek, eklenmiş olan değeri geriye döndürür.
            STR_PAD_LEFT	:	Belirtilecek olan içeriğin başına / soluna değer eklemek için kullanılır.
            STR_PAD_RIGHT	:	Belirtilecek olan içeriğin sonuna / sağına değer eklemek için kullanılır.
            STR_PAD_BOTH	:	Belirtilecek olan içeriğin hem başına / soluna, hemde sonuna / sağına değer eklemek için kullanılır.
        */

        
        $text		=	"Karabük Üniversitesi";
	
        echo $text . "<br />";
        
        $method		=	str_pad($text, 30, "-", STR_PAD_BOTH);
        
        echo $method;
	
    ?>
</body>

</html>