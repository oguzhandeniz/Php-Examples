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

        trait Person
        {
            abstract public function Show();
        }

        class Example
        {
            use Person;

            public function Show()
            {
                $nameSurname   =    "Oğuzhan DENİZ";
                return $nameSurname;
            }
        }

        $result    =    new Example;

        echo $result->Show();

    ?>
</body>

</html>