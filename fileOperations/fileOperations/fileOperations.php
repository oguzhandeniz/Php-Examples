<?php
// touch('test2.txt');  // dosya oluşturma
// unlink('test.txt');  // dosya silme

/*
$file = fopen("text.txt","r");      // dosyayı okumak için açtık


while ($satir = fgets($file))
{
    echo $satir."<br>";
}
fclose($file);       // dosyayı kapatmak için kullanılır


echo filesize('test.txt');       // dosyanın boyutunu gösterir
$size = filesize("text.txt");
echo fread($file,$size);
*/


/*
$file = fopen("text.txt","a");      // dosyayının içine veri eklemek için açtık

fwrite($file,"\nYENİ VERİ!");
fputs($file,"\nYENİ VERİ2!")
*/


/*
$file = fopen("text.txt","r");

while (!feof($file))
{
    echo  fgets($file)."<br>";
}
fclose($file);
*/

file_put_contents("text.txt", "\nBu metin file put contents ile eklendi.", FILE_APPEND);  // dosyaya veri ekleyebiliriz.

?>