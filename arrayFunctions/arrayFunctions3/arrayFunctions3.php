<?php
// Dizi fonksiyonları - 3
echo "<pre>";

$names = ["Oguz", "Halim", "Berkin", "Mustafa", "Berk"];
var_dump(in_array('Halim', $names));  // Dizide bir değerin varlığını sorgular.
var_dump(in_array('Ahmet', $names));

echo "<br>" . "------------------------" . "<br>";

print_r($names);
array_shift($names);  // Dizinin başlangıcından bir eleman çıkarır.
print_r($names);

echo "<br>" . "------------------------" . "<br>";

print_r($names);
array_pop($names);  // Dizinin sonundan bir eleman çıkarır.
print_r($names);

echo "<br>" . "------------------------" . "<br>";

$new_array = array_slice($names, 0, 2); // Dizinin belli  bir bökümünü döndürür.
print_r($new_array);

echo "<br>" . "------------------------" . "<br>";

$numbers = [1, 2, 3, 4, 5, 6];
$sumArr = array_sum($numbers) . "<br>";   // Dizideki değerlerin toplamını hesaplar.
$multiplicationArr = array_product($numbers);   // Dizideki değerlerin çarpımını hesaplar.
print_r($sumArr);
print_r($multiplicationArr);

echo "<br>" . "------------------------" . "<br>";

$names2 = ["Oguz", "Halim", "Berkin", "Mustafa", "Berk"];
array_push($names2, 'Talip', 'Mert', 'Hamit');    // Dizinin sonuna eleman ekler.
print_r($names2);

echo "<br>" . "------------------------" . "<br>";

array_unshift($names2, 'Mazlum', 'Kubilay', 'Emre');  // Dizinin başına eleman ekler.
print_r($names2);

echo "<br>" . "------------------------" . "<br>";

$names3 = ["Name 1" => "Oguz", "Name 2" => "Halim", "Name 3" => "Berkin", "Name 4" => "Mustafa", "Name 5" => "Berk"];
print_r(array_keys($names3));

echo "<br>" . "------------------------" . "<br>";

$arr0 = array("Ford" => "Mustang", "Color" => "Black");
print_r(array_values($arr0));   // Dizinin tüm değerlerini döndürür.

echo "<br>" . "------------------------" . "<br>";

$temp = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($temp);  // Diziden yinelenen değerleri siler.
print_r($result);
?>