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
        strlen()			:	Belirtilecek olan içeriğin karakter sayısını bularak, bulduğu değeri geriye döndürür.
        mb_strlen()			:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak karakter sayısını bularak, bulduğu değeri geriye döndürür.
        substr_count()		:	Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte kaç tane olduğunu bularak, bulduğu değeri geriye döndürür.
        mb_substr_count()	:	Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak kaç tane olduğunu bularak, bulduğu değeri geriye döndürür.
        str_word_count()	:	Belirtilecek olan içeriğin kelime sayısını bularak, bulduğu değeri geriye döndürür.
        */


        $value			=	"Karabük Üniversitesi - Bilgisayar Mühendisliği - Oğuzhan Deniz";
	
        echo $value . "<br />";
        
        $result			=	str_word_count($value, 0);
        
        echo $result . "<br /><br />";
        
        $processOne		=	str_word_count("Karabük Üniversitesi - Bilgisayar Mühendisliği - Oğuzhan Deniz", 1);
        
        echo "<pre>";
        print_r($processOne);
        echo "</pre>";
        
        echo "<br /><br />";
        
        $processTwo		=	str_word_count("Karabük Üniversitesi - Bilgisayar Mühendisliği - Oğuzhan Deniz", 2);
        
        echo "<pre>";
        print_r($processTwo);
        echo "</pre>";
        
	
	
	
    ?>
</body>

</html>