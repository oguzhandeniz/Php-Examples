<html>
<title>Database 1</title>
<body>

<?php
$servername = "localhost:8889";  //localhost
$username = "root";
$password = "root";
$database = "student";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<form action="?task=insert" method="post">
    Name :<input type="text" name="name"><br>
    Email :<input type="text" name="email"><br>
    Password :<input type="text" name="password"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" and $_REQUEST["task"] == "insert") {
    $namesurname = $_REQUEST["name"];
    $emailadress = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $sql = "INSERT INTO users (name,email,password) VALUES ('$namesurname','$emailadress','$password')";
    echo $sql;
    $conn->exec($sql);
    echo "<h4>Kayıt Başarı ile Eklendi</h4>";
}

// ********************UPDATE*************
if ($_REQUEST["task"] == "update") {
    $namesurname = $_REQUEST["name"];
    $emailadress = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $sql = "UPDATE users SET name ='$namesurname', email ='$emailadress' , password = '$password' WHERE id=" . $_REQUEST["id"];
    echo $sql;
    $conn->exec($sql);
    echo "<h4>Kayıt Başarı ile Güncellendi</h4>";
}

// ********************EDİT*************
if ($_REQUEST["task"] == "edit") {
    $sql = "SELECT * FROM users WHERE id=" . $_REQUEST["id"];
    $query = $conn->prepare($sql);
    $query->execute();
    $rs = $query->fetch(PDO::FETCH_ASSOC);

    ?>
    <form action="?task=update&id=<?= $rs["id"] ?>" method="post">
        Name: <input type="text" name="name" value="<?= $rs["name"] ?>"><br>
        E-mail: <input type="text" name="email" value="<?= $rs["email"] ?>"><br>
        Password: <input type="text" name="password" value="<?= $rs["password"] ?>"><br>
        <input type="submit">
    </form>
    <?php
}

// ********************DELETE*************
if ($_REQUEST["task"] == "delete") {
    $sql = "DELETE FROM users WHERE id=" . $_REQUEST["id"];
    $conn->exec($sql);
    echo "<h4>Kayıt Başarı ile Silindi</h4>";
}
// ********************LİST*************
$sql = "SELECT * FROM users";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
echo "<br>" . "Id Name  Email  Password" . "<br>";
echo "========================================<br>";
foreach ($results as $rs) {
    echo $rs->id . "  " . $rs->name . "     " . $rs->email . "         " . $rs->password . "\n";
    echo "<a href='?task=edit&id=" . $rs->id . "'> Edit </a>";
    echo "<a href='?task=delete&id=" . $rs->id . "'> Delete </a><br>";
}

?>


</body>
</html>
