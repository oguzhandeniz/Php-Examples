<?php
include 'fonksiyon/helper.php';
    session_start();

    if (!isset($_SESSION['login']) || $_SESSION['login'] == false)
    {
        header('Location:login.php');
    }

    $hakkimda = file_get_contents('db/'.session('kullanici_adi').'.txt');


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Anasayfa</title>
    <style>
        body.bg-dark{ background: #181818!important;}
        button{position: absolute; bottom: 8px; right: 8px}
        form{position: relative;}
    </style>
</head>
<body class="<?= cook('color') ? cook('color') : 'bg-dark' ?>">
<div class="d-flex align-items-center justify-content-center p-4"><img height="" src="kodl.png" alt=""></div>
<div  class="container d-flex align-items-center justify-content-center">
    <div class="card <?= cook('color') ? cook('color') : 'bg-dark' ?>" style="width: 18rem;">
        <div class="card-header bg-primary">
            Profilim
        </div>
        <div class="card-body">
            <h5 class="card-title text-warning"><?= session('kullanici_adi') ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= session('eposta') ?></h6>
            <?php
                if (get('islem') == 'true')
                {
                    echo "<div class='alert alert-success'>İşlem başarılı</div>";
                }
                elseif (get('islem') == 'false')
                {
                    echo "<div class='alert alert-danger'>İşlem başarısız oldu</div>";
                }
            ?>
            <form action="islem.php?islem=hakkimda" method="post">
                <textarea class="form-control <?= cook('color') ? cook('color') : 'bg-dark' ?> text-primary" name="hakkimda" id="" cols="30" rows="10"><?= htmlspecialchars_decode($hakkimda); ?></textarea>
                <button class="btn btn-sm btn-primary" type="submit">Kaydet</button>
            </form>
            <a href="islem.php?islem=cikis" class="btn btn-success btn-sm mt-2 w-100">Oturumu Kapat</a><br>

        </div>
        <div class="card-footer bg-info d-flex align-items-center justify-content-between">
            <a href="islem.php?islem=renk&color=bg-light" class="btn btn-sm btn-light">Light Mod</a>
            <a href="islem.php?islem=renk&color=bg-dark" class="btn btn-sm btn-dark">Dark Mod</a>
        </div>
    </div>
</div>
</body>
</html>