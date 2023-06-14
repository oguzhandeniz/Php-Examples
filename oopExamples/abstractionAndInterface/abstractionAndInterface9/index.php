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

        interface CRUD
        { 
            // CRUD : C : Create, R : Read, U : Update, D : Delete

            private function Create($TabloDegeri, $BenzersizKimlik); // Hata kodu döndürür, çünkü soyut Arayüz Sınıfı İçerisinde private kullanılamaz.
            public function Read($TabloDegeri, $BenzersizKimlik);
            protected function Update($TabloDegeri, $BenzersizKimlik); // Hata kodu döndürür, çünkü soyut Arayüz Sınıfı İçerisinde protected kullanılamaz.
            public function Delete($TabloDegeri, $BenzersizKimlik);
        }

        class Test implements CRUD
        {

            function Create($TabloDegeri, $BenzersizKimlik)
            {
            }

            function Read($TabloDegeri, $BenzersizKimlik)
            {
            }

            function Update($TabloDegeri, $BenzersizKimlik)
            {
            }

            function Delete($TabloDegeri, $BenzersizKimlik)
            {
            }
        }


    ?>
</body>

</html>