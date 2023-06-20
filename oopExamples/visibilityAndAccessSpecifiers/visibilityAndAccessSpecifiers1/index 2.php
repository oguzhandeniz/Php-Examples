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
        public		:	Genel. Her yerden erişilebilir.
        private		:	Özel. Yanlızca sınıf içerisinden erişilebilir.
        protected	:	Korumalı. Sınıf içerisinden ve türetilen sınıflardan erişilebilir.
        
        static		:	Sabit. Sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.
        
        $this		:	Bu sınıfda şeklinde sınıfı işaret etmek için kullanılır.
        self::		:	Kendi sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
        parent::	:	Ebeveyn sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
        */

        class One
        {

            public $name            =    "Oğuzhan";
            public const SURNAME    =    "DENİZ";

            public function Info()
            {
                $text    =    "Karabük Üniversitesi - Bilgisayar Mühendisliği";
                return $text;
            }
        }

        $obj    =    new One;

        echo "İsim Soyisim : " . $obj->name . " " . One::SURNAME . " " . $obj->Info();

    ?>
</body>

</html>