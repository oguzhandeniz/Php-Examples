<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    /*
	base64_encode()		:	Belirtilecek olan içeriğin base64 (8 Bit'lik verilerin 64 Bit'lik verilere çevrilmesi) algoritması kodlamasını bularak, bulduğu değeri geriye döndürür.
	base64_decode()		:	Belirtilecek olan ve base64 (8 Bit'lik verilerin 64 Bit'lik verilere çevrilmesi) algoritması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
	*/

    $text        =    "Oğuzhan Deniz - İstanbul";
    echo $text . "<br />";
	$method		=	base64_encode($text);
	echo $method . "<br />";
	$turnMethod	=	base64_decode($method);
	echo $turnMethod;

    ?>
</body>

</html>