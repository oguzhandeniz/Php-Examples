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
        str_replace()		:	Belirtilecek olan içerikte, belirtilecek olan değer / değerleri arayarak, eşleşen değer / değerler olması durumunda, belirtilecek olan değer / değerlerle değiştirerek, değiştirilmiş olan değeri geriye döndürür. Ayrıca belirtilecek olan ve eşleşen tüm değer / değerlerin sayısınıda geriye döndürebilir.
        str_ireplace()		:	Belirtilecek olan içerikte, belirtilecek olan değer / değerleri büyük harf / küçük harf ayrımı olmaksızın arayarak, eşleşen değer / değerler olması durumunda, belirtilecek olan değer / değerlerle değiştirerek, değiştirilmiş olan değeri geriye döndürür. Ayrıca belirtilecek olan ve eşleşen tüm değer / değerlerin sayısınıda geriye döndürebilir.
        strtr()				:	Belirtilecek olan içerikte, belirtilecek olan dizi türündeki değer / değerleri arayarak, eşleşen değer / değerler olması durumunda, belirtilecek olan değer / değerlerle değiştirerek, değiştirilmiş olan değeri geriye döndürür.
        substr_replace()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre, istenilen değer / değerleri ekleyerek / silerek / değiştirerek, yeni oluşturulmuş olan değeri geriye döndürür.
        nl2br()				:	Belirtilecek olan içerikte bulunabilecek olan tüm özel satır sonlandırma karakterlerini (\n) HTML satır sonlandırma karakterlerine (<br />) değiştirerek, değiştirilmiş olan değeri geriye döndürür.
        */
	
        $text				=	"Oğuzhan Deniz\nVBack-End\nComputer Engineering\nİstanbul\n2023";
	
        echo $text . "<br /><br /><br /><br />";
        
        $method				=	nl2br($text);
        
        echo $method;
            
    ?>
</body>

</html>