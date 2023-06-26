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


        $value        =    "Oğuzhan Deniz.";

        if (filter_var($value, FILTER_VALIDATE_INT)) {
            echo "Sınanan içerik integer veri türündedir.";
        } else {
            echo "Sınanan içerik integer veri türünde değildir.";
        }


    ?>
</body>

</html>