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
            private function Show()
            {
                $nameSurname   =    "Oğuzhan DENİZ";
                return $nameSurname;
            }
        }

        class Example
        {
            // private metod kullanılamayacağı için as ile public e çevirip kullanabiliriz. Tam tersi de geçerlidir.(public -> private)
            use Person { Person::Show as public; }
        }

        $result    =    new Example;

        echo $result->Show();

    ?>
</body>

</html>