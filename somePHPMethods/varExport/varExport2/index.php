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

        $values		=	array("Oğuzhan Deniz", 2023, "İstanbul");
	
        echo "<pre>";
        print_r($values);
        echo "</pre>";
        
        echo "<br />";
        
        echo "<pre>";
        var_export($values);
        echo "</pre>";

    ?>
</body>

</html>