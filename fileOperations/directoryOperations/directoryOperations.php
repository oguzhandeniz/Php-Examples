<?php
/*
// mkdir('oguz'); // dizin oluşturmak için kullanılır.

$dizin_adi = 'c/b/a';

if (file_exists($dizin_adi))
{
    echo "Bu dizin zaten oluşturulmuş.";
}
else
{
    if (mkdir($dizin_adi, 0777, true))
    {
        echo "Dizin oluşturuldu.";
    }
    else
    {
        echo "Bir hata meydana geldi.";
    }
}
*/

$dizin_adi = 'c/b/a'; // dizin silmek için kullanılır.
$sonuc = rmdir($dizin_adi);

if ($sonuc) echo "Dosya silindi.";
else echo "Dosya silinemedi.";
?>