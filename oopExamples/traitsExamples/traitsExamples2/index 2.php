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
            public $name    =    "Oğuzhan";
            public const SURNAME   =    "DENİZ"; // Hata kodu döndürür, çünükü trait'ler tüm sınıf yapısının özelliklerine sahiptir fakat sadece const tanımı kullanılamaz.

            public function Func1()
            {

                $Text    =    "Karabük Üniversitesi";
                return $Text;
            }
        }

        class Example1
        {
            use Person;
        }

        $result    =    new Example1;

        echo $result->name . " ";
        echo $result->surname . "<br />";
        echo $result->Func1();
    ?>
</body>

</html>