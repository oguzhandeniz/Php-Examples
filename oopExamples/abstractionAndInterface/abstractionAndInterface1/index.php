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
        abstract	:	Belirtilecek olan herhangi bir sınıfı, soyut sınıf haline dönüştürmek için kullanılır.
        interface	:	Belirtilecek olan herhangi bir sınıfı, soyut arayüz sınıfı haline dönüştürmek için kullanılır.
        implements	:	Daha önceden oluşturulmuş olan herhangi bir arayüz sınıfını, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
        
        abstract 	:
        1. Soyut metodlar içerebilir.
        2. Normal metodlar içerebilir.
        3. Özellikler içerebilir.
        4. Sabitler içerebilir.
        5. public, private veya protected tanımlanabilir.
        6. Herhangi bir sınıf sadece tek bir içerebilir.'dan türeyebilir.
        
        interface	:
        1. Soyut metodlar içerebilir.
        2. public gönürlüğüne sahip olmak kaydıyla normal metodlar içerebilir.
        3. Sabitler içerebilir.
        4. Herhangi bir sınıfda birden fazla interface (arayüz) kullanılabilir.
        */

        // Soyut sınıf içerisinde bulunan metodlar muhakkak soyut sınıfdan türeyen alt sınıflarda da bulunmalıdır.
        abstract class Deneme
        {
            abstract public function Tanim($ParametreIcerigi);
        }

        class TestBir extends Deneme
        {
            public function Tanim($ParametreIcerigi)
            {
            }
        }

        class TestIki extends Deneme
        {
            public function Tanim($ParametreIcerigi)
            {
            }
        }


    ?>

</body>

</html>