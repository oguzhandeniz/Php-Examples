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
        crypt()		:	Belirtilecek olan içeriğin tek yönlü gelişmiş bir şekilde şifrelemesini yaparak, şifrelediği değeri geriye döndürür.
        */
        
        $value		=	"Oğuzhan Deniz";
        $create	=	crypt($value); // Hata kodu döndürür, çünkü salt (tuz) kullanılmamıştır.
        echo $create;
	

    ?>
</body>

</html>