<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//ÇALIŞMASI İÇİN FORMDAN VERİ GÖNDERMEK GEREKLİ Bilgileri okunması yeterli olur.

//$_GLOBALS = atanancak bir değişkeni global olarak tanımlamak için kullanılır.
//$_SERVER = server ve işletme biliglerine erişmek için kullanılır.
//$_GET = formdan veri almak için kullanılır.
//$_POST = formdan veri almak için kullanılır farkı kapalı .
//$_REQUEST = formdan veri almak için kullanılır farkı kapalı.
//$_FILES = dosya yükleme için kullanılır.
//$_COOKIE = çerezler için kullanılır.
//$_SESSION = oturumlar için kullanılır.

//----------$_GLOBALS

function Deneme(){
    $GLOBALS['isim'] = "Burak"; //yani local değişkeni global değişkene çevirdik.
}
 Deneme();
 echo $isim;
echo "<br>";
echo "<br>";

//----------$_SERVER

//php dosyasının çalıştığı sunucu bilgilerini verir. farklı kullanımları vardır.
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST']; 
// https://www.php.net/manual/en/reserved.variables.server.php bu adreste php nin diğer server özellikleri var


//--------$_GET

$gelenIsim = $_GET["isim"];
$gelenSoyisim = $_GET["soyisim"];

echo "Gelen isim : ".$gelenIsim."Soy isim:" . $gelenSoyisim;


// ----------$_POST

$gelenIsim = $_POST["isim"];
$gelenSoyisim = $_POST["soyisim"];

echo "Gelen isim : ".$gelenIsim."Soy isim:" . $gelenSoyisim;


//get kullanımında gönderiler url de görünür post kullanımında görünmez.



//---------------$_REQUEST
$gelenIsim = $_REQUEST["isim"];
$gelenSoyisim = $_REQUEST["soyisim"];
echo "Gelen isim : ".$gelenIsim."Soy isim:" . $gelenSoyisim;
//_REQUEST sayesinde get ve post kullanımını aynı anda kullanabiliriz.


//---------------$_FILES

$gelenDosya = $_FILES["resim"];
print_r($gelenDosya); //böyle kullanmamızın sebebi dosya yüklemede dizi olarak gelir ve bu şekilde kullanmamız gerekir.
//bize içinde dosya bilgileri olan bir dizi döndürür. name, type, tmp_name, error, size gibi bilgileri vardır.
//name = dosyanın adı, type = dosyanın tipi, tmp_name = dosyanın geçici adı, error = dosya yükleme hatası, size = dosyanın boyutu
echo "<br>";
echo "gelen dosyanın adı : ".$gelenDosya["resim"]["name"]; // bu şekilde dosyanın adına erişiriz

//---------------$_COOKIE   

setcookie("isim","Burak"); //çerez oluşumu için kullanılır. setcookie("cookie adı","cookie değeri");
$cerez = $_COOKIE["isim"]; //çerez değerini almak için kullanılır.
echo $cerez;
echo "<br>";
//çerezler tarayıcıda tutulur silmeden gitmez.

//---------------$_SESSION
//başlatmak için session_start(); kullanılır.
session_start(); 
$_SESSION["isim"] = "Burak"; 
echo $_SESSION["isim"];
//bilgiler serverda tutulur tarayıcı kapatıldığında silinir. tmp klasöründe tutulur.
$_SESSION["gmail"] = "example.gmail.com";

?>
    
</body>
</html>