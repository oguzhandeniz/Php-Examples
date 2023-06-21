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
            public $name = "Computer Engineering";

            public function Info()
            {
                $text = $this->name;
                return $text;
            }
        }

        class Two extends One
        {
            public function Info()
            {
                $text = "Karabük Üniversitesi " . parent::Info();
                return $text;
            }
        }

        $obj = new Two;
        echo $obj->Info();

    ?>
</body>

</html>