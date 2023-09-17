<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//const veya define ile sabit tanımlanır.
//const ile tanımlanan sabitler sadece global alanda tanımlanabilir.
//define ile tanımlanan sabitler global alanda ve fonksiyonlar içinde tanımlanabilir.
//bir harf veya alt çizgi ile başlamalıdır.
//hiçbir zaman rakamlarla başlamamalıdır.
//türkçe karakterler içeremez.
//boşluk içeremez.
//php de tanımlı kelimeler kullanılamaz.
//birden fazla kullanılamaz.
//daha sonra değiştirilemez. 
//her alanda erişilebilir.

define("_Isim", "Burak");
echo _Isim;
echo "<br>";
const Isim = "Burak";
echo Isim;
echo "<br>";

// const 0isim = "Burak"; //hata verir.
// const İsim = "Burak"; //hata verir.
// const is im = "Burak"; //hata verir.
// const for = "Burak"; //hata verir.

function Deneme(){
    define("funcIsim", "Burak");
    // const funcIsim2 = "Burak"; //hata verir. define ile çalışır const ile çalışmaz.
}
Deneme();
echo funcIsim;
echo "<br>";

// echo funcIsim2; 


//----------Sabit içerisinde değişken tanımlama
$Deger = "Burak";
define("ISIM", $Deger); // çalışır
echo ISIM;
echo "<br>";

// const ConstISIM = $Deger; // hata verir çalışmaz
//eğer değişken tanımlamak istiyorsak define kullanmalıyız. const ile tanımlanmaz. bi database den alırken define kullanılmalı.

//----------Sabit içerisinde değişken tanımlama

define("ISIM2", "Burak");
define("Veri", ISIM2);
echo Veri;
echo "<br>";

const ConstISIM2 = "Burak";
const ConstVeri = ConstISIM2;
echo ConstVeri;
echo "<br>";


const ICERIK = "Burak";
define("ICERIK2", ICERIK);
echo ICERIK2;
echo "<br>";

$ISLEM2 = "Burak";
define("ISLEM", $ISLEM2);
const ConstISLEM = ISLEM;
echo ConstISLEM;
echo "<br>";


//-----------birden fazla sabit tanımlama
define("ISIM3", "Burak");
define('soyisim', 'bicakci');
define('isimsoyisim', ISIM3." ".soyisim);
echo isimsoyisim;
echo "<br>";

define('ISIM4', 'BuraK');
const SOYISIM2 = 'Bicakci';
$meslek = "ögrenci";
define('sonuc', ISIM4." ".SOYISIM2." ".$meslek);
echo sonuc;
echo "<br>";


//----------sabit içerisinde istenilen karaktere ulaşma
define("ISIM5", "Burak");
echo ISIM5[0];
echo "<br>";
echo ISIM5[1];
echo "<br>";

const ISIM6 = "Burak";
echo ISIM6[0];
echo "<br>";
echo ISIM6[1];
echo "<br>";





?>
    
</body>
</html>