<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    //----------- If Else yapısı -------------
    //if => eğer
    //else => değilse
    //elseif => eğilse eğer

    //yapısı

    //if (koşul) {
    //  koşul sağlanırsa çalışacak kodlar
    //} elseif (koşul) {
    //  koşul sağlanırsa çalışacak kodlar
    //} else {
    //  koşul sağlanmazsa çalışacak kodlar
    //}

    if(5>10)
    {
        echo "5 10'dan büyüktür ve if koşulu sağlanmıştır.";
    }
    elseif(20>10)
    {
        echo "5 10'a eşittir ve elseif koşulu sağlanmıştır.";
    }
    else
    {
        echo "5 10'dan küçüktür ve else koşulu sağlanmıştır.";
    }
    echo "<br />";  echo "<br />";

    $isim = "burak";
    $isim2 = "ahmet";

    if($isim == "hakan")
    {
        echo "iif blogu çalıştı ve isim hakan'a eşittir.";
    }
    else
    {
        echo "else blogu çalıştı ve isim hakan'a eşit değildir.";
    }

    $ay = "ocak";

    if($ay == "ocak")
    {
        echo "ocak ayı 1.aydır";
    }
    elseif($ay == "şubat")
    {
        echo "şubat ayı 2.aydır";
    }
    else{
        echo "belirtilen aylardan biri değildir.";
    }
    echo "<br />";  echo "<br />";
    $saat = 11;

    if($saat>=0 and $saat<=6)
    {
        echo "iyi geceler";
    }
    elseif($saat>=6 and $saat<=9)
    {
        echo "günaydın";
    }
    elseif($saat>=10 and $saat<=17)
    {
        echo "iyi günler";
    }
    elseif($saat>=17 and $saat<=23)
    {
        echo "iyi akşamlar";
    }
    else
    {
        echo "geçersiz saat aralığı";
    }
    echo "<br />";  echo "<br />";
   

    //------------- çok boyutlu if else ve elseif yapısı -------------

    $saat2 = 20;

    if($saat2>=0 and $saat2<=6)
    {
        if($saat2 == 0)
        {
            echo "iyi geceler şu an saat 00:00";
        }
        elseif($saat2 == 1)
        {
            echo "iyi geceler şu an saat 01:00";
        }
        elseif($saat2 == 2)
        {
            echo "iyi geceler şu an saat 02:00";
        }
        elseif($saat2 == 3)
        {
            echo "iyi geceler şu an saat 03:00";
        }
        elseif($saat2 == 4)
        {
            echo "iyi geceler şu an saat 04:00";
        }
        elseif($saat2 == 5)
        {
            echo "iyi geceler şu an saat 05:00";
        }
        elseif($saat2 == 6)
        {
            echo "iyi geceler şu an saat 06:00";
        }
        else{
            echo "geçersiz saat aralığı";
        }
    
    }
    elseif($saat2>=7 and $saat2<=9)
    {
        if($saat2 == 7)
        {
            echo "günaydın şu an saat 07:00";
        }
        elseif($saat2 == 8)
        {
            echo "günaydın şu an saat 08:00";
        }
        elseif($saat2 == 9)
        {
            echo "günaydın şu an saat 09:00";
        }
        else{
            echo "geçersiz saat aralığı";
        }
    }
    elseif($saat2 >= 10 and $saat2<=12){
        if($saat2 == 10)
        {
            echo "iyi günler şu an saat 10:00";
        }
        elseif($saat2 == 11)
        {
            echo "iyi günler şu an saat 11:00";
        }
        elseif($saat2 == 12)
        {
            echo "iyi günler şu an saat 12:00";
        }
        else{
            echo "geçersiz saat aralığı";
        }
    }
    elseif($saat2 >= 12 and $saat2<=18){
        if($saat2 == 11)
        {
            echo "iyi günler şu an saat 11:00";
        }
        elseif($saat2 == 12)
        {
            echo "iyi günler şu an saat 12:00";
        }
        elseif($saat2 == 13)
        {
            echo "iyi günler şu an saat 13:00";
        }
        elseif($saat2 == 14)
        {
            echo "iyi günler şu an saat 14:00";
        }
        elseif($saat2 == 15)
        {
            echo "iyi günler şu an saat 15:00";
        }
        elseif($saat2 == 16)
        {
            echo "iyi günler şu an saat 16:00";
        }
        elseif($saat2 == 17)
        {
            echo "iyi günler şu an saat 17:00";
        }
        elseif($saat2 == 18)
        {
            echo "iyi günler şu an saat 18:00";
        }
        else{
            echo "geçersiz saat aralığı";
        }
    }
    elseif($saat2 >= 19 and $saat2<=23){
        if($saat2 == 19)
        {
            echo "iyi akşamlar şu an saat 19:00";
        }
        elseif($saat2 == 20)
        {
            echo "iyi akşamlar şu an saat 20:00";
        }
        elseif($saat2 == 21)
        {
            echo "iyi akşamlar şu an saat 21:00";
        }
        elseif($saat2 == 22)
        {
            echo "iyi akşamlar şu an saat 22:00";
        }
        elseif($saat2 == 23)
        {
            echo "iyi akşamlar şu an saat 23:00";
        }
        else{
            echo "geçersiz saat aralığı";
        }
    }
    else{
        echo "geçersiz saat aralığı";
    }
    echo "<br />";  echo "<br />";

    //--------- switch case yapısı ------------
    //switch => anahtar kelime
    //case => durumlar
    //break => durumlar arası geçiş
    //default => varsayılan durum

    $ayAdi = "ocak";

    switch($ayAdi)
    {
        case $ayAdi == "ocak":
            echo "ocak ayı 1.aydır";
            break;
        case $ayAdi =="şubat":
            echo "şubat ayı 2.aydır";
            break;
        case $ayAdi =="mart":
            echo "mart ayı 3.aydır";
            break;
        case $ayAdi =="nisan":
            echo "nisan ayı 4.aydır";
            break;
        case $ayAdi =="mayıs":
            echo "mayıs ayı 5.aydır";
            break;
        case $ayAdi == "haziran":
            echo "haziran ayı 6.aydır";
            break;
        case $ayAdi =="temmuz":
            echo "temmuz ayı 7.aydır";
            break;
        case $ayAdi =="ağustos":
            echo "ağustos ayı 8.aydır";
            break;
        case $ayAdi =="eylül":
            echo "eylül ayı 9.aydır";
            break;
        case $ayAdi =="ekim":
            echo "ekim ayı 10.aydır";
            break;
        case $ayAdi =="kasım":
            echo "kasım ayı 11.aydır";
            break;
        case $ayAdi =="aralık":
            echo "aralık ayı 12.aydır";
            break;
        default:
            echo "belirtilen aylardan biri değildir.";
            break;
    }

    $saat3 = 20;

    switch($saat3)
    {
        case $saat3>=0 and $saat3<=6:
            switch($saat3)
            {
                case $saat3 == 0:
                    echo "iyi geceler şu an saat 00:00";
                    break;
                case $saat3 == 1:
                    echo "iyi geceler şu an saat 01:00";
                    break;
                case $saat3 == 2:
                    echo "iyi geceler şu an saat 02:00";
                    break;
                case $saat3 == 3:
                    echo "iyi geceler şu an saat 03:00";
                    break;
                case $saat3 == 4:
                    echo "iyi geceler şu an saat 04:00";
                    break;
                case $saat3 == 5:
                    echo "iyi geceler şu an saat 05:00";
                    break;
                case $saat3 == 6:
                    echo "iyi geceler şu an saat 06:00";
                    break;
                default:
                    echo "geçersiz saat aralığı";
                    break;
            }
            break;
        case $saat3>=7 and $saat3<=9:
            switch($saat3)
            {
                case $saat3 == 7:
                    echo "günaydın şu an saat 07:00";
                    break;
                case $saat3 == 8:
                    echo "günaydın şu an saat 08:00";
                    break;
                case $saat3 == 9:
                    echo "günaydın şu an saat 09:00";
                    break;
                default:
                    echo "geçersiz saat aralığı";
                    break;
            }
            break;
        case $saat3 >= 10 and $saat3<=12:
            switch($saat3)
            {
                case $saat3 == 10:
                    echo "iyi günler şu an saat 10:00";
                    break;
                case $saat3 == 11:
                    echo "iyi günler şu an saat 11:00";
                    break;
                case $saat3 == 12:
                    echo "iyi günler şu an saat 12:00";
                    break;
                default:
                    echo "geçersiz saat aralığı";
                    break;
                }

            }
            echo "<br />";  echo "<br />";
    //---------- çok boyutlu switch case yapısı ------------

    $saat4 = 15;

    switch($saat4)
    {
        case $saat4>=0 and $saat4<=6:
            switch($saat4)
            {
                case $saat4 == 0:
                    echo "iyi geceler şu an saat 00:00";
                    break;
                case $saat4 == 1:
                    echo "iyi geceler şu an saat 01:00";
                    break;
                case $saat4 == 2:
                    echo "iyi geceler şu an saat 02:00";
                    break;
                case $saat4 == 3:
                    echo "iyi geceler şu an saat 03:00";
                    break;
                case $saat4 == 4:
                    echo "iyi geceler şu an saat 04:00";
                    break;
                case $saat4 == 5:
                    echo "iyi geceler şu an saat 05:00";
                    break;
                case $saat4 == 6:
                    echo "iyi geceler şu an saat 06:00";
                    break;
                default:
                    echo "geçersiz saat aralığı";
                    break;
            }
            break;
        case $saat4>=7 and $saat4<=9:
            switch($saat4)
            {
                case $saat4 == 7:
                    echo "günaydın şu an saat 07:00";
                    break;
                case $saat4 == 8:
                    echo "günaydın şu an saat 08:00";
                    break;
                case $saat4 == 9:
                    echo "günaydın şu an saat 09:00";
                    break;
                default:
                    echo "geçersiz saat aralığı";
                    break;
            }
            break;
        case $saat4 >= 10 and $saat4<=12:
            switch($saat4)
            {
                case $saat4 == 10:
                    echo "iyi günler şu an saat 10:00";
                    break;
                case $saat4 == 11:
                    echo "iyi günler şu an saat 11:00";
                    break;
                case $saat4 == 12:
                    echo "iyi günler şu an saat 12:00";
                    break;
                default:
                    echo "geçersiz saat aralığı";
                    break;
                }
                break;
        case $saat4 >= 12 and $saat4<=18:
            switch($saat4)
            {
                case $saat4 == 11:
                    echo "iyi günler şu an saat 11:00";
                    break;
                case $saat4 == 12:
                    echo "iyi günler şu an saat 12:00";
                    break;
                case $saat4 == 13:
                    echo "iyi günler şu an saat 13:00";
                    break;
                case $saat4 == 14:
                    echo "iyi günler şu an saat 14:00";
                    break;
                case $saat4 == 15:
                    echo "iyi günler şu an saat 15:00";
                    break;
                case $saat4 == 16:
                    echo "iyi günler şu an saat 16:00";
                    break;
                case $saat4 == 17:
                    echo "iyi günler şu an saat 17:00";
                    break;
                case $saat4 == 18:
                    echo "iyi günler şu an saat 18:00";
                    break;
                default:
                    echo "geçersiz saat aralığı";
                    break;
            }
            break;
        case $saat4 >= 19 and $saat4<=23:
            switch($saat4)
            {
                case $saat4 == 19:
                    echo "iyi akşamlar şu an saat 19:00";
                    break;
                case $saat4 == 20:
                    echo "iyi akşamlar şu an saat 20:00";
                    break;
                case $saat4 == 21:
                    echo "iyi akşamlar şu an saat 21:00";
                    break;
                case $saat4 == 22:
                    echo "iyi akşamlar şu an saat 22:00";
                    break;
                case $saat4 == 23:
                    echo "iyi akşamlar şu an saat 23:00";
                    break;
                default:
                    echo "geçersiz saat aralığı";
                    break;
            }
            break;
        default:
            echo "geçersiz saat aralığı";
            break;
    }
    echo "<br />";  echo "<br />";
    //---------- ternary koşul ifadesi
    //:? ifadesidir 
    //yapısı 
    //Kuşul veya koşullar ? geçerli ifade : geçersiz ifade:

        $DegerTer = "Burak";

        $sonucter = ($DegerTer=="Burak" ? "Değer doğru" : "Değer yanlış");

        $degerTer1 = 5;
        $degerTer2 = 10;
        $degerTer2 = 15;
        $mesaj1 = "Merhaba burak nasılsın";
        $mesaj2 = "Merhaba ahmet nasılsın";

        $sonucTer2 = ($degerTer1 == 5 and  $degerTer2 ==10 and $degerTer3 == 15 ? $mesaj1 : $mesaj2);
        
        //-------null ifadesi

        $Gelenisim = $_Get["isim"] ?? "isim değeri yok";
        $GelenSoyisim = $_Get["soyisim"] ?? "soyisim değeri yok";
        echo "<br />";
        echo $Gelenisim;
        echo "<br />";
        echo $GelenSoyisim;
        echo "<br />";  echo "<br />";
        //--------- goto ifadesi

        $degerGoto = 5;
        if($degerGoto == 5)
        {
            goto Genel;
        }elseif($degerGoto == 10)
        {
            goto Yönetim;
        }elseif($degerGoto == 15)
        {
            goto Eğitimci;
        }else{
            goto Diger;
        }
        
        Genel :
        echo "Genel Yönetim ";
        Yönetim :
        echo "Yönetim ";
        Eğitimci :
        echo "Eğitimci ";
        Diger :
        echo "Diğer     ";

        //-------------- istisnalar
        //try : hata oluşturabilecek kodlar için kullanılır
        //catch : hata oluştuğunda çalışacak kodlar için kullanılır
        //finally : hata olsun veya olmasın çalışacak kodlar için kullanılır
        //throw : hata oluşturacak kodlarda istisnai kodlarda kullanılır.
        //exception : önceden tanımlı temel sınıfı çağırır
        //getMessage() : hataların atandığı veri türünü döndürür

        try{
            $deger1 = 100;
            $deger2 = 2;

            if($deger2 == 0)
            {
                throw new Exception("Değer 0 olamaz");
            }
            else{
                echo "<br />";
                echo $deger1 / $deger2;
            }
        }catch(Exception $hata){
            echo $hata->getMessage();
        }finally{
            echo "<br />";
            echo "final ifadesi kodu ve her zaman çalışır.";
        }

        //-------------- hata raporlama işlemleri
        //error_reporting() : hata raporlama işlemlerini yapar
        //Hata Seviyeleri : E_ALL,E_ERROR,E_WARNING,E_PARSE,E_NOTICE
        //E_ALL : Tüm hataları raporlar
        //E_ERROR : Sadece hata türü hataları raporlar
        //E_WARNING : Sadece uyarı türü hataları raporlar
        //E_PARSE : Sadece derleme türü hataları raporlar
        //E_NOTICE : Sadece bildirim türü hataları raporlar

        error_reporting(E_ALL);
        echo "<br />";
        echo $deger1 / $deger2;
       echo error_reporting(E_ALL ^ E_NOTICE);
        echo "<br />";


        //---------- hata denetim operatörleri
        //@ : hata denetim operatörüdür
        //yapısı
        //@hata oluşturabilecek kodlar

        
    ?>
</body>
</html>