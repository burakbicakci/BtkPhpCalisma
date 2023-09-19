<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//fonkisyon : bir veya daha fazla işlemin gerçekleştirilmek üzere önceden hazırlanan küçük işlem parçacıkları

//Kurallar
//1 = Fonksyion isimleri her zaman anlamlı bir isim olmalıdır
//2 =  Fonksiyon isimler (a-z) (A-Z) (0-9) ve alt çizgi içerebilir
//3 = isimler mutlaka harf ya da alt çizgi ile başlamalıdır
//4 = isimler hiçbir zaman rakamla başlayamaz
//5 = fonksyionlar isimlerinde boşluk türkçe karakter  ve özel karakter içeremez
//6 = php tarafından kullanılan özel isimler kullanılamaz
//7 = fonksiyon isimleri tek bir kez kullanılabilir. Yani aynı isimde iki fonksiyon tanımlanamaz
//8 = isimler büyük küçük harf duyarlı değildir
//9= kapsama etki alanı kuralına dahildir.

//yapısı
// function fonksiyonAdi(paremetre(ler)){
// kod bloğu
//}

function YaziYaz(){
    echo "Merhaba Dünya";
}
YaziYaz();
echo "<br>";

function Yazi_Yaz(){
    echo "Merhaba Dünya";
}
Yazi_Yaz();
echo "<br>";

// function 5YaziYaz(){ //hatalı
//     echo "Merhaba Dünya";
// }
// YaziYaz()

// function Yazi Yaz(){ //hatalı
//     echo "Merhaba Dünya";
// }
// YaziYaz()

// function YazıYaz(){ //hatalı
//     echo "Merhaba Dünya";
// }
// YaziYaz()

// function YaziYaz(){ // iki tane aynı isim hatalı
//     echo "Merhaba Dünya";
// }
// YaziYaz()

function Yazdir(){
    $sayi = 1;
    while($sayi <= 10){
        echo $sayi . "<br>";
        $sayi++;
    }
}
Yazdir();

// //-------------------------- fonksiyon kapsama alanı

// $isim = "Burak";
// function IsimYaz(){
//     echo $isim;
// }
// IsimYaz(); //hata verir kapsama alanında değil!

$GLOBALS["isim"] = "Burak";
function IsimYaz(){
    echo $GLOBALS["isim"];
}
IsimYaz(); // şimid çalışır global değişkeni kullandık
echo "<br>";

$isimGlobals = "Burak";
$soyIsim = "Bicakci";
function IsimYazGlobals(){
    global $isimGlobals; //bu şekilde de kullanabiliriz
    global $soyIsim;
    echo $isimGlobals . " " . $soyIsim;
}
IsimYazGlobals(); 

define("isim", "Burak");
function IsimYazDefine(){
    echo isim;
}
IsimYazDefine(); // bu da kullanılıyor.
echo "<br>";

//---------------------------- anonim 

$Yazdir = function(){
    echo "Merhaba Dünya";
};
$Yazdir();

$islemDizi = array(
    "volkan", "burak", "ali",function(){
        echo "Merhaba ";
    },"veli");

    $islemDizi[3]();

$islemDiziToplu = 
array(
    function(){
        echo "Merhaba ";
    },
    function(){
        echo "Dünya";
    }
    
);

echo "<br>";
print_r($islemDiziToplu);
echo "<br>";

$islemDiziToplu[0]();
$islemDiziToplu[1]();


//koşula bağlı olarak fonkisyon tanımlama
$degerIf = "Burak";   
// if($degerIf == "Burak"){
//     function Yazdir(){
//         echo "Merhaba Burak";
//     }
// }else{
//     function Yazdir(){
//         echo "Merhaba Misafir";
//     }
// }   
// Yazdir();

// switch($degerIf){
//     case "Burak":
//         function Yazdir(){
//             echo "Merhaba Burak";
//         }
//         break;
//     default:
//         function Yazdir(){
//             echo "Merhaba Misafir";
//         }
//         break;
// }
// Yazdir();


echo "<br>";
echo "<br>";
//---------------- return  
function ReturnYapma(){
    $IsimReturn = "Burak";
    return $IsimReturn;
}
echo "<br>";
echo ReturnYapma();

if($isim == "Burak"){
    echo "<br>";
    echo "Merhaba " . ReturnYapma();
} else{
    echo "Merhaba Misafir";
}

echo "<br>";
echo "<br>";
//---------- return ile birden fazla değer döndürme
function Topluislem(){
    $isimToplu = "Burak";
    $soyisimToplu = "Bicakci";
    $yas = 20;

    // return $isimToplu;
    // return $soyisimToplu;
    // return $yas;
    return array($isimToplu, $soyisimToplu, $yas); // bu şekilde de döndürebiliriz
}

echo "<br>";
$sonuc = Topluislem(); // sadece ilk return değerini döndürür

echo "sonuc 1 " . $sonuc[0];
echo "<br>";
echo "sonuc 2 " . $sonuc[1];
echo "<br>";
echo "sonuc 3 " . $sonuc[2];

function islemYap($isim, $soyisim, $yas){
    $GelenIsim = $isim;
    $GelenSoyisim = $soyisim;
    $GelenYas = $yas;

    $kisiKarti  = "adi: " . $GelenIsim . "Soyadi" . $GelenSoyisim . "Yasi" . $GelenYas;
    return $kisiKarti;
}

echo "<br>";
echo islemYap("Burak", "Bicakci", 20);

function islemYapVarsayilan($isim2="Burak", $soyisim="bicakci", $yas=19){
 

    $kisiKarti  = "adi: " . $isim2 . "Soyadi" . $soyisim . "Yasi" . $yas; //böyle de kullanılır
    echo "<br>";
    return $kisiKarti;
}

echo islemYapVarsayilan("","",25);

echo "<br>";
echo "<br>";

//--------------- sınırsız argüman gönderme
//func_num_args() : fonksiyona gönderilen argüman sayısını döndürür
//func_get_arg(index) : fonksiyona gönderilen argümanlardan belirtilen index numarasındaki argümanı döndürür
//func_get_args() : fonksiyona gönderilen tüm argümanları dizi olarak döndürür

function GelenBilgiler(){
    $GelenParemetreSayisi = func_num_args();
    echo "Gelen Paremetre Sayisi : " . $GelenParemetreSayisi . "<br>";
    $GelenParemetreDegeri = func_get_arg(0);
    echo "Gelen Paremetre Degeri : " . $GelenParemetreDegeri . "<br>";
    $GelenParemetreDegeriDizi = func_get_args();
    echo "<pre>";
    print_r($GelenParemetreDegeriDizi);
    echo "</pre>";
}

GelenBilgiler("Burak", "Bicakci", 20, "Ankara");

//--------------------------- başka bir fonksiyona değer döndürme

echo "<br>";
echo "<br>";
function paraBirimi($birim,$tutar){
    if($birim == "TR"){
        $kur = 1;
    }
    elseif($birim == "USD"){
        $kur = 2;
    }
    elseif($birim == "EURO"){
        $kur = 3;
    }
    return Hesapla($birim,$kur,$tutar);
}

function Hesapla($biri,$kur,$tutar){
    $sonuc = $kur * $tutar;
    echo $tutar . " Tutarlı " . $biri . " Karşılığındaki tr değeri : " . $sonuc . " TL" . "<br>";
}

echo    paraBirimi("TR", 1000);
echo "<br>";

//----------------- foonksiyonlarda değere bağlı referans gönderme
// çok nadir kullanılır.

echo "<br>";
echo "<br>";
$Bir = "Burak";

function ReferansGonder(){
    $Bir = "Hüseyin";
    echo $Bir; //hüseyin
}

ReferansGonder();
echo "<br>"; //burak
echo $Bir;


$iki = "Ahmet";

function ReferansGonder2(&$iki){ //ampersant ile içerideki ikide depolanan değer neyse dışarıdaki iki'nin de veriis değişiyor.
    $iki = "Mehmet";
    echo $iki; //mehmet
}

ReferansGonder2($iki);

echo "<br>"; //mehmet



//----------------- fonksiyonu belirli bir yerden durdurma ve fonksiyondan çıkarma


function Deneme(){
    echo "Burak";
    echo "Bicakci";
    echo "Ankara";
    return;
    echo "Bursa";
    echo "İstanbul";
    echo "İzmir";
}

Deneme(); // burak bicakci ankara yazar retun da çıkar
echo "<br>";echo "<br>";


function Islem($maksTaksit=0){
    echo "Kredi Kartı ile tek çekimli sepet tutarı : 1000 TL <br>";
    if($maksTaksit==0){
        return;
    }
    echo "kredi kartı ile iki taksitli sepet tutarı : 1010 TL <br>";
    if($maksTaksit==2){
        return;
    }
    echo "kredi kartı ile üç taksitli sepet tutarı : 1020 TL <br>";
    if($maksTaksit==3){
        return;
    }
    echo "kredi kartı ile dört taksitli sepet tutarı : 1030 TL <br>";
    if($maksTaksit==4){
        return;
    }
    echo "kredi kartı ile beş taksitli sepet tutarı : 1040 TL <br>";
    if($maksTaksit==5){
        return;
    }
    echo "kredi kartı ile altı taksitli sepet tutarı : 1050 TL <br>";
    if($maksTaksit==6){
        return;
    }
    echo "kredi kartı ile yedi taksitli sepet tutarı : 1060 TL <br>";
    if($maksTaksit==7){
        return;
    }
}

Islem(6);
echo "<br>";

echo "<br>";
echo "<br>";
//------------ fonksiyonu herhangi bir değere atarak çalışma
$calistir =   "Calisti";

function Calisti(){
    echo "Merhaba Dünya";
    echo "<br>";

}

$calistir();

echo "<br>";
echo "<br>";
//----------------- otomatik çalışan fonksiyon tanımlama ve ona paremetre tanımlama

($otomatikCalis = function(){ // kendisi çağrılmadna otomatik çalışır
    echo "Merhaba Dünya";
    echo "<br>";
})(); //() -> çalışması gerektiğini belirtiyor.

($otomatikCalis2 = function($isim){ // normal foksiyon gibi paremetre gelen yer
    echo "Merhaba " . $isim;
    echo "<br>";
})("Burak"); //() -> içine de göndermek istedğimiz değeri yazıyoruz.


($otomatikCalis3 = function($isim ="",$soyIsim = "",$yas = 0){ 
   if($isim != ""){
         echo "Merhaba " . $isim;
   }
    if($soyIsim != ""){
          echo " " . $soyIsim;
    }
    if($yas != 0){
        echo " " . $yas; // göndermediğimizden boş dönecek.
    }
})("Burak","Bicakci"); 

//-------------------recursive fonksiyonlar

$Baslangic = 1;
while($Baslangic <=25){
    echo $Baslangic . "<br>";
    $Baslangic++;
}
echo "<br>"; 
function islemYapİki($sayi){
    echo $sayi . "<br>";
    // islemYapİki($sayi+1); //bunu yaparsak sonsuz döngüye girer ve sürekli kendini çağırır

}
islemYapİki(1);

//------------------ fonksiyon içinde statik deger tanımlama

echo "<br>";
echo "<br>";
function islemYapUc(){
    $sayi  = 0;
    $sayi = $sayi + 1;
    echo $sayi . "<br>"; // hep bir sayi degerini veriyor
}
islemYapUc();
islemYapUc();
islemYapUc();
islemYapUc();

echo "<br>";
function islemYapDort(){
    static $sayi  = 0;
    $sayi = $sayi + 1;
    echo $sayi . "<br>"; // static değer açtığımızdan dolayı arta arta gidiyor
}

islemYapDort();
islemYapDort();
islemYapDort();

echo "<br>";
echo "<br>";

//--------------- yield ifadesi 
//yield ifadesi fonksiyonlardan değer döndürmek için kullanılır aynı return işlemi gibi

function yieldISlem($baslangic,$bitis){
    while($baslangic <= $bitis){
        echo $baslangic . " ";
        $baslangic++;
        //buraya bir return koyarsak sadece 1 değer döndürür
    }
}

yieldISlem(1,10);

function yieldISlem2($baslangic,$bitis){
    while($baslangic <= $bitis){
        echo $baslangic . " ";
        yield ; //deger döndürmek şu an bir değer döndürmeden boş duruyor
    }
}
yieldISlem2(1,10);

function yieldISlem3($baslangic,$bitis){
        $Sayilar = array();
    while($baslangic <= $bitis){
        $Sayilar [] = $baslangic;
        $baslangic++;
    }
    return $Sayilar;
}

$SonucReturn = yieldISlem3(1,10); // fazlalaşırsa byte degeri artarak bellekte yer kaplar ve bellek atanır

foreach ($SonucReturn as $Deger){
    echo $Deger . " ";
}

echo "<br>";
$BellekTuketimi = memory_get_usage();
echo "Bellek Tüketimi : " . $BellekTuketimi . " Byte"; // 458496 Byte


echo "<pre>";
print_r($SonucReturn);
echo "</pre>";

function yieldISlem4($baslangic,$bitis){
while($baslangic <= $bitis){
    yield $baslangic; // bundan sonraki kod çalışır ve byte tüketimi azalır
    $baslangic++;

}

}

$SonucReturnYield = yieldISlem3(1,10); // fazlalaşırsa byte degeri artarak bellekte yer kaplar ve bellek atanır

foreach ($SonucReturnYield as $Deger){
echo $Deger . " ";
}



echo "<br>";
$BellekTuketimi = memory_get_usage();
echo "Bellek Tüketimi : " . $BellekTuketimi . " Byte"; // 458496 Byte


echo "<pre>";
print_r($SonucReturn);
echo "</pre>";



echo "<br>";echo "<br>";
echo "<br>";



//---------------- iç içe çok boyutlu fonksiyonlar ile çalışma  

function Bir(){
    function Iki(){
        function Uc(){
            function Dort(){
                function Bes(){
                    echo "Besinci Fonksiyon";
                }
                echo "Dorduncu Fonksiyon";
            }
            echo "Ucuncu Fonksiyon";
        }
        echo "Ikinci Fonksiyon";
    }
    echo "Birinci Fonksiyon";
}

Bir();
echo "<br>";
Iki();
echo "<br>";
Uc();
echo "<br>";
Dort();
echo "<br>";
Bes();
echo "<br>";

//hepsini hiyerarşik bir yapıda çalıştırmamız gerekli

function IslemSonucuMesaj(){
    function TamamMesaj(){
        echo "İşlem Gerçekleşti";
    }
    function HataMesaj(){
        echo "İşlem Gerçekleşmedi";
    }
    function UyariMesaj(){
        echo "İşlem Aktif Değil";
    }
}
    
$Sonuc = "tamam" ;

if($Sonuc == "tamam"){
    IslemSonucuMesaj();
    $Mesaj = TamamMesaj();
    echo $Mesaj;
}elseif($Sonuc=="hata"){
    IslemSonucuMesaj();
    $Mesaj = HataMesaj();
    echo $Mesaj;
}else{
    IslemSonucuMesaj();
    $Mesaj= UyariMesaj();
    echo $Mesaj;
}
echo "<br>";
echo "<br>";



//---------------- iç içe çok boyutlu fonksiyonlarda paremetre tanımlama ve çağırma

function icIcebir ($isim,$soyisim){
    function icIceiki($meslek,$yas){
        echo  $meslek . " " . $yas ."<br>";
    }
    echo $isim . " " . $soyisim . "<br>";
}

icIcebir("Burak","Bicakci");
icIceiki("Öğrenci",20);

echo "<br>";
echo "<br>";

//---------------- iç içe çok boyutlu fonksiyonlar içinde paremetre tanımlama ve çağırma

function icIce_1($isim){
    function icIce_2($soyisim){
        echo $soyisim . " ";
    }
    echo $isim . " ";
    icIce_2("bicakci");
}
icIce_1("burak");

echo "<br>";

function icIce__1($isim){
    function icIce__2($soyisim){
        echo $soyisim . " ";
    }
    return $isim . " "; //sadece burak yazar
    icIce__2("bicakci");
}
$sonucicIce = icIce__1("burak");
echo $sonucicIce;

echo "<br>";

echo "<br>";

function isimYazicIce($isim = "Burak "){
    function soyisimYazicIce($soyisim = "Bicakci"){
        function yasYaz($yas = 20){
            echo $yas;
        }
        echo $soyisim . " " . "<br>";   
        yasYaz(21); // gönderdiğim 21 değerini alır
    }
    echo $isim . " " . "<br>";
    soyisimYazicIce();
}
isimYazicIce();

echo "<br>";
echo "<br>";
echo "<br>";

//--------------------- iç içe çok boyutlu fonksiyonlarda alt paremetreden fonksiyon alma

function icIceDegerBir($degerBir){
    function icIceDegerIki($degerIki){
        function icIceDegerUc($degerUc){
            echo $degerUc . " ";
        }
        icIceDegerUc($degerIki);
    }
    icIceDegerIki($degerBir);
}
icIceDegerBir("Burak"); // ekrana burak yazar
echo "<br>";

function icIceDeger_Bir($degerBir_ad = "Burak", $degerIki_soyad = "Bicakci",$degerUc_yas = 20){
    function icIceDeger_Iki($degerIki_ad = "ahmet", $degerIki_soyad = "bicak",$degerIki_yas = 25){
        function icIceDeger_Uc($degerUc_ad = "Hüseyin", $degerUc_soyad = "değmez",$degerUc_yas = 30){
            echo $degerUc_ad . " " . $degerUc_soyad . " " . $degerUc_yas . " " . "<br>";
        }
        icIceDeger_Uc($degerIki_ad,$degerIki_soyad,$degerIki_yas);
    }
    icIceDeger_Iki($degerBir_ad,$degerIki_soyad,$degerUc_yas);
}
icIceDeger_Bir("Ali","Bicakci"); // ekrana ali bicakci 20 yazar ikinic fonksiyona 20 degeri aktarılır
echo "<br>";

?>
    
</body>
</html>