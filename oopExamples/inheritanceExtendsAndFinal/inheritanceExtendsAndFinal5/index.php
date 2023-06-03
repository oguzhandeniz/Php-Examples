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
        // Kalıtım yoluyla türetilen sınıflarda öncelik sınıfın kendisindedir ve ardından bir üst sınıfa geçmektedir.
        class One
        {
            public function Example()
            {
                return "Halim Can";
            }
        }

        class Two extends One
        {
            public function Example()
            {
                return "Berkin";
            }
        }

        class Three extends Two
        {
            public function Example()
            {
                return "Ataberk";
            }
        }

        class Four extends Three
        {
            public function Example()
            {
                return "Mustafa";
            }
        }

        class Five extends Four
        {
            public function Example()
            {
                return "Oğuzhan";
            }
        }

        /*
         Örnek olarak Four sınıfını çalıştırdığımızda ekrana "Mustafa" yazacaktır. 
         Fakat Four sınıfının içerisinde herhangi bir metod bulunmasaydı ekrana
         bir üst sınıftan "Ataberk" i yazacaktı.
         */
        $result  =   new Four;

        echo $result->Example();

    ?>
</body>

</html>