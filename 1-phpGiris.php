<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>





<?php   
    // Echo kullanımı
    $isim = "Burak";

    echo "Hello World";
    echo "\n";
    echo "<br />"; // alt satıra geçer
    echo 'Hello World \' Yavuzlar'; // \ işareti ile tırnak işaretini yazdırabiliriz
    echo "\n";
    echo "<br />";
    echo "Benim adım $isim"; // çift tırnak içinde değişken yazdırabiliriz
    echo "\n";
    echo "<br />";
    echo "\n";
    echo "<br />";
    echo "\n";
    echo "<br />";

    // print kullanımı
    print "Hello World";
    print "\n";
    print "<br />";
    print 'Hello World \' Yavuzlar';
    print "\n";
    print "<br />";
    print "Benim adım $isim";
    print "\n";
    print "<br />";
    echo "\n";
    echo "<br />";
    echo "\n";
    echo "<br />";

    //local ve global değişkenler
    $isim = "Burak"; // global değişken
    function isimYaz(){
        $isim = "Yavuzlar"; // local değişken
        echo $isim;
    }
    isimYaz();
    echo "\n";
    echo "<br />";


    //phpinfo() değişkeni
    //INFOALL = Tüm bilgileri gösterir
    //INFOCREDITS = PHP'nin geliştiricileri
    //INFOCONFIGURATION = PHP'nin yapılandırma bilgileri
    //INFOENVIRONMENT = PHP'nin çalışma ortamı bilgileri
    //INFOLICENSE = PHP'nin lisans bilgileri
    //INFOMODULES = PHP'nin modül bilgileri
    //INFOVARIABLES = PHP'nin tanımlanmış tüm değişkenler
    
    phpinfo(INFO_ENVIRONMENT)
    

?>





</body>
</html>