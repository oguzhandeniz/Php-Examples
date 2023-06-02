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

            protected $name    =    "OĞUZHAN DENİZ";
        }

        class ExampleTwo extends ExampleOne
        {   
            // Protected değişkeni döndürmek için fonksiyon ile kullandık. Bu durum private için geçerli değildir.
            function turn(){
                return $this->name;
            }
        }

        $result        =    new ExampleTwo;

        echo $result->turn();



    ?>
</body>

</html>