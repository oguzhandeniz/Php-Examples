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
        }

        class Three extends Two
        {
        }

        class Four extends Three
        {
        }

        class Five extends Four
        {
        }

        /*
        Sınıfların içerisi boş olduğu için ata sınıflara doğru gidecektir ve ekrana "Halim Can" yazacaktır.         */
        $result  =   new Five;

        echo $result->Example();

    ?>
</body>

</html>