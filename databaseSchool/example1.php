<!DOCTYPE html>
<html>
<head>
    <title> Php Database İşlemleri </title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "medikal";
try {
    $db = new PDO("mysql:host=$servername;dbname=medikal", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<form action="?islem=ekle" method="post">
    Adı Soyadı :<input type="text" name="adsoy"><br>
    Bölüm :<select name="bolum">
        <option>Bilgisayar Mühendisliği</option>
        <option>Biyomedikal Mühendisliği</option>
        <option>Makine Mühendisliği</option>
        <option>Endüstri Mühendisliği</option>
        <input type="submit" value="Kaydet">
</form>

<?php
if ($_REQUEST['islem'=="ekle"])
{
    $adsoy=$_REQUEST['adsoy'];
    $bolum=$_REQUEST['bolum'];
    $sql = "INSERT INTO ogrenci (adsoy,bolum) VALUES ('$adsoy','$bolum')";
    $db->exec($sql);
}
$db = null;
?>



</body>
</html>

