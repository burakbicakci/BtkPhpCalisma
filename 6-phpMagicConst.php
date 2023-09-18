<?php
namespace Yavuzlar; //bu sayesinde yavuzlar/.. şeklinde yazar
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
//__LINE__ = satır numarasını verir.
//__DIR__ =  dizin değerini verir.
//__FILE__ = dosya yolunu verir.
//__Function__ = fonksiyonun adını verir.
//__CLASS__ = sınıfın adını verir.
//__Method__ = metodun adını verir.
// __TRAIT__ = bulunduğu sınıf dahilinde kullanılacak özelliğin,özellik adını verir.
//__NAMESPACE__ = bulunduğu namespace adını verir.

echo __LINE__; // 20. satırda olduğu için 20 yazar.
echo "<br>";

echo __DIR__; // dosyanın bulunduğu dizini verir.
echo "<br>";

echo __FILE__; // dosyanın yolunu verir.
echo "<br>";

function Deneme(){
    $sonuc = __FUNCTION__; // fonksiyonun adını verir.
    echo $sonuc;
}
Deneme();
echo "<br>";
class Deneme2{
    function Deneme3(){
        echo __CLASS__; // sınıfın adını verir.
    }
}
 $Islem = new Deneme2;
$Islem->Deneme3();
echo "<br>";

class Yavuzlar{
    function ornek1(){
        echo __METHOD__; // metodun adını verir. Yavuzlar::ornek1
    }
    function ornek2() {
        echo __METHOD__;
    }
}

$Islem2 = new Yavuzlar;
$Islem2->ornek1();
echo "<br>";

trait OzellikBir{
    function YazBir(){
        echo __TRAIT__; // bulunduğu sınıf dahilinde kullanılacak özelliğin,özellik adını verir.
    }
}
trait Ozellikiki{
    function Yaziki(){
        echo __TRAIT__;
    }
}
    class OzellikClass{
        use OzellikBir;
    }
    $Islem3 = new OzellikClass; //nesne oluyor
    $Islem3->YazBir(); //OzellikBir yazdırır.



echo "<br>";

echo "<br>";
echo __NAMESPACE__; // bulunduğu namespace adını verir.


?>
    
</body>
</html>