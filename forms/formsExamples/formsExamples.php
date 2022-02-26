<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>

<form method="post" action="post.php">

    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="surname" placeholder="Surname"><br><br>

    <label>Languages</label><br><br>
    <label>Php</label>
    <input type="checkbox" value="php" name="language[]"><br>
    <label>NodeJS</label>
    <input type="checkbox" value="nodejs" name="language[]"><br>
    <label>JavaScript</label>
    <input type="checkbox" value="javascript" name="language[]"><br><br>


    <button type="submit">Send</button>
    <br><br><br><br>
</form>

<hr>

<form method="get" action="get.php">

    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="surname" placeholder="Surname"><br><br>

    <label>Languages</label><br><br>
    <label>Php</label>
    <input type="checkbox" value="php" name="language[]"><br>
    <label>NodeJS</label>
    <input type="checkbox" value="nodejs" name="language[]"><br>
    <label>JavaScript</label>
    <input type="checkbox" value="javascript" name="language[]"><br><br>


    <button type="submit">Send</button>
    <br><br><br><br>
</form>

<hr>

<form method="post" action="request.php?process=add">

    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="surname" placeholder="Surname"><br><br>

    <label>Languages</label><br><br>
    <label>Php</label>
    <input type="checkbox" value="php" name="language[]"><br>
    <label>NodeJS</label>
    <input type="checkbox" value="nodejs" name="language[]"><br>
    <label>JavaScript</label>
    <input type="checkbox" value="javascript" name="language[]"><br><br>


    <button type="submit">Send</button>
</form>

</body>
</html>