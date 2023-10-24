<?php
    session_start();
    ob_start(); // Sessionlar Başlatıldı ve Aynı Zamanda Çıktı Tamponlamasıda Başlatıldı.
?>
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
        ob_start()			:	PHP sayfası dahilinde çıktı tamponlamasını başlatır.
        ob_end_clean()		:	PHP sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlamasını siler ve çıktı tamponlamasını kapatır.
        ob_end_flush()		:	PHP sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlamasını boşaltır ve çıktı tamponlamasını kapatır.
        ob_get_contents()	:	PHP sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlaması içeriğini bularak, bulduğu değeri geriye döndürür.
        */

        echo "Hello World!<br />";
	
        $DepoBir	=	ob_get_contents(); // Çıktı tamponuna Hello World!<br /> içeriği eklendi.
        
        echo "Oğuzhan Deniz<br /><br />";
        
        $DepoIki	=	ob_get_contents(); // Çıktı tamponuna Hello World!<br /> Oğuzhan Deniz<br /><br /> içeriği eklendi.
        
        ob_end_flush();
        
        echo $DepoIki;
    ?>
</body>

</html>
<?php
    ob_end_flush(); // Çıktı Tamponlaması Boşaltıldı ve Kapatıldı.
?>