<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//toplama ve atamalı toplama
$degerBir = 5; //"5" şeklinde yapamayız string değerde olmaz
$degerIki = 10;

$SonucBir = $degerBir + $degerIki;
echo $degerBir." + ".$degerIki." = ".$SonucBir;

$SonucIki = 10 +40;
echo "<br>";
echo $SonucIki;
echo "<br>";

echo "10 + 70 : ";
echo 10 + 70;
echo "<br>";

$degerUc = 5.45;
$degerDort = 10.45;
$SonucUc = $degerUc + $degerDort;
echo $degerUc." + ".$degerDort." = ".$SonucUc;
echo "<br>";


$degerbes = 5.45;
$degeralti = 10.45;
$Sonucdort = $degerbes + $degeralti;
echo $degerbes." + ".$degeralti." = ".$Sonucdort; // += atamalı toplama
echo "<br>";


$degeryedi = 10;
$ekDeger = 5;
echo $degeryedi . "+" .$ekDeger . "=";
$degeryedi += $ekDeger;
echo $degeryedi;


$degersekiz = 5;
$degerdokuz = 10.78;
$degerdokuz = 7;
$degerdokuz = 8.54;
$Sonucbes = $degersekiz + $degerdokuz + $degerdokuz + $degerdokuz;
echo $degersekiz." + ".$degerdokuz." + ".$degerdokuz." + ".$degerdokuz." = ".$Sonucbes;
echo "<br>";
echo "<br>";
echo "<br>";

//çıkarma ve atamalı çıkarma


$degerOn = 10;
$degerOnBir = 5;
$SonucOn = $degerOn - $degerOnBir;
echo $degerOn." - ".$degerOnBir." = ".$SonucOn;

$SonucOnIki = 10 - 40;
echo "<br>";
echo $SonucOnIki;
echo "<br>";

echo "10 - 70 : ";
echo 10 - 70;
echo "<br>";

$degerOnUc = 5.45;
$degerOnDort = 10.45;
$SonucOnUc = $degerOnUc - $degerOnDort;
echo $degerOnUc." - ".$degerOnDort." = ".$SonucOnUc;
echo "<br>";

$degeronbes = 10;
$ekDeger3 = 5;
echo $degeronbes . "-" .$ekDeger3 . "=";
$degeronbes -= $ekDeger3;
echo $degeronbes;
echo "<br>";

$Degeryirmi = 200;
echo $Degeryirmi . "-200 =";
$Degeryirmi -= 40;
echo $Degeryirmi;


$degeronalti = 1000;
$degeryirmibir = 100;
$degeryirmiki = 50;
$degeryirmiuc = 400;

$SonucOnBes = $degeronalti - $degeryirmibir - $degeryirmiki - $degeryirmiuc;
echo "<br>";
echo $degeronalti." - ".$degeryirmibir." - ".$degeryirmiki." - ".$degeryirmiuc." = ".$SonucOnBes;
echo "<br>";
$SonDeger = 150;

echo "<br>";
echo $SonucOnBes ."-" .$SonDeger ."=";
$SonucOnBes -= $SonDeger;
echo $SonucOnBes;
echo "<br>";
echo "<br>";
echo "<br>";


//------------- çarpma işlemi
$carpmaBir = 5;
$carpmaIki = 10;
$SonucCarpma = $carpmaBir * $carpmaIki;
echo "<br>";
echo $carpmaBir." * ".$carpmaIki." = ".$SonucCarpma;

$SonucCarpmaIki = 10 * 40;
echo "<br>";
echo "10*40 = " .$SonucCarpmaIki;
echo "<br>";

echo "10 * 70 : ";
echo 10 * 70;
echo "<br>";

$carpmaUc = 5.45;
$carpmaDort = 10.45;
$SonucCarpmaUc = $carpmaUc * $carpmaDort;
echo $carpmaUc." * ".$carpmaDort." = ".$SonucCarpmaUc;
echo "<br>";

$carpmaBes = 5;
$carpmaAlti = 10.84;
$carpmaYedi = 7;
$carpmaSekiz = 8.54;
$SonucCarpmaBes = $carpmaBes * $carpmaAlti * $carpmaYedi * $carpmaSekiz;
echo $carpmaBes." * ".$carpmaAlti." * ".$carpmaYedi." * ".$carpmaSekiz." = ".$SonucCarpmaBes;

$carpmaDokuz = 5;
$ekDeger = 8;
echo "<br>";
echo $carpmaDokuz . "*" .$ekDeger . "=";
$carpmaDokuz *= $ekDeger;
echo $carpmaDokuz;

$carpmaOn = 5;
echo "<br>";
$carpmaOn *= 8;
echo $carpmaOn;
echo "<br>";echo "<br>";echo "<br>";

//-------------     bölme işlemi
$bolmeBir = 5;
$bolmeIki = 10;
$SonucBolme = $bolmeBir / $bolmeIki;
echo "<br>";
echo $bolmeBir." / ".$bolmeIki." = ".$SonucBolme;

$SonucBolmeIki = 10 / 40;
echo "<br>";
echo "10/40 = " .$SonucBolmeIki;
echo "<br>";

echo "10 / 70 : ";
echo 10 / 70;
echo "<br>";

$bolmeUc = 5.45;
$bolmeDort = 10.45;
$SonucBolmeUc = $bolmeUc / $bolmeDort;
echo $bolmeUc." / ".$bolmeDort." = ".$SonucBolmeUc;
echo "<br>";

$bolmeBes = 5456;
$bolmeAlti = 10.84;
$bolmeYedi = 7;
$bolmeSekiz = 8.54;

$SonucBolmeBes = $bolmeBes / $bolmeAlti / $bolmeYedi / $bolmeSekiz;
echo $bolmeBes." / ".$bolmeAlti." / ".$bolmeYedi." / ".$bolmeSekiz." = ".$SonucBolmeBes;

$bolmeDokuz = 68;
$ekDeger = 3;
echo "<br>";
echo $bolmeDokuz . "/" .$ekDeger . "=";
$bolmeDokuz /= $ekDeger;
echo $bolmeDokuz;

$bolmeOn = 58;
echo "<br>";
$bolmeOn /= 5;
echo $bolmeOn;


//--------- php modulus ve atamalı modulus
// 10/3 = 3.33333333
// 25%4 = 2     

$modulusBir = 105;
$modulusIki = 3;
$SonucModulus = $modulusBir % $modulusIki;
echo "<br>";
echo $modulusBir." % ".$modulusIki." = ".$SonucModulus; // 1

$SonucModulusIki = 25 % 4;
echo "<br>";
echo "25%4 = " .$SonucModulusIki; 

echo "<br>";
echo "10 % 70 : ";
echo 10 % 70; 


$modulusUc = 556.45;
$modulusDort = 10.45;
$SonucModulusUc = $modulusUc % $modulusDort;
echo "<br>";
echo $modulusUc." % ".$modulusDort." = ".$SonucModulusUc;

$modulusBes = 578;
$modulusAlti = 18;
$modulusYedi = 7;

$SonucModulusBes = $modulusBes % $modulusAlti % $modulusYedi;
echo "<br>";
echo $modulusBes." % ".$modulusAlti." % ".$modulusYedi." = ".$SonucModulusBes;

$modulusDokuz = 113;
$ekDeger = 3;
echo "<br>";
echo $modulusDokuz . "%" .$ekDeger . "=";
$modulusDokuz %= $ekDeger;
echo $modulusDokuz;

$modulusOn = 125;
$modulusOn %= 4;
echo $modulusOn;

$modulusOnBir = 12500;
$modulusOniki = 14;
$modulusOnuc = 4;

$SonucModulusOnBes = $modulusOnBir % $modulusOniki % $modulusOnuc;

echo "<br>";
echo $modulusOnBir." % ".$modulusOniki." % ".$modulusOnuc." = ".$SonucModulusOnBes;

$sondeger = 5;

echo $SonucModulusOnBes . "%" .$sondeger . "=";
$SonucModulusOnBes %= $sondeger;
echo $SonucModulusOnBes;    

//--------------- beraber matematiksel işlemler yapma

echo 5+300-55*4/100; //işlem önceliği şeklinde yapılır
echo "<br>";

$degerBirr = 5;
$degerIkii = 10;
$degerUcc= 15;
$degerDortt = 20;
$degerbess = 100;

$SonucBirr = $degerBirr + $degerIkii - $degerUcc * $degerDortt / $degerbess;

echo $degerBirr." + ".$degerIkii." - ".$degerUcc." * ".$degerDortt." / ".$degerbess." = ".$SonucBirr;

echo "Sonuc: " .((5+(300-55))*(4/100)); //işlem önceliği çalışır

//---------------- php arttırma ve azaltma

$sayiDeneme = 1;

echo "Sayi " . $sayiDeneme . "<br>";

$sayiDeneme--; //aynı ters şeklinde de çalışıyor --$sayiDeneme
echo "Sayi " . $sayiDeneme . "<br>";

$sayiDeneme++;
echo "Sayi " . $sayiDeneme . "<br>";

$sayiDeneme++;
echo "Sayi " . $sayiDeneme . "<br>";

$sayiDeneme--;
echo "Sayi " . $sayiDeneme . "<br>";








?>
    
</body>
</html>