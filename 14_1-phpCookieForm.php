<?php
require_once("phpCookieAyar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="phpCookie.php" method="post">
        Isim : <input type="text" name="isim"><br>
        Soyisim : <input type="text" name="soyisim"><br>
        <input type="submit" value="Gönder">
    </form>

    <form action="phpCokkieFormSession.php" method="post">
        Kullanici ADi : <input type="text" name="kullaniciadi"><br>
        Sifre : <input type="password" name="sifre"><br>
        <input type="submit" value="Gönder">
    </form>

    
</body>
</html>