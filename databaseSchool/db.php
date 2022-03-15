<!DOCTYPE html>
<html>
<head>
    <title> Php Database İşlemleri </title>
</head>
<body>


<form action="?islem=edit" method="get">
    Name :<input type="text" name="name"><br>
    Email :<input type="text" name="email"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $namesurname = $_REQUEST["name"];
    $emailadress = $_REQUEST["email"];

    echo "Name & Surname :" , $namesurname;
    echo "<br>";
    echo "Email Adress :" , $emailadress;
    echo "<br>";
    echo "Veriler başarı ile kaydedildi.";

}
if ($_SERVER["REQUEST_METHOD"] == "POST" and $_REQUEST["islem"] == "edit")
{
    $namesurname = $_REQUEST["name"];
    $emailadress = $_REQUEST["email"];

    echo "Name & Surname :" , $namesurname;
    echo "<br>";
    echo "Email Adress :" , $emailadress;
    echo "<br>";
    echo "Veriler başarı ile güncellendi.";

}
?>


<!-- *************Connection************* -->
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>







<?php
if ($_REQUEST['islem'] == "edit") {
    $adsoy = $_REQUEST['adsoy'];
    $bolum = $_REQUEST['bolum'];
    $sql = "INSERT INTO ogrenci (adsoy,bolum) VALUES ('$adsoy','$bolum')";
    $db-->exec($sql);
    echo "Ekleme Yapıldı<br>";
}
?>


</body>
</html>

