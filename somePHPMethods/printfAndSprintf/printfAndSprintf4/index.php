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

        $deger1        =    99.99;
        printf("Borcunuz %f TL'dir.", $deger1);


        echo "<br /><br /><br />";


        $deger2        =    99.99;
        $result1         =    sprintf("Borcunuz %f TL'dir.", $deger2);
        echo $result1;


        echo "<br /><br /><br />";


        $deger3		=	99.99;
        printf("Borcunuz %0.2f TL'dir.", $deger3);


        echo "<br /><br /><br />";


        $deger4		=	99.99;
        $result2		=	sprintf("Borcunuz %0.2f TL'dir.", $deger4);
        echo $result2;


        echo "<br /><br /><br />";


        
        $deger5		=	99.99;
        printf("Borcunuz %F TL'dir.", $deger5);


        echo "<br /><br /><br />";


        $deger6		=	99.99;
        $result3		=	sprintf("Borcunuz %F TL'dir.", $deger6);
        echo $result3;


        echo "<br /><br /><br />";

        $deger7		=	99.99;
        printf("Borcunuz %0.2F TL'dir.", $deger7);


        echo "<br /><br /><br />";


        $deger8		=	99.99;
        $result4		=	sprintf("Borcunuz %0.2F TL'dir.", $deger8);
        echo $result4;


        echo "<br /><br /><br />";


        $deger9		=	"Oğuzhan Deniz";
	    printf("Merhaba %0.6s", $deger9);


        echo "<br /><br /><br />";


        $deger10		=	"Oğuzhan Deniz";
	    $result5 		=	sprintf("Merhaba %0.6s", $deger10);
	    echo $result5;



        echo "<br /><br /><br />";


        $OHarfi		=	0117; // O
	    $GHarfi		=	0107; // G
	    $UHarfi		=	0125; // U
	    $ZHarfi		=	0132; // Z
	    $HHarfi		=	0110; // H
	    $AHarfi		=	0101; // A
        $NHarfi     =   0116; // N

	    printf("İsim : %c%c%c%c%c%c%c", $OHarfi, $GHarfi, $UHarfi, $ZHarfi, $HHarfi, $AHarfi, $NHarfi);




        echo "<br /><br /><br />";


        $result 			=	sprintf("İsim : %c%c%c%c%c%c%c", $OHarfi, $GHarfi, $UHarfi, $ZHarfi, $HHarfi, $AHarfi, $NHarfi);
	    echo $result;
    ?>
</body>

</html>