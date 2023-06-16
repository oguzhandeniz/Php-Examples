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

        class ExampleOne
        {
            public $name    =    "OĞUZHAN";
            public $surname =    "DENİZ";

            function Test()
            {
                $func1 = $this->name . " " . $this->surname;
                return $func1;
            }
        }

        class ExampleTwo extends ExampleOne
        {   

        }

        $result = new ExampleTwo;

        echo $result->Test();



    ?>
</body>

</html>