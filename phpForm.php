<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="phpSuperGobals.php" method="get">
        Isim : <input type="text" name="isim"><br>
        Soyisim : <input type="text" name="soyisim"><br>
        <input type="submit" value="Gönder">
    </form>
    <br><br>
    <form action="phpSuperGobals.php" method="post">
        Isim : <input type="text" name="isim"><br>
        Soyisim : <input type="text" name="soyisim"><br>
        <input type="submit" value="Gönder">

    </form>
    <br><br>
    <form action="phpSuperGobals.php" method="post" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" dosya yükleme için kullanılır. -->
       fotoğraf : <input type="file" name="resim"><br>
        <input type="submit" value="Gönder">
    </form>
    <br><br>
    <form action="phpKontrolYapi.php" method="get">
        İsim: <input type="text" name="isim"><br>
        Soyisim: <input type="text" name="soyisim"><br>
        <input type="submit" value="Gönder">
    </form>
    
</body>
</html>