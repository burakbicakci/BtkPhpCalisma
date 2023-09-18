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
session_destroy();
echo "formdan çıkış yapıldı"; 
echo "<a href='phpCookieForm.php'>Giriş Yap</a>"
?>
    
</body>
</html>