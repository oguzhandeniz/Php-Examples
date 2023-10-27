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
        curl_setopt()		:	Kendisine parametre olarak verilen değer doğrultunda başlatılmış bir CURL oturumuna seçenek eklemek için kullanılır.
        curl_setopt_array()	:	Kendisine parametre olarak verilen değer doğrultunda başlatılmış bir CURL oturumuna dizi halinde seçenek / seçenekler eklemek için kullanılır.
        
        CURLOPT_URL				:	Başlatılmış bir CURL oturumunda içeriğine ulaşılmak istenilen URL adresini belirtmek için kullanılır.
        CURLOPT_RETURNTRANSFER	:	Başlatılmış bir CURL oturumunda istenilen URL'den elde edilen içeriğin doğrudan ekrana çıktılanmasını durdurarak belirtilecek olan değişkene aktarılmasını sağlamak için kullanılır.
        CURLOPT_TIMEOUT			:	Başlatılmış bir CURL oturumunda maksimum çalıştırılabilirsilik süresini saniye cinsinden belirtmek için kullanılır.
        CURLOPT_TIMEOUT_MS		:	Başlatılmış bir CURL oturumunda maksimum çalıştırılabilirsilik süresini milisaniye cinsinden belirtmek için kullanılır. (1 Saniye = 1000 Milisaniye'dir.)
        */
        
        $Oturum		=	curl_init();
        curl_setopt_array($Oturum, [
            CURLOPT_URL => "https://www.mynet.com",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT_MS => 500
        ]);
        $Sonuc		=	curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;
        

    ?>
</body>

</html>