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

        $first		=	iconv_get_encoding("all");
        echo "<pre>";
        print_r($first);
        echo "</pre>";
        
        iconv_set_encoding("input_encoding", "ISO-8859-9");
        iconv_set_encoding("output_encoding", "ISO-8859-1");
        iconv_set_encoding("internal_encoding", "ISO-8859-2");	
        
        $last		=	iconv_get_encoding("all");
        echo "<pre>";
        print_r($last);
        echo "</pre>";
        
        $value		=	"Karabük Üniversitesi";
        echo $value;
        
    ?>
</body>

</html>