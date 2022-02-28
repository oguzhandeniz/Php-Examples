<?php
echo "<pre>";
// Dizi Fonksiyonları - 4

$array = ['First' => '1.Car', 'Second' => '2.Plane', 'Third' => '3.Train', 'Fourth' => '4.Motobike'];

echo current($array) . "<br>";      // Bir dizideki geçerli elemanı döndürür.
echo next($array) . "<br>";      // İleri götürür.
echo next($array) . "<br>";
echo next($array) . "<br>" . "<br>";

echo prev($array) . "<br>";      // Geri götürür.
echo prev($array) . "<br>";
echo prev($array) . "<br>";

echo prev($array) . "<br>" . "<br>";

echo end($array) . "<br>" . "<br>";   // En sona götürür.

echo reset($array) . "<br>";          // İlk elemana götürür.

echo "<br>" . "------------------" . "<br>";

extract($array);         // Dizinin anahtarlarını değişken olarak kullanmamıza yarar.
echo $First . "<br>";
echo $Fourth . "<br>";

echo "<br>" . "------------------" . "<br>";

$array2 =
    [
        3 => 12,
        5 => 21,
        1 => -2,
        0 => 96,
        9 => -15
    ];
asort($array2);     // Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.
print_r($array2);

echo "<br>" . "------------------" . "<br>";

arsort($array2);     // Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.
print_r($array2);

echo "<br>" . "------------------" . "<br>";

ksort($array2);     // Bir diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.
print_r($array2);

echo "<br>" . "------------------" . "<br>";

krsort($array2);    // Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.
print_r($array2);

?>