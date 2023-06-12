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

        trait Person1
        {
            public function Show()
            {
                $nameSurname   =    "Oğuzhan DENİZ";
                return $nameSurname;
            }
        }

        trait Person2
        {
            public function Show()
            {
                $nameSurname   =    "Halim Can Ocaklı";
                return $nameSurname;
            }
        }

        class Example
        {
            use Person1, Person2 {
                Person1::Show insteadof Person2;

                Person1::Show as ShowPerson1;
                Person2::Show as ShowPerson2;
            }
        }

        $result    =    new Example;

        echo $result->ShowPerson1() . "<br>";
        echo $result->ShowPerson2();

    ?>
</body>

</html>