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
        htmlspecialchars()			:	Belirtilecek olan içerikte bulunabilecek olan özel karakterleri (&, ', ", <, >) düz metin halinde okunabilir HTML metnine dönüştürerek, dönüştürdüğü değeri geriye döndürür.
            ENT_COMPAT				:	htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
            ENT_QUOTES				:	htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de dönüştürmek için kullanılır.
            ENT_NOQUOTES			:	htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
        htmlspecialchars_decode()	:	Belirtilecek olan ve htmlspecialchars metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan özel karakterleri (&, ', ", <, >), orjinal karakter haline geri dönüştürerek, dönüştürdüğü değeri geriye döndürür.
            ENT_COMPAT				:	htmlspecialchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır. (Varsayılan)
            ENT_QUOTES				:	htmlspecialchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de geri dönüştürmek için kullanılır.
            ENT_NOQUOTES			:	htmlspecialchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
        */

        $value        =    "<b>PHP COURSE</b> & <i> Oğuzhan DENİZ </i>";
        echo $value . "<br /><br />";

        $result        =    htmlspecialchars($value);
        echo $result;


    ?>
</body>

</html>