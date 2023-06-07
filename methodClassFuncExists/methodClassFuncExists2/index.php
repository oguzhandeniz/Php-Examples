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
        class HelloWorld
        {
        }

        if (class_exists("HelloWorld")) {
            echo "HelloWorld adında sınıf bulunmaktadır.";
        } else {
            echo "HelloWorld adında sınıf bulunmamaktadır.";
        }



        echo "<br>";
        echo "<br>";




        if (class_exists("Example")) {
            echo "Example adında sınıf bulunmaktadır.";
        } else {
            echo "Example adında sınıf bulunmamaktadır.";
        }

    ?>
</body>

</html>