<?php
/*
s   iki haneli saniye değeri   (07)
i   iki haneli dakika değeri    (05)
H   iki haneli 24 saat biçiminde saat değeri    (00 - 23)
d   iki haneli gün değeri       (01 - 31)
m   iki haneli ay değeri    ( 01 - 12 )
Y   dört haneli yıl değeri  ( 1998)
j   tek haneli gün değeri  (4)
n   tek haneli ay değeri  (1 - 12 )
y   iki haneli yıl değeri   (98,95)
l   gün ismi    (saturday)
F   ay isimleri     (april)
z   yılın günü      (0 - 365)
 */

// echo date ('');

/*
date_default_timezone_set('Europe/Istanbul');
$format = 'Y-m-d H:i:s';
echo date($format);

echo "<br>";

$format = 'F';
echo date($format);

echo "<br>";

$format = 'l';
echo date($format);

echo "<br>";

$format = 'Y';
echo date($format);

echo "<br>";
*/

/*
// Ayların isimlerini türkçeye çekme
function _date($date)
{
    $date_en = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ];
    $date_tr = [
        'Ocak',
        'Şubat ',
        'Mart',
        'Nisan',
        'Mayıs',
        'Haziran',
        'Temmuz',
        'Ağustor',
        'Eylül',
        'Ekim',
        'Kasım',
        'Aralık',
    ];

    return str_replace($date_en,$date_tr,$date);
}
date_default_timezone_set('Europe/Istanbul');
$format = 'F';
echo _date(date($format));
*/

/*
date_default_timezone_set('Europe/Istanbul');
echo time(); // January 1 1970 den şuana kadar geçen saniye değeri
echo "<br>";

echo strtotime('+1 day');  // şuan ki tarihten bir gün sonrasını getirir.
echo "<br>";

echo strtotime('+1 hours');  // şuan ki tarihten bir saat sonrasını getirir.
echo "<br>";

$unix = strtotime('+1 hours');
echo date('Y-m-d H:i:s',$unix);  // şuan ki zamandan bir saat sonrasını getirir.
echo "<br>";

$unix = strtotime('+1 days');
echo date('Y-m-d H:i:s',$unix);  // şuan ki zamandan bir gün sonrasını getirir.
echo "<br>";

$unix = strtotime('2022-03-05 13:53:31');
$t = strtotime('-5 month',$unix);
echo date('Y-m-d H:i:s',$t);      // şuan ki zamandan 5 ay öncesini getirir.
*/

/*
date_default_timezone_set('Europe/Istanbul');
$DateTime = new DateTime();         // Zaman sınıfı
echo $DateTime ->format('Y-m-d H:i:s');
*/
?>