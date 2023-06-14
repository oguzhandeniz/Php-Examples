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
        abstract class Tema
        {
            abstract public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri);
            abstract public function BodyAlani($Icerik);
            abstract public function FooterAlani($CopyMetni);
        }

        class UstAlan extends Tema
        {
            // Metod isimleri muhakkak aynı olmak zorundadır. Fakat parametre isimleri farklı olabilir.
            public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri)
            {
            }

            public function BodyAlani($Icerik)
            {
            }

            public function FooterAlani($CopyMetni)
            {
            }
        }
    ?>
</body>

</html>