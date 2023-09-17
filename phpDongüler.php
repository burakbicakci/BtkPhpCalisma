<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


//----------------while döngüsü----------------
//yapısı
// while(koşul){
//     yapılacak işlemler
// }

$i = 0;
while($i < 10){
    echo $i."<br>";
    $i++;
}


//----------------do while döngüsü----------------
//yapısı
// do{
//     yapılacak işlemler
// }while(koşul);

$i = 0;
do{
    echo $i."<br>";
    $i++;
}while($i < 10);

//----------------for döngüsü----------------
//yapısı
// for(başlangıç değeri; koşul; arttırma/azaltma){
//     yapılacak işlemler
// }

for($i = 0; $i < 10; $i++){ //-> while ile de yapabiliriz.
    echo $i."<br>";
}

//----------------foreach döngüsü----------------
//yapısı
// foreach(dizi as değişken){
//     yapılacak işlemler
// }

$renler = array("fb"=>"sari - laciver", "bjk"=>"siyah - beyaz", "gs"=>"sari - kirmizi");
foreach($renler as $degerfore ){
    echo $degerfore."<br>";
}

//-------------- çok boyutlu foreach döngüsü----------------
$isimForeach = array("Burak","Ali",array("Ahmet","Mehmet","Ayşe",array("Hüseyin","Hülya")),"Veli",);
foreach($isimForeach as $icerik){
    if(is_array($icerik)){
        foreach($icerik as $degerfor2){
            if(is_array($degerfor2))
            {
                foreach($degerfor2 as $degerfor3){
                    echo $degerfor3."<br>";
                }
            }
            else{
                echo $degerfor2."<br>";
            }
        }
    }else{
        echo $icerik."<br>";
    }
}

//--------------- döngülerde break ve contunio kullanımı
// break döngüyü sonlandırır.
$esyalar = array("kalem","silgi","defter","kitap","kalemtraş","kalem");
foreach($esyalar as $degeresya){
    echo $degeresya."<br>";
    if($degeresya == "kitap"){
        break;
    }
}

// continue döngüyü sonlandırmaz ama o adımda işlem yapmaz.
$esyalar = array("kalem","silgi","defter","kitap","kalemtraş","kalem");
foreach($esyalar as $degeresya){
    echo $degeresya."<br>";
    if($degeresya == "kitap"){
        continue;
    }
}

?>
    
</body>
</html>