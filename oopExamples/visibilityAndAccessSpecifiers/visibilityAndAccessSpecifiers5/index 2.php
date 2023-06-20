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
            protected $name            =    "Oğuzhan";
            protected const SURNAME    =    "DENİZ";

            public function Info()
            {
                $text = "1. İsim - Soyisim : " . $this->name . " " . self::SURNAME;
                return $text;
            }
        }

        class Two extends One
        {
            public function Info()
            {
                $text = "2. İsim - Soyisim : " . $this->name . " " . self::SURNAME;
                return $text;
            }
        }

        $obj = new Two;
        echo $obj->Info();

    ?>
</body>

</html>