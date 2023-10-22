<?php
include("A.php");
require("B.php");
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
        print_r(get_included_files());
        echo "</pre>";

        
    ?>
</body>

</html>