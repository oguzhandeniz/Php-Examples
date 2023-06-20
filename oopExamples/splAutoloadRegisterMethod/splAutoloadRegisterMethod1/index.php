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
        spl_autoload_register() : Döküman içerisinde belirtilecek olan sınıfın bulunmaması durumunda, belirtilecek olan parametreye göre bir sınıf dökümanını otomatik olarak belgeye dahil etmek / yüklemek için kullanılır.
        */

        function OtomatikCalistir($value)
        {

            $docName    =    $value . ".php";

            require_once($docName);
        }

        spl_autoload_register("OtomatikCalistir");

        $user    =    new Sinif;
        echo $user->Bilgiler();
    ?>

</body>

</html>