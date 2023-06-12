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

    class Example
    {   
        // as kullanarak metod ismini değiştirebiliriz.
        use Person1 { Person1::Show as ShowInfo;  }
    }

    $result    =    new Example;

    echo $result->ShowInfo();

    ?>
</body>

</html>