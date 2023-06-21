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
        $values	=	array("Masa", "Mavi", "Uçak");
	
        $control	=	empty($values[2]);
        
        if($control==true){
            echo 'values adındaki dizi içerisinde 5 anahtarı bulunmamaktadır.';
        }else{
            echo 'values adındaki dizi içerisinde 5 anahtarı bulunmaktadır.';
        }
    ?>
</body>

</html>