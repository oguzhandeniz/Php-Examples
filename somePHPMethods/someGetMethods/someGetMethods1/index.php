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
        get_defined_vars()			:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan ve aynı zamanda yazılımcı tarafından da oluşturulmuş olan tüm değişkenlerin listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        get_defined_constants()		:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan ve aynı zamanda yazılımcı tarafından da oluşturulmuş olan tüm sabitlerin listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        get_defined_functions()		:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan ve aynı zamanda yazılımcı tarafından da oluşturulmuş olan tüm fonksiyonların listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        get_declared_classes()		:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan ve aynı zamanda yazılımcı tarafından da oluşturulmuş olan tüm sınıfların listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        get_declared_interfaces()	:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan ve aynı zamanda yazılımcı tarafından da oluşturulmuş olan tüm arayüzlerin listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        get_declared_traits()		:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan ve aynı zamanda yazılımcı tarafından da oluşturulmuş olan tüm niteliklerin listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        get_class_vars()			:	Kendisine parametre olarak verilen değer doğrultusunda sınıf içeriğini kontrol ederek, sınıf dahilinde bulunan değişken ve özellik isimleri ile birlikte değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. İşlemde public ve static tanımlı özellikler değerlendirilir.
        get_object_vars()			:	Kendisine parametre olarak verilen değer doğrultusunda sınıf içeriğini kontrol ederek, sınıf dahilinde bulunan değişken ve özellik isimleri ile birlikte değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. İşlemde yalnızca public tanımlı özellikler değerlendirilir.
        get_class_methods()			:	Kendisine parametre olarak verilen değer doğrultusunda sınıf içeriğini kontrol ederek, sınıf dahilinde bulunan metod isimlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. İşlemde public ve static tanımlı metodlar değerlendirilir.
        */

        echo "<pre>";
        print_r(get_defined_vars());
        echo "</pre>";

    ?>
</body>

</html>