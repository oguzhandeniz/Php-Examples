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
        class Example2
        {
            public function Func1()
            {
                $result    =    "Hello World 1";
                return $result;
            }

            public function Func2()
            {
                $result    =    "Hello World 2";
                return $result;
            }
        }

        $nesne            =    new Example2;

        $metinBir        =    $nesne->Func1();
        echo $metinBir . "<br />";

        $metinIki        =    $nesne->Func2();
        echo $metinIki;
    ?>
</body>

</html>