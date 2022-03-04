<?php

//echo  __DIR__;  // Dosyanın yolunu gösterir.

$basedir = require 'config.php';
//echo $basedir;


//$array = scandir($basedir);  // İçerisinde bulunduğumuz dosya dizinleri listeler.
//echo "<pre>";
//print_r($array);


//$array = glob($basedir);    // Dizin yolunu döndürür.
//$array = glob($basedir.'/*');
//echo "<pre>";
//print_r($array);


/*
$array = glob($basedir.'/*');
$dizi = array_map(function ($e) use ($basedir)
{
    return str_replace($basedir.'/',' ',$e);
},$array);

echo "<pre>";
print_r($dizi);
*/



/*
function listAll($dir)
{
    $files = scandir($dir);
    echo "<ul>";
    foreach ($files as $file) :
        if ($file != '.' && $file != '..')
        {
            echo "<li>";
            echo $file;
            if (is_dir($dir . '/' . $file))
            {
                listAll($dir . '/' . $file);
            }
            echo "</li>";
        }
    endforeach;
    echo "</ul>";
}

listAll($basedir);
*/


?>