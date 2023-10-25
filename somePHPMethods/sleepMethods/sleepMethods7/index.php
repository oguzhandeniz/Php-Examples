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
        /*
        sleep()				:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan saniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
        usleep()			:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan mikrosaniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
        time_nanosleep()	:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan saniye ve nanosaniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
        time_sleep_until()	:	Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan Unix zaman damgası geçerli zamanına kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
        */

        echo date("h:i:s") . "<br />";
	
	    time_nanosleep(4, 500000000); // 4.5 Saniyeye Eşit
	
	    echo date("h:i:s");
        
    ?>
</body>

</html>