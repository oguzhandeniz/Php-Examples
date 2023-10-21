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
        eval()		:	Belirtilecek olan içeriğin, PHP kodu olarak algılanmasını sağlar ve kodu çalıştırarak, oluşan değeri geriye döndürür.
        exec()		:	PHP dosyası dahilinde belirtilecek olan komutu çalıştırır ve işlem sonucunda bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        */

        $icerik		=	"A'dan Z'ye PHP Görsel Eğitim Seti";
	    $egitmen	=	"Volkan Alakent";
	    $text		=	'İzlediğiniz Ders, $icerik\'ne ait olup eğitimenimiz $egitmen\'tir.';
	
	    echo $text . "<br />";
	
	    eval("\$result = \"$text\";");
	
	    echo $result;

    ?>
</body>

</html>