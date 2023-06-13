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

        trait NameSurname
        {
            public $name    =    "Oğuzhan";
            public $surname    =    "DENİZ";
        }

        trait Info
        {
            public function Info()
            {
                $Text    =    "Karabük Üniversitesi";
                return $Text;
            }
        }

        class Example1
        {
            use NameSurname, Info;
        }

        $result    =    new Example1;

        echo $result->name . " ";
        echo $result->surname . "<br />";
        echo $result->Info();
    ?>
</body>

</html>