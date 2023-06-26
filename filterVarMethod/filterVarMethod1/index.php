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
        filter_var()	:	Kendisine parametre olarak verilen değer doğrultusunda içeriği filtreleyerek, içeriğin filtrelemeye uygun olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        
        FILTER_VALIDATE_BOOLEAN			:	Belirtilecek olan içeriğin boolean (mantıksal) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner. True değerleri : true, 1, on, yes False değerleri : false, 0, off, no
        FILTER_VALIDATE_INT				:	Belirtilecek olan içeriğin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        FILTER_VALIDATE_IP				:	Belirtilecek olan içeriğin IP adresi türünde olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
            FILTER_FLAG_IPV4			:	Belirtilecek olan IP adresinin IPV4 uyumlu olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
            FILTER_FLAG_IPV6			:	Belirtilecek olan IP adresinin IPV6 uyumlu olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
        FILTER_VALIDATE_EMAIL			:	Belirtilecek olan içeriğin E-Mail adresi türünde olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
        FILTER_VALIDATE_URL				:	Belirtilecek olan içeriğin URL (Uniform Resource Locator) (nizami kaynak bulucu) adresi türünde olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
            FILTER_FLAG_SCHEME_REQUIRED	:	Belirtilecek olan URL (Uniform Resource Locator) (nizami kaynak bulucu) adresinin RFC (Request for Comment) (yorum talebi) uyumlu olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
            FILTER_FLAG_HOST_REQUIRED	:	Belirtilecek olan URL (Uniform Resource Locator) (nizami kaynak bulucu) adreside host (barındırma) adının olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
            FILTER_FLAG_PATH_REQUIRED	:	Belirtilecek olan URL (Uniform Resource Locator) (nizami kaynak bulucu) adresinin path (yol) değerinin olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
            FILTER_FLAG_QUERY_REQUIRED	:	Belirtilecek olan URL (Uniform Resource Locator) (nizami kaynak bulucu) adresinin query (sorgu) değerinin olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
        */

        $value        =    "Oğuzhan Deniz İstanbul'da yaşamaktadır.";

        if (filter_var($value, FILTER_VALIDATE_BOOLEAN)) {

            echo "Sınanan içerik boolean veri türündedir.";

        } else {

            echo "Sınanan içerik boolean veri türünde değildir.";
            
        }


    ?>
</body>

</html>