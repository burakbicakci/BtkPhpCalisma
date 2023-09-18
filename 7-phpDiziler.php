<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    //print_r() fonksiyonu ile dizi içeriğini yazdırma
    //KURALLARI
    //diziler array() fonksiyonu ile veya [] ile tanımlanır
    //harfler, sayılar, boşluklar, alt çizgi ve tire içerebilir
    //boşluk ,türkçe karakter ve özel karakter içeremez
    //php de tanımlı kelimeler kullanılamaz.
    //büyük küçük harf duyarlıdır.
    //anahtar değerleri aynı olan elemanlar oluşturulamaz.
    //her biri dizi için anahtar eleman otomatik olarak atanır.
    //array(Anahtar => eleman, Anahtar => eleman, Anahtar => eleman) şeklinde tanımlanır.
    // array(eleman, eleman, eleman) şeklinde tanımlanır.   

    $isimler = array("Burak", "Mehmet", "Ahmet", "Ayşe", "Fatma");
    echo "<pre>";
    print_r($isimler); //ekrana böyle yazdırır.
    echo "</pre>";

    echo $isimler[0]; //ekrana böyle yazdırır.

    $dersler = array("Eğitmen Burak" => "PHP");
    echo "<pre>";
    print_r($dersler); 
    echo "</pre>";

    $renkler = ["Kırmızı","En Sevdiğim"=>"Mavi", "Yeşil"]; // 0 en sevdiğim 1  şeklinde gider
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";



    //----------------- Sabit dizi oluşturm

    define('DEGERLER', array("Burak", "Mehmet", "Ahmet", "Ayşe", "Fatma"));
    echo "<pre>";
    print_r(DEGERLER);
    echo "</pre>";  
    const DEGERLER2 = array("Burak", "Mehmet", "Ahmet", "Ayşe", "Fatma"); //[] de yapılır ama değişme riskinde dolayı yapmıyoruz.
    echo "<pre>";
    print_r(DEGERLER2);
    echo "</pre>";
    echo DEGERLER2[0];
    define('DEGERLER3', array("ilk"=>"Burak","iki"=>"Mehmet", "Ahmet", "Ayşe", "Fatma"));
    echo DEGERLER3["ilk"] . "<br>";
    echo "<pre>";

    //------------------- Değişken yapıları ile dizi oluşturma
    $isimlerDegisken["Isim1"] = "Burak";
    $isimlerDegisken["Isim2"] = "Mehmet";
    $isimlerDegisken["Isim3"] = "Ahmet";
    $isimlerDegisken[] = "Ayşe";
    $isimlerDegisken[] = "Fatma";
    echo "<pre>";
    print_r($isimlerDegisken);
    echo "</pre>";

    //------------------- Dizi içerisinde değişken ve sabit kullanımı
    $isim = "Burak";
    $soyisim = "bicakci";

    define('ESYA', 'Masa');
    define('ARAC', 'Vapur');
    
    const RENK = "Mavi";
    const Yazilim = "PHP";

    $dizi = array($isim,"Soyisim" => $soyisim, ESYA, ARAC,"renk"=> RENK, Yazilim,"Aktivite" => "Yüzmek");
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";  

    //------------------ dizideki tanımı yapıp sonradan değer ekleme
    $degerler = array();
    $degerler[] = "Burak";
    $degerler["Isim1"] = "Mehmet";
    $degerler[] = "Ahmet";
    $degerler["Isim2"] = "Ayşe";
    $degerler["SonIsim"] = "Fatma";

    echo "<pre>";
    print_r($degerler);
    echo "</pre>";

    echo $degerler[0] . "<br>";
    echo $degerler["Isim1"] . "<br>";
    echo $degerler[1] . "<br>";
    echo $degerler["Isim2"] . "<br>";
    echo $degerler["SonIsim"] . "<br>";

    //------------------ oluşturulmuş diziye yeni eleman ekleme
    $degerler2 = array("Burak","bir"=>"Mehmet", "Ahmet","uc"=>"Ayşe" );
    $degerler2[] = "Fatma";
    $degerler2["iki"] = "Fatma";
    $degerler2[] = "Levent";

    echo "<pre>";
    print_r($degerler2);
    echo "</pre>";

    echo $degerler2[0] . "<br>";
    echo $degerler2["bir"] . "<br>";
    echo $degerler2[1] . "<br>";
    echo $degerler2["uc"] . "<br>";
    echo $degerler2[2] . "<br>";
    echo $degerler2["iki"] . "<br>";
    echo $degerler2[3] . "<br>";


    //------------------ dizi içerisindeki indisleri değiştirme
    $degerler3 = array("PHP"=>"Burak","HTML"=>"Mehmet","JS"=>"Ahmet","CSS"=>"Ayşe" );
    $degerler3["PHP"] = "Fatma";
    $degerler3["HTML"] = "Levent";

    echo "<pre>";
    print_r($degerler3); //[PHP] => Fatma [HTML] => Levent [JS] => Ahmet [CSS] => Ayşe
    echo "</pre>";

    //------------------ diziye farklı bir değişken atama
    $degerler4 = array("PHP"=>"Burak","HTML"=>"Mehmet","JS"=>"Ahmet");
    echo "<pre>";
    print_r($degerler4); //[PHP] => Burak [HTML] => Mehmet [JS] => Ahmet
    echo "</pre>";

    $degerler5 = $degerler4;
    $degerler5["CSS"] = "Fatma";
    $degerler5[] = "Umit";
    echo "<pre>";
    print_r($degerler5); //[PHP] => Burak [HTML] => Mehmet [JS] => Ahmet [CSS] => Fatma [0] => Umit
    echo "</pre>";

    //------------------ birden fazla diziyi tek değişkene atama
    $degerler6 = array("PHP"=>"Burak","HTML"=>"Mehmet","JS"=>"Ahmet");
    $degerler7 = array("CSS"=>"Ayşe","C++"=>"Fatma","C"=>"Levent");
    $degerler8 = array("Java"=>"Umit","Python"=>"Ali","C#"=>"Veli");

    $degertoplam = $degerler6 + $degerler7 + $degerler8;
    echo "<pre>";
    print_r($degertoplam); 
    echo "</pre>";

    //------------------ iç içe çok boyutlu dizi oluşturma
    $degerler_icice = array("Burak","Mehmet", array("Ahmet","Ayşe,"),array("Asli","Cansu"),"Onur","Serkan");
    echo "<pre>";
    print_r($degerler_icice);
    echo "</pre>";
    echo $degerler_icice[0] . "<br>";
    echo $degerler_icice[1] . "<br>";
    print_r($degerler_icice[2]);
    echo "<br>";
    print_r($degerler_icice[3]);
    echo $degerler_icice[4]. "<br>";

    echo $degerler_icice[2][0] . "<br>";
    echo $degerler_icice[2][1] . "<br>";
    echo $degerler_icice[3][0] . "<br>";
    echo $degerler_icice[3][1] . "<br>";


    $degerler_icice2 = array("Bir","Iki",
        
        array("Uc","Dort","Bes",
                "deneme"=>"Altı",
            array("Alti","Yedi","Sekiz",

                array("Dokuz","On","Onbir","deneme"=>"Oniki")
            )

            
            )
                            
    );
        

    echo "<pre>";
    print_r($degerler_icice2);
    echo "</pre>";

    print_r($degerler_icice2[2]);
    echo "<br>";
    print_r($degerler_icice2[2][0]);
    echo "<br>";
    print_r($degerler_icice2[2][1]);
    echo "<br>";
    print_r($degerler_icice2[2][2]);
    echo "<br>";
    print_r($degerler_icice2[2][3]);

?>
    
</body>
</html>