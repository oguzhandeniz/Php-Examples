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
        interface Deneme
        {
            public function Tanim($ParametreIcerigi); 
            // Hata kodu döndürür, çünkü soyut arayüz sınıfı içerisinde bulunan metodlar muhakkak soyut arayüz sınıfı tanımlanan sınıflarda da bulunmalıdır.

        }

        class Test implements Deneme
        {
        }

   
    ?>
</body>

</html>