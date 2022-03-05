<?php

session_start();

if (isset($_SESSION['kullanici']))
{
    echo 'Merhaba '.$_SESSION['kullanici']['isim'].' Hoş Geldiniz.';
    echo "<pre>";
    print_r($_SESSION);
}
else
{
    echo 'Lütfen oturum açınız.';
}

?>