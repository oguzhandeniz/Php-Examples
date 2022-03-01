<?php
// String Fonksiyonları
echo "<pre>";

$text = "Oguzhan";
$text2 = "Oğuzhan";
echo strlen($text) . "<br>"; // Metnin uzunluğunu yazdırır. ( byte olarak )
echo strlen($text2) . "<br>"; // Türkçe karakterleri 2 byte olarak yazdırdı.
echo mb_strlen($text2);    // Metnin uzunluğunu yazdırır. ( türkçe karakter olarak girinleride 1 byte olarak kabul eder)


echo "<br>" . "----------------" . "<br>";


$text3 = "Oguzhan Deniz Fenerbahce";
print_r(explode(' ', $text3)); // Metni parçalamak için kullanılır.


echo "<br>" . "----------------" . "<br>";


$text4 = 'Oguzhan Deniz 1907';
$array = (explode(' ', $text4)); // Metni birleştirmek için kullanılır.
echo implode('#', $array) . "<br>";
echo implode('^', $array);


echo "<br>" . "----------------" . "<br>";


$text5 = "Oguzhandeniz";
$array2 = str_split($text5, 2);   // Metni belirtilen sayı adeti kadar parçalamak için kullanılır.
print_r($array2);                       // Türkçe karakterleride tek byte kullanmak için (mb_str_split) kullanılır.


echo "<br>" . "----------------" . "<br>";


$text6 = "       Oguzhandeniz        ";
echo strlen($text6) . "<br>";  // Metnin boyutunu verir = 27
$text6 = ltrim($text6);      // Metnin solundaki boşlukları temizler.
echo strlen($text6) . "<br>";  // Boyut = 20
$text6 = rtrim($text6);      // Metnin sağındaki boşlukları temizler.
echo strlen($text6) . "<br>";  // Boyut = 12. Orijinal boyuta ulaştı.


echo "<br>" . "----------------" . "<br>";


$text7 = "       Oguzhandeniz        ";
echo strlen($text7) . "<br>";
$text7 = trim($text7);        // Metnin hem sağındaki hem solundaki boşlukları temizler.
echo strlen($text7) . "<br>";


echo "<br>" . "----------------" . "<br>";


$text8 = 'Oguzhan Deniz Karabuk Universitesi';
$text8 = substr($text8, 4, 16);   // Metinin belirli bir yerinden alıp  belirli bir yerine kadar getirir.
echo $text8;


echo "<br>" . "----------------" . "<br>";


$text9 = 'Oguzhan Deniz Karabuk Universitesi';
$text9 = strtolower($text9) . "<br>";  // Metnin tamamını küçük harf yapar.(türkçe karakterler için mb_strtolower kullanılır.)
echo $text9;
$text9 = strtoupper($text9);           // Metnin tamamını büyük harf yapar.(türkçe karakterler için mb_strtoupper kullanılır.)
echo $text9;


echo "<br>" . "----------------" . "<br>";


$text10 = 'oguzhan deniz karabuk universitesi';
$text10 = ucfirst($text10);     // Metnin ilk harfini büyütür.
echo $text10. "<br>";
$text10 = ucwords($text10);     // Metinin içerdiği tüm kelimelerin ilk harfini büyütür.
echo $text10;


echo "<br>" . "----------------" . "<br>";


$text11 = 'oguzhan deniz karabuk universitesi';
$text11 = str_replace("karabuk","istanbul",$text11); // Metnin içerisinde ki kaynak kelimeyi verilen kelime ile değiştirir.
echo $text11;


echo "<br>" . "----------------" . "<br>";


$text12 = "oguzhan deniz\nkarabuk universitesi";
echo nl2br($text12);                                //Alt satıra atar.


echo "<br>" . "----------------" . "<br>";


$text13 = 'oguzhan deniz';
echo md5($text13);   // girilen metni md5 formatına çevirir.


echo "<br>" . "----------------" . "<br>";


$text14 = 'oguzhan deniz';
$db_password = "d32072ce0b10680ff01629a5cfdbfc91";
if (md5($text14) == $db_password)
{
    echo 'Password True';
}
else echo 'Password Not True';


echo "<br>" . "----------------" . "<br>";


$text15 = 'oguzhan deniz';
echo sha1($text15);   // girilen metni sha1 formatına çevirir.


echo "<br>" . "----------------" . "<br>";


$text16 = 'Lorem ipsum dolar sit amet.';
echo strstr($text16,'ipsum'). "<br>";   // Metni istenilen yerden bölerek devamını yazdırır.
echo strstr($text16,'dolar'). "<br>";
echo strstr($text16,'sum'). "<br>";
?>