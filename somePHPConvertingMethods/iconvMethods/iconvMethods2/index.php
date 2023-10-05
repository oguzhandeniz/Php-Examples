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
        iconv()					:	Belirtilecek olan içeriği, belirtilecek olan karakter kodlaması dahilinde dönüştürerek, karakter kodlaması dönüştürülmüş olan değeri geriye döndürür.
            TRANSLIT 	:	Belirtilecek olan içerikte gösterilmeyen bir karaktere / karakterlere rastlanacak olursa, ilgili krakterin / karakterlerin yerine benzer bir karakter / kural dışı karakter değeri yerleştirmek için kullanılır.
            IGNORE 		:	Belirtilecek olan içerikte gösterilmeyen bir karaktere / karakterlere rastlanacak olursa, ilgili karakter / karakterler yok sayılır veya ilgili karakterin / karakterlerin yerine kural dışı karakter değeri yerleştirmek için kullanılır.
        iconv_get_encoding()	:	PHP sayfası dahilinde kullanılmakta olan karakter kodlama bilgileri listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. Ayrıca belirtilecek olan değer doğrultusunda tüm karakter kodlama bilgisi yerine sadece ilgili karakter kodlaması bilgisi değerinide döndürebilir.
        iconv_set_encoding()	:	PHP sayfası dahilinde kullanılmakta olan karakter kodlama türüne, belirtilecek olan karakter kodlama kümesini atamak için kullanılır.
        */

        $text        =    "Karabük Üniversitesi - Bilgisayar Mühendisliği - Oğuzhan Deniz";
        echo $text . "<br />";
        $result		=	iconv("UTF-8", "ISO-8859-1", $text); // Hata kodu döndürür, çünkü kural dışı karakter algılayacaktır. Önemli açıklama : içerikte Türkçe karakter var.
        echo $result;

    ?>
</body>

</html>