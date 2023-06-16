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
            public function Arr()
            {
                return [
                    "First"  => One::Example(),
                    "Second" => Two::Example(),
                    "Third"  => Three::Example(),
                    "Fourth" => Four::Example(),
                    "Fifth"  => $this->Example()
                ];
            }
        }

        $result  =   new Five;

        echo "<pre>";
        print_r($result->Arr());
        echo "</pre>";


    ?>
</body>

</html>