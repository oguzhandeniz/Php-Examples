<?php
include("A.php");
include_once("B.php");
require("Siniflar/Oguz/Deneme/X.php");
require_once("Dosya/C.php");
include("Dosya/Test/D.php");
?>
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

        echo "<pre>";
        print_r(get_required_files());
        echo "</pre>";
        
    ?>
</body>

</html>