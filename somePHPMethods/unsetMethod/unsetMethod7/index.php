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

        $_SESSION["user"]        =    "Oğuzhan";
        $_SESSION["email"]            =    "info@oguzhandeniz.com";

        echo $_SESSION["user"] . "<br />";
        echo $_SESSION["email"] . "<br /><br />";


        unset($_SESSION["user"]);
        

        echo $_SESSION["user"] . "<br />"; // Hata kodu döndürür, çünkü unset() metodu ile user adındaki session (oturum) yok edildi.
        echo $_SESSION["email"];

    ?>
</body>

</html>