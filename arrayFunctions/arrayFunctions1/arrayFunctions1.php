<?php
// Dizi Fonksiyonları - 1
echo "<pre>";
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

print_r($array);      // Bir değişkenin veya dizinin gösterimini ekrana basar.

echo "<br>";

var_dump($array);    // Dizileri ardışık olarak bileşenlerine ayırır ve tüm değerleriyle birlikte gösterir.

echo "<br>";

$array2 = implode("*ASD*", $array);     // Dizi elemanlarını gönderdiğimiz separator ile birleştirerek yazdırır.
print_r($array2);

echo "<br>";

$array3 = explode("*ASD*", $array2);    // Gönderdiğimiz dizi elemanlarını separatorden ayırarak birleştirir.
print_r($array3);

echo "<br>";

echo count($array);     // Dizinin eleman sayısını döndürür.


echo "<br>";


for ($i = 0; $i <= count($array) - 1; $i++)     // Örnek count kullanımı.
{
    echo $array[$i];
}

echo "<br>";

echo is_array($array); // Dizinin eleman içerip içermediğini sorgulamak için kullanılır. (Eleman içeriyorsa 1 - İçermiyorsa 0 döndürür.)
?>