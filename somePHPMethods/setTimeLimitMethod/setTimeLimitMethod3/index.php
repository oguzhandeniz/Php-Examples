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
        set_time_limit()	:	Çalışmakta olan PHP dosyası için belirtilecek olan değer doğrultusunda azami / maksimum çalışma süresi değeri atamak için kullanılır.
        */

        echo "Varsayılan max_execution_time yönergesi değeri : " . ini_get("max_execution_time") . " saniye<br />";
        set_time_limit(5); // 5 Saniye
        echo "Atanan max_execution_time yönergesi değeri : " . ini_get("max_execution_time") . " saniye<br /><br />";

        $Sayi    =    1;
        while ($Sayi <= 1000) {
            echo $Sayi . " ";
            sleep(2);
            $Sayi++;
        }

        echo "<br />Oğuzhan Deniz";
    ?>
</body>

</html>