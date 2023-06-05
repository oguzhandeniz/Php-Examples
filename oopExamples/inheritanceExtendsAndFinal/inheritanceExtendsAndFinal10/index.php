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
        extends		:	Bir sınıfı başka bir sınıftan türetmek istediğimiz zaman kullanılır.
        final		:	En son kullanılan sınıftır ve türeyen son sınıf anlamını taşır. Ayrıca metodlar üzerinde de kullanılabilir ve final tanımlanırsa bağlı sınıflar içerisinde aynı metod adı kullanılamaz.
        */

        class One
        {

            public function Example()
            {
                return "Berkin";
            }
        }

        final class Two extends One
        { // Two adındaki sınıfda final ifadesi kullanıldığı için artık bu sınıfdan alt sınıf veya sınıflar türetilemez. Hata döndürür.!!!!!

            public function Example()
            {
                return "Halim Can";
            }
        }

        class Three extends One
        {

            public function Example()
            {
                return "Ataberk";
            }

            public function TurnValue()
            {
                $val1    =    parent::Example();
                return $val1;
            }
        }

        $result        =    new Three;

        echo $result->TurnValue();


    ?>
</body>

</html>