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
    
        class One
        {
            public $name            =    "Oğuzhan";
            public const SURNAME    =    "DENİZ";

            public function Info()
            {
                // Özellik standart ise this kullanılır. Sabit ise self ifadesi kullanılır.
                $text = "İsim- Soyisim : " . $this->name . " " . self::SURNAME;
                return $text;
            }
        }

        $obj    =    new One;
        echo $obj->Info();

    ?>
</body>

</html>