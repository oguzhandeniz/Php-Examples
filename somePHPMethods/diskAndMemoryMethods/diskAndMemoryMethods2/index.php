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
        disk_total_space()		:	Kullanılmakta olan server'ın (sunucunun), belirtilecek olan sürücüsü doğrultusunda toplam disk kapasitesinin değerini byte cinsinden bularak, bulduğu değeri geriye döndürür.
        disk_free_space()		:	Kullanılmakta olan server'ın (sunucunun), belirtilecek olan sürücüsü doğrultusunda kalan kullanılabilir disk kapasitesinin değerini byte cinsinden bularak, bulduğu değeri geriye döndürür.
        memory_get_usage()		:	Çalışmakta olan PHP dosyası için sistemden ayrılan memory (hafıza) miktarı değerini byte cinsinden bularak, bulduğu değeri geriye döndürür.
        */

        $Deger	=	memory_get_usage();
	
        echo "Çalışmakta olan PHP dosyası için sistemden ayrılan memory (hafıza) miktarı : " . $Deger . " Byte";

        ?>
</body>

</html>