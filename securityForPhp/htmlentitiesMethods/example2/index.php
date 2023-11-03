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
        htmlentities()				:	Belirtilecek olan içerikte bulunabilecek olan tüm özel karakterleri düz metin halinde okunabilir HTML metnine dönüştürerek, dönüştürdüğü değeri geriye döndürür.
            ENT_COMPAT				:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
            ENT_QUOTES				:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de dönüştürmek için kullanılır.
            ENT_NOQUOTES			:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
        html_entity_decode()		:	Belirtilecek olan ve htmlentities metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan tüm özel karakterleri, orjinal karakter haline geri dönüştürerek, dönüştürdüğü değeri geriye döndürür.
            ENT_COMPAT				:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır. (Varsayılan)
            ENT_QUOTES				:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de geri dönüştürmek için kullanılır.
            ENT_NOQUOTES			:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
	*/

        $value        =    "<b>PHP COURSE</b> & <i> Oğuzhan DENİZ </i>";
        echo $value . "<br /><br />";

        $result		=	htmlentities($value, ENT_QUOTES);
        echo $result . "<br /><br />";
        
        $result2		=	html_entity_decode($result);
        echo $result2 . "<br /><br />";
        
        $result3		=	html_entity_decode($result, ENT_COMPAT);
        echo $result3 . "<br /><br />";
        
        $result4		=	html_entity_decode($result, ENT_QUOTES);
        echo $result4 . "<br /><br />";
        
        $result5		=	html_entity_decode($result, ENT_NOQUOTES);
        echo $result5;

    ?>
</body>

</html>