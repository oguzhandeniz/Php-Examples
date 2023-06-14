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

        interface Create
        {
            public function Olusturma($TabloDegeri, $BenzersizKimlik);
        }

        interface Read
        {
            public function Okuma($TabloDegeri, $BenzersizKimlik);
        }

        interface Update
        {
            public function Duzenleme($TabloDegeri, $BenzersizKimlik);
        }

        interface Delete
        {
            public function Silme($TabloDegeri, $BenzersizKimlik);
        }

        class Test implements Create, Read, Update, Delete
        {
            function Olusturma($TabloDegeri, $BenzersizKimlik)
            {
            }

            function Okuma($TabloDegeri, $BenzersizKimlik)
            {
            }

            function Duzenleme($TabloDegeri, $BenzersizKimlik)
            {
            }

            function Silme($TabloDegeri, $BenzersizKimlik)
            {
            }
        }


    ?>
</body>

</html>