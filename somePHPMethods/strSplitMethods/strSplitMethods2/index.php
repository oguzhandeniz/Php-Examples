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
        str_split()	:	Belirtilecek olan içeriği, belirtilecek olan karakter sayısına göre bölerek, bölümleme işlemi sonucunda oluşan değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
        mb_split()	:	Belirtilecek olan içeriği, belirtilecek olan düzenli ifade dahilinde bölerek, bölümleme işlemi sonucunda oluşan değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
        strtok()	:	Belirtilecek olan içeriği, belirtilecek olan ayraç doğrultusunda kontrol ederek, eşleşen ayraç değeri olması durumunda, ilk eşleşen ayracın öncesinde bulunan değeri bularak, bulduğu değeri geriye döndürür. Ayrıca eşleşen tüm ayraçların öncesinde bulunan değerlerde herhangi bir döngü yardımı ile tek tek elde edilebilir.
        strpbrk()	:	Belirtilecek olan içeriği, belirtilecek olan ayraç doğrultusunda kontrol ederek, eşleşen ayraç değeri olması durumunda, ilk eşleşen ayracın sonrasında bulunan değeri bularak, bulduğu değeri geriye döndürür.
        */

        $cardNumber    =    "1234567890123456";

        echo $cardNumber . "<br />";

        $method            =    str_split($cardNumber, 4);
	
        echo "İşlem Yapılan Kredi Kartı : ";
        
        foreach($method as $value){
            echo $value . " ";
        }
        
    ?>
</body>

</html>