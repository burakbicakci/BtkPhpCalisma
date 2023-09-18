<?php
declare(strict_types=1);
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

//gettype kullanımı = değişkenin türünü gösterir

$deger1= 5;
$deger2= 5.5;
$deger3= "5.5";
$deger4= true;
$deger5= null;

class deger6   {
    public $isim = "Burak";
}
$islem = new deger6;


echo gettype($deger1); //integer
echo "<br>";
echo gettype($deger2); //double
echo "<br>";
echo gettype($deger3); //string
echo "<br>";
echo gettype($deger4); //boolean
echo "<br>";
echo gettype($deger5); //NULL
echo "<br>";
echo gettype($islem); //object  

//settype kullanımı = değişkenin türünü değiştirir
$degerSet = 5.5;
$degerSetIlk = gettype($degerSet);
echo "<br>";
echo $degerSetIlk; //double
echo "<br>";

settype($degerSet, "integer");
$degerSetIkinci = gettype($degerSet); //integer
echo $degerSetIkinci;

//veri dönüşüm işlemleri
//degerler  : (boolen -> bool, integer -> int, float, double, string , array , object , unset)
//boolen -> bool = mantıksal veri dönüştürme
//integer -> int = tamsayı veri dönüştürme
//float ,double,real  = ondalıklı sayı veri dönüştürme
//string = metin veri dönüştürme
//array = dizi veri dönüştürme
//object = nesne veri dönüştürme
//unset = boş veri dönüştürme
$degerBir = ".5.89";
$degerBirVeri = gettype($degerBir);

$degerİki = (int)$degerBir;
$degerİkiVeri = gettype($degerİki);

echo "<br>";
echo "deger bir verisi"." ".$degerBirVeri; //string
echo "<br>";
echo "deger iki verisi" ." ". $degerİkiVeri; //integer

//-------------- diğer veri türleri
//boolval() = boolen veri dönüştürme
//intval() = integer veri dönüştürme
//floatval() = float veri dönüştürme
//doubleval() = double veri dönüştürme

$degerUc = (int) ("1980Burak Bicak");
$degerUcVeri = gettype($degerUc);

echo "<br>";
echo "deger uc verisi" . $degerUc; //1980
echo "<br>";
echo "deger uc verisi" . $degerUcVeri; //integer
echo "<br>";

echo "deger : ". intval($degerUc) ."<br/>";
$degeerVeriSon = gettype($degerUc);
echo "deger veri son : ". $degeerVeriSon ."<br/>";

//-------- veri türü dayatma işlemleri ve declare
//php 7 sayesinde fonksiyonlara gelen verilere veri türü dayatma işlemi yapılabiliyor
//declare(strict_types=1); //kodlama dosyası içerisindeki tüm kodlamaların yapısını belirler ve en başa yazılır

// function Deneme(string $Isim,string $Soyisim,int $Yas):array { // :array = dizi veri türü dayatması hatalı çünkü fonksiyonun sonucu dizi değil
//     $birlestir = $Isim . " " . $Soyisim . " " . $Yas;
//     return $birlestir;
// }

// $sonucDec = Deneme("Burak","Bicak",19);
// echo $sonucDec;

function Deneme(string $Isim,string $Soyisim,int $Yas):array{ // doğru çalışır
    $birlestir = array($Isim,$Soyisim,$Yas);
    return $birlestir;
}

$sonucDec = Deneme("Burak","Bicak",19);
echo "<pre>";
print_r($sonucDec);
echo "</pre>";

function Deneme2(array $degerArray):string{ // doğru çalışır
    $Islem = implode("<br/>",$degerArray);
    return $Islem;
}
$ornek = array("Burak","Bicak",19);
$sonucDec2 = Deneme2($ornek);
echo $sonucDec2;


//------- var_dump() kullanımı
//var_dump() = değişkenin türünü ve değerini gösterir bilgilerini verir

class Deneme3{
    public $isim = "Burak";
    public $soyisim = "Bicak";
    public $yas = 19;
}
$deger3 = new Deneme3;
echo "<pre>";
var_dump($deger3);
echo "</pre>";

//-------- serialize() ve unserialize() kullanımı
$Bilgiler = array("isim"=>"Burak","soyisim"=>"Bicak","yas"=>19);
echo "<pre>";
print_r($Bilgiler);
echo "</pre>";

$SonucBilgiler = serialize($Bilgiler);
echo "<pre>";
print_r($SonucBilgiler); // çıktısı : a:3:{s:4:"isim";s:5:"Burak";s:7:"soyisim";s:5:"Bicak";s:3:"yas";i:19;}
echo "</pre>";

$SonucBilgiler2 = unserialize($SonucBilgiler); // çıktısı : Array ( [isim] => Burak [soyisim] => Bicak [yas] => 19 ) tersen de yapabiliriz
print_r($SonucBilgiler2);
echo "</pre>";

?>

</body>
</html>