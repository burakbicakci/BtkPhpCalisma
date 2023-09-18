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

<?php

$gelenKullaniciAdi = $_POST["kullaniciadi"];
$gelenSifre = $_POST["sifre"];

if(($gelenKullaniciAdi != "") and ($gelenSifre != "")){
    $_SESSION["KullaniciAdi"] = $gelenKullaniciAdi;
    $_SESSION["Sifre"] = $gelenSifre;
    echo "merhaba" .$_SESSION["KullaniciAdi"]."<br>";
    echo "<a href='phpCokkieFormCikis.php'>Cikis Yap</a>";
}

?>
    
</body>
</html>