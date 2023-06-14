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
            public function Create($TabloDegeri, $BenzersizKimlik);
            public function Read($TabloDegeri, $BenzersizKimlik);
            public function Update($TabloDegeri, $BenzersizKimlik);
            public function Delete($TabloDegeri, $BenzersizKimlik);
        }

        abstract class Tema implements CRUD
        {
            public function Create($TabloDegeri, $BenzersizKimlik)
            {
            }

            public function Read($TabloDegeri, $BenzersizKimlik)
            {
            }

            public function Update($TabloDegeri, $BenzersizKimlik)
            {
            }

            public function Delete($TabloDegeri, $BenzersizKimlik)
            {
            }

            abstract public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri);
        }

        class UstAlan extends Tema
        {
            function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri)
            {
            }
        }

    ?>
</body>

</html>