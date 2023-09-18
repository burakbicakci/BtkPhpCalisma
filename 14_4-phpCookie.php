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

//cookie ler sayesinde ziyareyciler tanınır.

//setcookie() -> belirtilen değerler doğrultusunda çerez oluşuturur ve sildirir
//ayarlardan arama kısmına çerez yazarak çerezler gözükür
//paremetreker : 1.paremetre: Çerez adı,2.paremetre :çerez degeri,3.paremetre : Çerez yaşam süresi

$yasamSuresi = time()+3600;

setcookie("KullaniciADi","Burak",$yasamSuresi);
setcookie("KullaniciSoyadi","Bicakci",$yasamSuresi);
setcookie("KullaniciYasi","20",$yasamSuresi);


// print_r($_COOKIE);

echo "kullanıcı adı : ".$_COOKIE["KullaniciADi"]."<br>";
echo "kullanıcı soyadı : ".$_COOKIE["KullaniciSoyadi"]."<br>";
echo "kullanıcı yası : ".$_COOKIE["KullaniciYasi"]."<br>";


if(isset($_COOKIE["KullaniciADi"])){
    echo "Kullanıcı adı : ".$_COOKIE["KullaniciADi"]."<br>";
}
if(isset($_COOKIE["KullaniciSoyadi"])){
    echo "Kullanıcı soyadı : ".$_COOKIE["KullaniciSoyadi"]."<br>";
}
if(isset($_COOKIE["KullaniciYasi"])){
    echo "Kullanıcı yası : ".$_COOKIE["KullaniciYasi"]."<br>";
}


// $yasamSuresi = time()-60; //zamanı geri alır ve cooki siler

//----------------- cookieler ve diziler kullanımı
$YasamSuresi2 = time()+(60*5);

// setcookie("KullaniciAdi2","Burak",$YasamSuresi2);
// setcookie("KullaniciSoyadi2","Bicakci",$YasamSuresi2);
// setcookie("Kullanicimail","burakbicakci@gmail.com",$YasamSuresi2);
// setcookie("Kullanicitel","05555555555",$YasamSuresi2);

// setcookie("SepetsepetID","1",$YasamSuresi2);
// setcookie("SepetTutar","100",$YasamSuresi2);
// setcookie("SepetTaksitSayisi","6",$YasamSuresi2);
// setcookie("SepetOdemeTuru","Kredi KArt",$YasamSuresi2);


//dizi ypamak için ise


setcookie("Kullanici[Adi2]","Burak",$YasamSuresi2);
setcookie("Kullanici[Soyadi2]","Bicakci",$YasamSuresi2);
setcookie("Kullanici[email]","burakbicakci@gmail.com",$YasamSuresi2);
setcookie("Kullanici[tel]","05555555555",$YasamSuresi2);

setcookie("Sepet[sepetID]","1",$YasamSuresi2);
setcookie("Sepet[Tutar]","100",$YasamSuresi2);
setcookie("Sepet[TaksitSayisi]","6",$YasamSuresi2);
setcookie("Sepet[OdemeTuru]","Kredi KArt",$YasamSuresi2); //echo $_COOKIE["Sepet"]["OdemeTuru"];

echo "<pre>";
print_r($_COOKIE);


//form ile cookieleri kullanma
// <form action="phpCookie.php" method="post">
//     Adiniz:<input type="text" name="KullaniciAdiForm" placeholder="Kullanıcı Adı">
//     Soyadiniz:<input type="text" name="KullaniciSoyadiForm" placeholder="Kullanıcı Soyadı">
//     <input type="submit" value="Gönder"
// </form>

$gelenAd = $_POST["isim"]; //bunlar formdan yazdığın zaman çalışıyor
$gelenSoyad = $_POST["soyisim"];
$YasamSuresiForm = time()+((60*60)*24);

setcookie("KullaniciAdiForm",$gelenAd,$YasamSuresiForm);
setcookie("KullaniciSoyadiForm",$gelenSoyad,$YasamSuresiForm    );

echo "Kullanıcı adı : ".$_COOKIE["KullaniciAdiForm"]."<br>";
echo "Kullanıcı soyadı : ".$_COOKIE["KullaniciSoyadiForm"]."<br>";


//php oturum tanımlama okuma ve silme işlemleri

//session_start() -> oturum başlatma veya takip etmek içn kullanılır en üste yazılır
//session_destroy() -> oturumu sonlandırır siler.

// setcookie("Adi","Burak"); alttaki gibi oluştur
$_SESSION["Adi"] = "Burak"; // verileri gizler ve güvenliği sağlar tmp klasöründe saklanır


setcookie("KullaniciAdi3","Burak",); //ayr ayrı 4 tane cookie açar
setcookie("KullaniciSoyadi3","Bicakci");
setcookie("Kullanicimail3","burakbicakci@gmail.com");
setcookie("Kullanicitel3","05555555555",);

$_SESSION["Adi"] = "Burak"; // tek bir cookie de kaydeder
$_SESSION["soyadi"] = "bicakci";
$_SESSION["gmail"] = "burakbicakci@gmail.com";  //okumak için session okuya git
$_SESSION["telefon"] = "05555555555";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//---------------- session ve diziler kllanımı

echo "Burasi Dizeler";
$_SESSION["KullaniciSession"] = array("adi"=>"Burak","soyadi"=>"Bicakci","mail"=>"burakbicakci@gmail.com");
$_SESSION["SepetSession"] = array("sepetID"=>"1","Tutar"=>"100","TaksitSayisi"=>"6","OdemeTuru"=>"Kredi KArt");

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "Kullanıcı adı : ".$_SESSION["KullaniciSession"]["adi"]."<br>"; // böyle de yazabiliriz
echo "Kullanıcı adı : ".$_SESSION["KullaniciSession"]["soyadi"]."<br>";


?>
<br>
<br>
<a href="phpSessionOku.php">session oku</a>
<a href="phpCokkieFormKim.php">Mesaja git</a>
</body>
</html>