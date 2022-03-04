<?php

// rename('a','c');  // dosyanın adını değiştirir. a dosyası c oldu.
// rename('c','b/c');  // b dosyasını c nin altına taşıdık.
/*
touch('test.txt');
rename('test.txt', 'b/c/test2.txt')  // test dosyasının adını değiştirip taşıdık.
*/

/*
$sonuc = rename('b/c/test2.txt','test.txt');
var_dump($sonuc);
*/



// Dosya Dahil Etme
/*
require 'text.txt';
require 'deneme.php';
require 'b.txt';   // require ile olmayan bir dosyayı dahil ettiğimiz zaman fatal error verir ve çalışmaz.
*/
/*
include 'b.txt';   // include ile olmayan bir dosyayı dahil ettiğimizde warning verir ve çalışmaya devam eder.
echo 'selam';
*/
/*
include_once 'deneme.php';  // dosyayı sayfaya sadece 1 defa dahil edebiliyoruz. (olmayan dosya warning verir)
include_once 'deneme.php';  //(require_once içinde geçerli).(olmayan dosya fatal error verir)
include_once 'deneme.php';
*/

include 'deneme.php';
print_r($dizi);

?>