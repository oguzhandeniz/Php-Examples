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

        class Deneme
        {
            public function Test($name, $surname)
            {
                $text = "Merhaba " . $name . " " . $surname . " Nasılsın ?";
                echo $text;
            }

            public function Test2($name = "Oğuzhan", $surname = "Deniz")
            {
                $text = "Merhaba " . $name . " " . $surname . " Nasılsın ?";
                echo $text;
            }
        }

        $islem    = new Deneme;
        $islem->Test("Berkin", "Topaloğlu");
        
        echo "<br>";

        $islem2   = new Deneme;
        $islem2->Test2("Halim Can", "Ocaklı");

    ?>
</body>

</html>