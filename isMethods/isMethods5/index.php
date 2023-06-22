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

        $doc1        =    "Ornek.txt";
	
        if(is_resource($doc1)){
            echo '$doc1 adındaki değişkenin içeriği dosya bir resource (kaynak) içeriktir.';
        }else{
            echo '$doc1 adındaki değişkenin içeriği dosya bir resource (kaynak) içerik değildir.';
        }


        echo "<br>";
        echo "<br>";


        function Deneme(){
		
        }
        
        if(is_callable("Deneme")){
            echo 'Deneme adındaki fonksiyon callable (geri çağırımlar / geri çağırabilenler) içeriktir.';
        }else{
            echo 'Deneme adındaki fonksiyon callable (geri çağırımlar / geri çağırabilenler) içerik değildir.';
        }


    ?>
</body>

</html>