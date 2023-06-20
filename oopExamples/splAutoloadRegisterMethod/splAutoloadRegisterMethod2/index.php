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
        function KutuphaneleriCalistir($parameterValue)
        {

            $docName    =    $parameterValue . ".php";

            require_once($docName);
        }

        function ModelleriCalistir($parameterValue)
        {

            $docName    =    $parameterValue . ".php";

            require_once($docName);
        }

        function KontrolleriCalistir($parameterValue)
        {

            $docName    =    $parameterValue . ".php";

            require_once($docName);
        }

        spl_autoload_register("KutuphaneleriCalistir");
        spl_autoload_register("ModelleriCalistir");
        spl_autoload_register("KontrolleriCalistir");

        $one    =    new Kutuphaneler;
        echo $one->value . "<br />";

        $two    =    new Modeller;
        echo $two->value . "<br />";

        $three        =    new Kontroller;
        echo $three->value . "<br />";
        
    ?>

</body>

</html>