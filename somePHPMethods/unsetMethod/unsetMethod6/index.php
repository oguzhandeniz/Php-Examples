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

        $informations    =    array("name" => "Oğuzhan", "surname" => "Deniz", "city" => "İstanbul", "job" => "Back-End Developer");

        echo "BİLGİLER " . "<br>";
        echo "<pre>";
        print_r($informations);
        echo "</pre>";

        unset($informations["city"]);

        echo "BİLGİLER " . "<br>";
        echo "<pre>";
        print_r($informations); // Hata kodu döndürür, çünkü unset() metodu ile informations adındaki değişken yok edildi.
        echo "</pre>";
        
    ?>
</body>

</html>