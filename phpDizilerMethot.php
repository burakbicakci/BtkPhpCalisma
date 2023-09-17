<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// ---------count() dizinin eleman sayısını verir.
//---------sizeof() dizinin eleman sayısını verir.
//------------COUNT_RECURSIVE dizinin içindeki dizilerin eleman sayısını da hesaplar.

$dizi = array("elma", "armut", "kiraz", "muz", "karpuz");
echo "<pre>";
print_r($dizi);
echo "</pre>";

echo "Dizinin eleman sayısı: ".count($dizi)."<br>";
echo "Dizinin eleman sayısı: ".sizeof($dizi)."<br>";
$dizininElemanS = count($dizi, COUNT_RECURSIVE);
echo "Dizinin eleman sayısı: ".$dizininElemanS."<br>"; //farkı komple sayıyor.
 
//------------array_unshift() dizinin başına eleman ekler.
//-------------array_push() dizinin sonuna eleman ekler.
$diziyeni = array("bir"=>"karpuz","iki"=> "kavun","üç"=> "çilek");

$diziekleuns = array_unshift($dizi, "kavun");
// $diziekleuns = array_unshift($dizi, "dört"=>"kavun"); hata verir çünkü indis numarası eklenemez.

echo "<pre>";
print_r($dizi);
echo "</pre>";
$dizieklepus = array_push($dizi,"çilek");
echo "<pre>";
print_r($dizi);
echo "</pre>";




//-----------array_shift() dizinin başındaki elemanı siler.
//------------array_pop() dizinin sonundaki elemanı siler.

$diziisim = array("burak", "ahmet", "mehmet", "ali", "veli");
echo "<pre>";
print_r($diziisim);
echo "</pre>";
array_shift($diziisim); //burak silindi.
echo "<pre>";
print_r($diziisim);
echo "</pre>";
array_pop($diziisim); //veli silindi.
echo "<pre>";
print_r($diziisim);
echo "</pre>";

$diziisim2 = array("burak", "ahmet", "mehmet",array("zeynep","asli"), "ali", "veli");

echo "<pre>";
print_r($diziisim2);
echo "</pre>";
array_shift($diziisim2[3]); //zeynep silindi.
echo "<pre>";
print_r($diziisim2);
echo "</pre>";
array_pop($diziisim2[3]); //asli silindi.
echo "<pre>";
print_r($diziisim2);

//----------key() dizinin gösterdiği elemanın anahtarını bulmak için kullnaılır
$diziisim3 = array("bir"=>"burak","iki"=>"ahmet", "mehmet", "ali", "veli");
echo "<pre>";
print_r($diziisim3);
echo "</pre>";

$sonuc = key($diziisim3);
echo "Dizinin gösterdiği elemanın anahtarı: ".$sonuc."<br>";    //bir

//------------urrent() dizinin gösterdiği elemanın bulmak için kullanılır.
//------------pos() dizinin gösterdiği elemanın bulmak için kullanılır.

$diziisim4 = array("bir"=>"burak","iki"=>"ahmet", "mehmet", "ali", "veli");
echo "<pre>";
print_r($diziisim4);
echo "</pre>";
$sonucCurrent = current($diziisim4);
echo "Dizinin gösterdiği elemanın değeri: ".$sonucCurrent."<br>";    //burak
$sonucPos = pos($diziisim4);
echo "Dizinin gösterdiği elemanın değeri: ".$sonucPos."<br>";    //burak

//----------end() dizinin son elemanına gider.
$diziisim5 = array("burak","ahmet", "mehmet", "ali", "veli");
echo "<pre>";
print_r($diziisim5);
echo "</pre>";
$sonucEnd = end($diziisim5);
echo "Dizinin son elemanı: ".$sonucEnd."<br>";    //veli

//---------next() dizinin gösterdiği elemanın bir sonraki elemanına gider.
//---------prev() dizinin gösterdiği elemanın bir önceki elemanına gider.
$diziisim6 = array("burak","ahmet", "mehmet", "ali", "veli");
echo "<pre>";
print_r($diziisim6);
echo "</pre>";
$sonucNext1 = next($diziisim6);
echo "Dizinin gösterdiği elemanın bir sonraki elemanı: ".$sonucNext1."<br>";    //ahmet
$sonucNext2 = next($diziisim6);
echo "Dizinin gösterdiği elemanın bir sonraki elemanı: ".$sonucNext2."<br>";    //mehmet

$sonucPrev1 = prev($diziisim6);
echo "Dizinin gösterdiği elemanın bir önceki elemanı: ".$sonucPrev1."<br>";    //ahmet
$sonucPrev2 = prev($diziisim6);
echo "Dizinin gösterdiği elemanın bir önceki elemanı: ".$sonucPrev2."<br>";    //burak

//----------- explode() düz metni belirtilen ayraca göre parçalayarak diziye çevirir.
//----------- implode() dizinin elemanlarını belirtilen ayracı kullanarak birleştirir.

$metin = "elma,armut,kiraz,muz,karpuz";
echo $metin."<br>";
$diziMetin = explode(",",$metin);
$diziMetin2 = explode(",",$metin,-1); //son elemanı almaz.
echo "<pre>";
print_r($diziMetin);
echo "</pre>";
echo "<pre>";
print_r($diziMetin2);
echo "</pre>";  

$diziMetin2 = array("elma","armut","kiraz","muz","karpuz");
echo "<pre>";
print_r($diziMetin2);
echo "</pre>";
$metin2 = implode(",",$diziMetin2);
echo $metin2."<br>";

//---------- list() dizinin elemanlarını değişkenlere atar.
$diziisim7 = array("burak","ahmet", "mehmet");
echo "<pre>";
print_r($diziisim7);
echo "</pre>";
list($bir,$iki,$uc) = $diziisim7;
echo "Dizinin 1. elemanı: ".$bir."<br>";    //burak
echo "Dizinin 2. elemanı: ".$iki."<br>";    //ahmet
echo "Dizinin 3. elemanı: ".$uc."<br>";    //mehmet
$diziisim8 = array("burak","ahmet",array("aslı","ayşe"), "mehmet");
echo "<pre>";
print_r($diziisim8);
echo "</pre>";
list($bir,$iki,$uc) = $diziisim8;
echo "Dizinin 1. elemanı: ".$bir."<br>";    //burak
echo "Dizinin 2. elemanı: ".$iki."<br>";    //ahmet
// echo "Dizinin 3. elemanı: ".$uc."<br>";    //array hata verir. bir list daha açmak gerekir.
list($bir,$iki,list($uc),$dot) = $diziisim8;
echo "Dizinin 1. elemanı: ".$bir."<br>";    //burak
echo "Dizinin 2. elemanı: ".$iki."<br>";    //ahmet
echo "Dizinin 3. elemanı: ".$uc."<br>";    //aslı
echo "Dizinin 4. elemanı: ".$dot."<br>";    //mehmet


//--------array_merge() birden fazla diziyi birleştirerek yeni bir dizi oluşturur.
//---------array_merge_recursive( ) birden fazla diziyi birleştirerek yeni bir dizi oluşturur. (geliştirilmiş)
$diziisim9 = array("burak","ahmet", "mehmet");
$diziisim10 = array("ali","veli", "zeynep");

$diziisim11 = array_merge($diziisim9,$diziisim10);
echo "<pre>";
print_r($diziisim11);
echo "</pre>";

$diziisim15 = array("bir"=>"burak","iki"=>"ahmet", "mehmet");
$diziisim16 = array("bir"=>"ali","iki"=>"veli", "zeynep");
$diziisim17 = array_merge_recursive($diziisim15,$diziisim16);

echo "<pre>";
print_r($diziisim17); // farkı aynı olanları dizi içinde dizi olarak gösterir.
echo "</pre>";  

//---------- array_combine() iki diziyi ilişkisel birleştirerek yeni bir dizi oluşturur.

$diziisim12 = array("araclar","eşya", "isimler");
$diziisim13 = array(array("bir"=>"araba","gemi"),array("telefon","bilgisayar"),array("burak","ahmet"));
$diziisim14 = array_combine($diziisim12,$diziisim13);
echo "<pre>";
print_r($diziisim14);
echo "</pre>";

//---------- array_slice() dizinin belirtilen bölümünü alarak yeni bir dizi oluşturur.
$diziisim18 = array("burak","ahmet", "mehmet","ali","veli","zeynep");
$diziisim19 = array_slice($diziisim18,2,3); // 2.indisten başla 3 eleman al.
echo "<pre>";
print_r($diziisim19);
echo "</pre>";
//---------- array_splice() dizinin belirtilen bölümünü alarak yeni bir dizi oluşturur.
$diziisim20 = array("burak","ahmet", "mehmet","ali","veli","zeynep");
$diziisim21 = array_splice($diziisim20,2,3); // 2.indisten başla 3 eleman al.
//3 yerini -1 yaparsak baştan 2 elaman sondan 1 eleman alır.
//3 yerine count($diziisim20) 2 elaman alır sonrasını es geçer ve ($diziisim20,2,count($diziisim20),"RECEP") ve sonra recep yazar
echo "<pre>";
print_r($diziisim21);
echo "</pre>";


//---------- array_chunk() dizinin belirtilen bölümünü alarak yeni bir dizi oluşturur.
$diziisim22 = array("burak","ahmet", "mehmet","ali","veli","zeynep");
$diziisim23 = array_chunk($diziisim22,2); // 2 elemanlı alt diziler oluşturur.
echo "<pre>";
print_r($diziisim23); // çıktısı 3 alt dizi olur. 
echo "</pre>";

//--------- array_column() dizinin belirtilen bölümünü alarak yeni bir dizi oluşturur.
$takimler = array(array("takim"=>"fenerbahçe","yil"=>"1907"),array("takim"=>"galatasaray","sehir"=>"1905"),array("takim"=>"beşiktaş","sehir"=>"1903"));
$takimlar = array_column($takimler,"takim");
echo "<pre>";
print_r($takimlar); // çıktısı 3 alt dizi olur.
echo "</pre>";


//---------- array_intersect() iki dizinin aynı elaman değerlerini alarak yeni bir dizi oluşturur.
//---------- array_intersect_key() iki dizinin aynı anahtar isme sahip eleman değerlerini alarak yeni bir dizi oluşturur.
//---------- array_intersect_assoc() iki dizinin aynı isme ve anahtar değerlerine sahip elemanlarını alarak yeni bir dizi oluşturur.
$diziisim24 = array("ali","veli", "mehmet");
$diziisim25 = array("ali","veli", "ahmet");
$diziisim26 = array_intersect($diziisim24,$diziisim25); 
echo "<pre>";
print_r($diziisim26); // ali ve veli ortak olduğu için sadece onları yazdı.
echo "</pre>";

$diziisim27 = array("bir"=>"ali","iki"=>"veli", "üç"=>"mehmet");
$diziisim28 = array("bir"=>"ali","iki"=>"veli", "dört"=>"ahmet");
$diziisim29 = array_intersect_key($diziisim27,$diziisim28); 
echo "<pre>";
print_r($diziisim29); // ali ve veli ortak olduğu için sadece onları yazdı.
echo "</pre>";  

$diziisim30 = array("bir"=>"ali","iki"=>"veli", "üç"=>"mehmet");
$diziisim31 = array("bir"=>"ali","iki"=>"veli", "dört"=>"ahmet");
$diziisim32 = array_intersect_assoc($diziisim30,$diziisim31); 
echo "<pre>";
print_r($diziisim32); // ali ve veli ortak olduğu için sadece onları yazdı.
echo "</pre>";  

//---------- array_diff() iki dizinin farkını alarak yeni bir dizi oluşturur.(isim)
//---------- array_diff_key() iki dizinin farkını alarak yeni bir dizi oluşturur.(anahtar)
//---------- array_diff_assoc() iki dizinin farkını alarak yeni bir dizi oluşturur. (isim ve anahtar)
$diziisim33 = array("ali","veli", "mehmet");
$diziisim34 = array("ali","veli", "ahmet");
$diziisim35 = array_diff($diziisim33,$diziisim34); 
echo "<pre>";
print_r($diziisim35); // mehmet yazdı.
echo "</pre>";

$diziisim36 = array("bir"=>"ali","iki"=>"veli", "üç"=>"mehmet");
$diziisim37 = array("bir"=>"ali","iki"=>"veli", "dört"=>"ahmet");
$diziisim38 = array_diff_key($diziisim36,$diziisim37); 
echo "<pre>";
print_r($diziisim38); // üç ve mehmet yazdı.
echo "</pre>";

$diziisim39 = array("bir"=>"ali","iki"=>"veli", "üç"=>"mehmet");
$diziisim40 = array("bir"=>"ali","iki"=>"veli", "dört"=>"ahmet");
$diziisim41 = array_diff_assoc($diziisim39,$diziisim40); 
echo "<pre>";
print_r($diziisim41); // üç ve mehmet yazdı.
echo "</pre>";

//---------- array_replace() iki dizinin farkını alarak yeni bir dizi oluşturur.(ilk dizi baz alınır)
//---------- array_replace_recursive() iki dizinin farkını alarak yeni bir dizi oluşturur. ( geliştirilmiş)

$diziisim42 = array("bir"=>"ali","iki"=>"veli", "üç"=>"mehmet");
$diziisim43 = array("bir"=>"ali","iki"=>"veli", "dört"=>"ahmet");
$diziisim44 = array_replace($diziisim42,$diziisim43);
echo "<pre>";
print_r($diziisim44); //ali veli ahmet ve mehmet yazdı.
echo "</pre>";


//---------- array_filter() dizideki boş elemanları filtr ederek yeni bir dizi oluşturur.
$diziisim45 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","","beş"=>"ahmet");
$diziisim46 = array_filter($diziisim45);
echo "<pre>";
print_r($diziisim46); //burak veli megmet ve ahmet yazdı.
echo "</pre>";

//---------- array_unique() dizinin tekrar eden elemanlarını silerek yeni bir dizi oluşturur.
$diziisim47 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"burak","beş"=>"ahmet");
$diziisim48 = array_unique($diziisim47);
echo "<pre>";
print_r($diziisim48); //burak veli mehmet ve ahmet yazdı.
echo "</pre>";

//---------- range() belirtilen aralıkta dizi oluşturur.
$diziisim49 = range(1,10); //sonuna 2 yazarsak 2 şer 2 şer artar.
echo "<pre>";
print_r($diziisim49); //1 den 10 a kadar dizi oluşturdu.
echo "</pre>";


//----------- array_fill() belirtilecek değerler doğrultusunda dizi oluşturur.  
//----------- array_fill_keys() elemanları anahtar olarak kullanarak dizi oluşturur.
$diziisim50 = array_fill(0,5,"burak");
echo "<pre>";
print_r($diziisim50); //0 dan 5 e kadar burak yazdı.
echo "</pre>";

$diziisim51 = array_fill_keys(array("bir","iki","üç"),"burak");
echo "<pre>";
print_r($diziisim51); //bir iki üç anahtarlarına burak yazdı.
echo "</pre>";

//**----------- c   ompact() elemanları anahtar gibi görerek daha önce tanımlanmış değişkenleere anahtar üretir.
$diziisim52 = array("isim","soyisiim","meslek");
$isim = "burak";
$soyisiim = "bicakci";
$meslek = "öğrenci";
$diziisim53 = compact($diziisim52);
echo "<pre>";
print_r($diziisim53); //isim soyisim meslek anahtarlarına burak bicakci öğrenci yazdı.
echo "</pre>";

//---------- array_keys() dizinin anahtarlarını alarak yeni bir dizi oluşturur.
//---------- array_values() dizinin değerlerini alarak yeni bir dizi oluşturur.
$diziisim54 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"burak","beş"=>"ahmet");
$diziisim55 = array_keys($diziisim54);
echo "<pre>";
print_r($diziisim55); //bir iki üç dört beş anahtarlarına yazdı.
echo "</pre>";

$diziisim56 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"burak","beş"=>"ahmet");
$diziisim57 = array_values($diziisim56);
echo "<pre>";
print_r($diziisim57); //burak veli mehmet burak ahmet değerlerine yazdı.
echo "</pre>";

//---------- array_pad() dizinin belirtilen bölümünü alarak baştan veya sona doldurma işlemi yapar.
$diziisim58 = array("Burak","Ahmet","Hüseyin");
$diziisim59 = array_pad($diziisim58,5,"Bicakci");
echo "<pre>";
print_r($diziisim59); //Burak Ahmet Hüseyin Bicakci Bicakci yazdı.
echo "</pre>";


//---------- array_search() dizide elemanlara bakarak arama yapar.
//---------- array_key_exists() dizide anahtara bakarak arama yapar.
//----------- in_array() dizide değere bakarak arama yapar.
$diziisim60 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"burak","beş"=>"ahmet");
$diziisim61 = array_search("burak",$diziisim60);
echo "<pre>";
print_r($diziisim61); //bir anahtarına yazdı.
echo "</pre>";

$diziisim62 = array_key_exists("iki",$diziisim60);
echo "<pre>";
print_r($diziisim62); //iki anahtarına yazdı.
echo "</pre>";

$diziisim63 = in_array("burak",$diziisim60);
echo "<pre>";
print_r($diziisim63); //1 değerine yazdı.
echo "</pre>";

//----------- min() rakamsal dizilerde en küçük değeri alır.
//----------- max() rakamsal dizilerde en büyük değeri alır.
$diziisim64 = array(1,2,3,4,5,6,7,8,9,10);
$diziisim65 = min($diziisim64);
echo "<pre>";
print_r($diziisim65); //1 değerine yazdı.
echo "</pre>";

$dizisim66 = max($diziisim64);

echo "<pre>";
print_r($dizisim66); //1 değerine yazdı.
echo "</pre>";

//----------- array_count_values() dizideki elemanların kaç kez tekrar ettiğini bulur.
$diziisim67 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"burak","beş"=>"ahmet");
$diziisim68 = array_count_values($diziisim67);
echo "<pre>";
print_r($diziisim68); //burak 2 veli 1 mehmet 1 ahmet 1 değerine yazdı.
echo "</pre>";

//----------- array_flip() dizinin anahtar ve değerlerini yer değiştirir.
$diziisim69 = array("Deger1","Deger2","Deger3");
$diziisim70 = array_flip($diziisim69);
echo "<pre>";
print_r($diziisim70); 
echo "</pre>";

//----------- array_change_key_case() büyük küçük harf değişimi yapar. (CASE_LOWER, CASE_UPPER)
$diziisim71 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"ahmet");
$diziisim72 = array_change_key_case($diziisim71,CASE_UPPER);
echo "<pre>";
print_r($diziisim72);
echo "</pre>";

$diziisim73 = array_change_key_case($diziisim71,CASE_LOWER);
echo "<pre>";
print_r($diziisim73);
echo "</pre>";

//----------- array_sum() dizinin elemanlarının toplamını alır.
//----------- array_product() dizinin elemanlarının çarpımını alır.
$diziisim74 = array(1,2,3,4,5,6,7,8,9,10);
$diziisim75 = array_sum($diziisim74);
echo "<pre>";
print_r($diziisim75); //55 değerine yazdı.
echo "</pre>";

$diziisim76 = array_product($diziisim74);
echo "<pre>";
print_r($diziisim76); //3628800 değerine yazdı.
echo "</pre>";

//----------- array_rand() belirtecek eleman sayısı kadar rastgele değer döndürür.
$diziisim77 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"ahmet");
$diziisim78 = array_rand($diziisim77,2);
echo "<pre>";
print_r($diziisim78);
echo "</pre>";


//----------- array_reverse() elemanları ters çevirir.
$diziisim79 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"ahmet");
$diziisim80 = array_reverse($diziisim79);
echo "<pre>";
print_r($diziisim80);
echo "</pre>";

//------------ shuffle() dizinin elemanlarını karıştırır.
$diziisim81 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"ahmet");
$diziisim82 = array("bir"=>"burak","iki"=>"veli", array("üç"=>"mehmet","dört"=>"ahmet"));
shuffle($diziisim81);
echo "<pre>";
print_r($diziisim81);
echo "</pre>";
shuffle($diziisim82); // bu şekilde iç içe dizileri içlerine karıştırmaz kendilerini karıştırır.
echo "<pre>";
print_r($diziisim82);
echo "</pre>";

//------------- ksort() anahtarlarını büyük küçük harfe duyarlı olacak şekilde a-z ye ya da küçkten büyüğe sıralar. b d i ü şeklinde.
//------------- krsort() anahtarlarını büyük küçük harfe duyarlı olacak şekilde z-a ya da büyükten küçüğe sıralar.
$diziisim83 = array("bir"=>"burak","iki"=>"veli", "üç"=>"mehmet","dört"=>"ahmet");

ksort($diziisim83);
echo "<pre>";
print_r($diziisim83);
echo "</pre>";

krsort($diziisim83);
echo "<pre>";
print_r($diziisim83);
echo "</pre>";



//------------- array_sort() dizinin elemanlarını büyük küçük harfe duyarlı olacak şekilde a-z ye ya da küçkten büyüğe sıralar. 
//------------- array_rsort() dizinin elemanlarını büyük küçük harfe duyarlı olacak şekilde z-a ya da büyükten küçüğe sıralar.
//------------- array_asort() dizinin elemanlarını büyük küçük harfe duyarlı olacak ve anahtarları bozmayacak şekilde a-z ye ya da küçkten büyüğe sıralar. 
//------------- array_arsort() dizinin elemanlarını büyük küçük harfe duyarlı olacak ve anahtarları bozmayacak şekilde z-a ya da büyükten küçüğe sıralar.

$diziisim84 = array("bir"=>11,"iki"=>12, "üç"=>7,"dört"=>9);

sort($diziisim84);
echo "<pre>";
print_r($diziisim84);
echo "</pre>";

rsort($diziisim84);
echo "<pre>";
print_r($diziisim84);
echo "</pre>";

asort($diziisim84);
echo "<pre>";
print_r($diziisim84);
echo "<pre>";

arsort($diziisim84);
echo "<pre>";
print_r($diziisim84);
echo "<pre>";




//------------- array_natsort() dizilere büyük küçük harfe duyarlı olacak ve doğal sıralama olacak şekilde a-z ye ya da küçkten büyüğe sıralar.
//------------- array_natcasesort() dizilerde doğal sıralama olacak şekilde a-z ye ya da küçkten büyüğe sıralar.
$resimler = array("resim1","resim2","resim10","resim20","resim3");
echo "<pre>";
print_r($resimler);
echo "</pre>";

natsort($resimler);
echo "<pre>";
print_r($resimler);
echo "</pre>";

natcasesort($resimler);
echo "<pre>";
print_r($resimler);
echo "</pre>";

//standart sıralama yapsaydı 1 10 2 20 3 şeklinde sıralardı. ama doğalda 1 2 3 10 20 şeklinde sıraladı.


//------------- array_multisort() bir veya birden fazal dizinin gelişmiş sıralama işlemi yapar. 
//** SORT_ASC = a-z/ küçükten büyüğe
//** SORT_DESC = z-a/ büyükten küçüğe
//** SORT_REGULAR = standart sıralama(varsayılan)
//** SORT_NUMERIC = rakamsal sıralama
//** SORT_STRING = string sıralama
//** SORT_LOCALE_STRING = doğal sıralama string

$diziisim85 = array("Burak",15,"Ahmet",3,"Hüseyin",47,18);

echo "Sort Asc";
array_multisort($diziisim85,SORT_ASC);
echo "<pre>";
print_r($diziisim85);
echo "</pre>";

echo "Sort Desc";
array_multisort($diziisim85,SORT_DESC);
echo "<pre>";
print_r($diziisim85);
echo "</pre>";

echo "Sort Regular";
array_multisort($diziisim85,SORT_REGULAR);
echo "<pre>";
print_r($diziisim85);
echo "</pre>";

echo "Sort Numeric";
array_multisort($diziisim85,SORT_NUMERIC);
echo "<pre>";
print_r($diziisim85);
echo "</pre>";

echo "Sort String";
array_multisort($diziisim85,SORT_STRING);
echo "<pre>";
print_r($diziisim85);
echo "</pre>";

echo "Sort Locale Strin";
array_multisort($diziisim85,SORT_LOCALE_STRING);
echo "<pre>";
print_r($diziisim85);
echo "</pre>";

?>
    
</body>
</html>