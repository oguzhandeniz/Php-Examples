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

            public function TurnValue(){
                /* parent::Example(); yazdığımız zaman bir üst sınıfa gider.
                   'sınıfınadı'::Example(); yazdığımız zaman ise sınıfınadı yerine
                   yazdığımız sınıfa gider.
                   İstediğimiz sınıfa bu şekilde ulaşabiliriz.
                */
                $value1	=	Three::Example();
                return $value1;
            }
            
        }

        $result  =   new Five;

        echo $result->TurnValue();

    ?>
</body>

</html>