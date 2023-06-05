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
            // Example adındaki metodda final ifadesi kullanıldığı için artık bu metod ismi alt sınıf veya sınıflar yeniden kullanılamaz.!!!!!
            final public function Example()
            {
                return "Berkin";
            }
        }

        class Two extends One
        { 
            public function Example2()
            {
                return "Halim Can";
            }
        }

        class Three extends Two
        {   
            public function Example3()
            {
                return "Ataberk";
            }

            public function TurnValue()
            {
                $val1    =    parent::Example2();
                return $val1;
            }
        }

        $result        =    new Three;

        echo $result->TurnValue();


    ?>
</body>

</html>