<?php
session_start(); 
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
echo $_SESSION["Adi"] . "<br>"; // tek bir cookie de kaydeder
echo $_SESSION["soyadi"] . "<br>";
echo $_SESSION["gmail"] . "<br>";
echo $_SESSION["telefon"] . "<br>";
?>

<a href="phpSessionSil.php">session sil</a>
    
</body>
</html>