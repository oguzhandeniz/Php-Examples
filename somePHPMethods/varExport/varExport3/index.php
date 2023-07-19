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

        class Example
        {

            public $name    =    "Oğuzhan";
            public $surname    =    "DENİZ";

            public function Infos()
            {

                $date    =    2019;
                $city    =    "İstanbul";

                $turn    =    $date . "<br />" . $city;
                return $turn;
            }
        }

        $result    =    new Example;

        echo $result->name . " " . $result->surname . "<br />";
        echo $result->Infos() . "<br /><br /><br /><br />";

        var_export($result);
        echo "<br />";
        var_export($result->Infos());

    ?>
</body>

</html>