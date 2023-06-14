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
        interface Deneme
        {

            public function Tanim($ParametreIcerigi);
        }

        class Test implements Deneme
        {
            function Tanim($ParametreIcerigi)
            {
            }
        }


    ?>
</body>

</html>