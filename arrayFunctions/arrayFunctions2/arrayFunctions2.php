<?php
// Dizi Fonksiyonları - 2

echo "<pre>";
$numbers = range(1, 10); // Başlangıç ve bitiş değeri vererek dizi oluşturmamıza yarar. Artış miktarıda verebiliriz.
print_r($numbers);

echo "----------------------" . "<br>";

shuffle($numbers);  // Sayıları karıştırarak yazdırmak için kullanılır.
print_r($numbers);

echo "----------------------" . "<br>";

$fruits = ["apple", "banana", "strawberry", "orange"];
$letters = ["a", "b", "c", "d"];
$array = array_combine($fruits, $letters); // İki diziyi kombinleyerek yazdırır. İki dizide eşit index değerine sahip olmalıdır.
print_r($array);

echo "----------------------" . "<br>";

$cars = ["Toyota", "Ford", "Renault", "Honda", "Ford", "Honda", "Toyota", "Ford", "Honda"];
$array2 = array_count_values($cars); // Dizide hangi elemandan kaç adet olduğunu yazdırır.
print_r($array2);

echo "----------------------" . "<br>";

$array3 = array_flip($letters); // Dizideki değerler ile key değerlerinin yerinin değiştirir.
print_r($array3);

echo "----------------------" . "<br>";

$array4 = array_key_exists(3, $letters) . "<br>"; // Dizideki key değeri olup olmadığını döndürür.(true = 1 / false = 0)
print_r($array4);

echo "----------------------" . "<br>";


$numbers2 = range(1, 10, 3);
$array5 = array_map(function ($e)   // Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.
{
    return $e * 2;
}, $numbers2);
print_r($array5);


echo "----------------------" . "<br>";


$numbers3 = range(1, 10);
$numbers4 = range(1, 10);
$evenNum = array_filter($numbers3, function ($a) // Diziden değerleri filtre uygulayarak çeker.
{
    return $a % 2 == 0 ? $a : false; // Çift sayıları yazdırdık.
});
$oddNum = array_filter($numbers3, function ($a) // Diziden değerleri filtre uygulayarak çeker.
{
    return $a % 2 == 1 ? $a : false; // Tek sayıları yazdırdık.
});
print_r($oddNum);


echo "----------------------" . "<br>";


$numbers5 = range(1, 10, 2); // Dizi elemanları = 1,3,5,7,9
$numbers6 = range(11, 20, 3); // Dizi elemanları = 11,14,17,20
$combinedArray = array_merge($numbers5, $numbers6); // Verilerin iki diziyi birleştirip yazdırır.
print_r($combinedArray);

echo "----------------------" . "<br>";


$array6 = ["apple", "banana", "strawberry", "orange"];
$keys = array_rand($array6, 2);   // Diziden rastgele elemanları çeker.
echo $array6[$keys[0]] . "<br>";
echo $array6[$keys[1]] . "<br>";

echo "----------------------" . "<br>";


$array7 = ["apple", "banana", "strawberry", "orange", "pineapple", "peach"];
$reverseArray = array_reverse($array7);  // Diziyi tersine sıralayıp döndürür.
print_r($reverseArray);

echo "----------------------" . "<br>";

$array8 = ["Toyota", "Ford", "Renault", "Honda", "Ford", "Honda", "Toyota", "Ford", "Honda"];
$searchArray = array_search("Honda", $array8);  // Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.
print_r($searchArray);

?>