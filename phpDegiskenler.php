<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//önemli notlar
//php değişkenler $ işareti ile başlar
//php değişkenlerin isimleri harf veya _ ile başlar
//php değişkenlerin isimleri sayı ile başlayamaz
//php değişkenlerin isimleri boşluk türkçe karakter ve özel karakter içeremez
// php tarıfından kullanılan değişkeler kullanılamaz(for gibi)
// değişken isimleri büyük küçük harf duyarlıdır

$de_ger1 = "değişken1";
echo $de_ger1;
echo "<br>";



// $de_(ger2 = "değişken2"; // hatalı kullanım
//$değer3 = "değişken3"; // hatalı kullanım

function deneme(){
    $localDegisken = "local değişken";
}
//  echo $localDegisken; // hatalı kullanım çünkü local değişken sadece fonksiyon içinde kullanılabilir



//---------- degisken içinde degisken kullanımı
$deger1 = "burak";
$deger2 = "merhaba {$deger1} nasılsın?"; // deger2 deger1 in değerini alır
echo $deger2;
echo "<br>";
echo "<br>";



//-------------- degişkenlerde deger atama
$deger3 = "deger3";
$deger4 = $deger3;
echo $deger4;
echo "<br>";
echo "<br>";

$deger3 = "deger3 degeri değişti";
echo $deger4; // deger4 deger3 ün ilk değerini alır
echo "<br>";
echo $deger3;
echo "<br>";    
echo "<br>";

//-------- birden fazla değişkene kullanma
$isim = "burak";
$soyisim = "bicakci";
$mesaj = "merhaba {$isim} {$soyisim} nasılsın?";
echo $mesaj;
echo "<br>";
echo "<br>";
$mesaj = "merhaba ".$isim." ".$soyisim." nasılsın?";
echo $mesaj;
echo "<br>";
echo "<br>";

//-------- değişkenlerdeki karaktere ulasma
$deger5 = "deger5";
echo $deger5[0]; // d
echo "<br>";
echo $deger5[1]; // e
echo "<br>";
echo $deger5[2]; // g





?>



    
</body>
</html>