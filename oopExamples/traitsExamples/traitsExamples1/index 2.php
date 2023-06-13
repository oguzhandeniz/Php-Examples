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
        /*
        trait		:	Sınıflar için özellik ve metod gruplarının oluşturulması için kullanılır. Düzenli bir çalışma avantajı sağlar.
        use			:	Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
        insteadof	:	Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih / seçim işlemleri için kullanılır.
        as			:	Sınıf için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirleme veya görünürlük atama işlemleri için kullanılır.
        */

        trait Person
        {
            public $name    =    "Oğuzhan";
            public $surname    =    "DENİZ";

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