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
            var $IsimSoyisim        =    "Oğuzhan DENİZ";
            public const HARFLER    =    "ABC";
            public $RakamlarBir        =    "12";
            private $RakamlarIki    =    "34";
            protected $RakamlarUc    =    "56";
            static $RakamlarDort    =    "78";
            public function IslevBir()
            {
            }
            private function IslevIki()
            {
            }
            protected function IslevUc()
            {
            }
            static function IslevDort()
            {
            }
        }

	
        echo "<pre>";
        print_r(get_class_methods("Deneme"));
        echo "</pre>";


    ?>
</body>

</html>