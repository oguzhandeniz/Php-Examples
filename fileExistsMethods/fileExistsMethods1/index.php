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
        file_exists()		:	Dosyanın belirtilecek olan path'e (yola) bağlı olarak varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        is_dir()			:	İçeriğin belirtilecek olan path'e (yola) bağlı olarak dizin olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        is_file()			:	İçeriğin belirtilecek olan path'e (yola) bağlı olarak dosya olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        is_readable()		:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın okunabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        is_writeable()		:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın yazılabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        is_writable()		:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın yazılabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        is_executable()		:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın çalıştırılabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        is_uploaded_file()	:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın yüklenebilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
        */

        $docOne    =    "example1.txt";

        if (file_exists($docOne)) {
            echo "Belirtilen Dosya Bulundu.";
        } else {
            echo "Belirtilen Dosya Bulunamıyor.";
        }

    ?>
</body>

</html>