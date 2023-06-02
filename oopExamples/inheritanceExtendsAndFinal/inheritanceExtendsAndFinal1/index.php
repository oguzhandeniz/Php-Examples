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

        class ExampleOne
        {

            public $name    =    "OĞUZHAN DENİZ";
        }

        class ExampleTwo extends ExampleOne
        {
        }

        $result        =    new ExampleTwo;

        echo $result->name;

    ?>
</body>

</html>