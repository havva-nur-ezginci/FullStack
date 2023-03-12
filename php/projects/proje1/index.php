<?php
// bu projenin hangi php versiyonuyla çalışacağını nginx=> default.conf dosyasında belirtiyoruz.

echo 'Merhaba Dünya<br>'.PHP_EOL; 
// html tarafta br ile html siz tarafta PHP_EOL ile alt satıra geçilir. birleştirme operatörüdür.
echo "Merhaba Dünya" ;
echo "<br>";

echo 5; //integer
echo "<br>";
echo 6.8; //double
echo "<br>";

var_dump("5");//string(1) "5"
echo "<br>";
print_r("PHP");//PHP
echo "<br>";
print("php");//php

// Değişkenler
$sayi = 4;
$sayi2 = 10.7;

echo "<br>";
echo $sayi + $sayi2;//14.7

echo "<br>";
echo"sayi1: ".$sayi;//sayi1: 4

echo "<br>";
echo "sayi2: $sayi2";//sayi2: 10.7
echo "<br>";
echo 'sayi2: $sayi2';//sayi2: $sayi2


// String Fonksiyonları
$text =  "Lorem ipsum dolor.ş";

echo "<br>";
echo strlen($text);//18
echo "<br>";
var_dump($text);//string(18) "Lorem ipsum dolor.ş"
echo "<br>";
echo str_replace("Lorem","Replace ile değişti",$text);//Replace ile değişti ipsum dolor.ş
echo "<br>";
echo strtoupper($text);//LOREM IPSUM DOLOR.ş
echo "<br>";
echo mb_strtoupper($text);//LOREM IPSUM DOLOR.Ş => utf8 türkçe karakterde de çalışır
echo "<br>";
echo strtolower($text);//lorem ipsum dolor.ş
echo "<br>";
echo mb_strtolower($text);//lorem ipsum dolor.ş

echo "<br>";echo "<br>";

// Veri türleri
$int = 4;
$double = 4.2;
$text = "veri türleri";
$array = [1,2,3];
$boolean = false;

echo gettype($int);//integer
echo "<br>";
echo gettype($double);//double
echo "<br>";
echo gettype($text);//string
echo "<br>";
echo gettype($array);//array
echo "<br>";
echo gettype($boolean);//boolean
echo "<br>";


echo is_int($int);//1
echo "<br>";
echo is_int($text);// eğer int değilse hiçbir şey basmaz
echo "<br>";
var_dump(is_int($text));//bool(false)
echo "<br>";
var_dump(is_int($int));//bool(true)
echo "<br>";
print_r(is_int($int));//1
echo "<br>";
print_r(is_int($text));//hiçbir şey basmaz
echo "<br>";

var_dump(is_double($double));//bool(true)
echo "<br>";
var_dump(is_string($text));//bool(true)
echo "<br>";

//değeri değiştirilemeyen sabit tanımlama
define("PI",3.14);//key,value
echo PI;//3.14

echo "<br>";

// fonksiyon 

$global_number = 12;
function carp($sayi1,$sayi2){
    
    global $global_number;
    echo $global_number;//12

    echo "<br>";
    print_r($GLOBALS);//global olarak tutulan değerleri bulundurur.
    /**
     * Array ( [_GET] => Array ( ) 
     * [_POST] => Array ( ) 
     * [_COOKIE] => Array ( ) 
     * [_FILES] => Array ( ) 
     * [GLOBALS] => Array *RECURSION* [sayi] => 4 [sayi2] => 10.7 [text] => veri türleri [int] => 4 [double] => 4.2 [array] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [boolean] => [global_number] => 12 )
     */
    echo "<br>";
    return $sayi1*$sayi2;
}


echo carp(1,2);//2

echo "<br>";echo "<br>";
//parametre olarak ayrı vermek dışında GLOBALS in içinden de ulaşabiliriz.
echo $GLOBALS['sayi'];//4

echo "<br>";
// global olarak tanımlamak istemezsek fonksiyonun {} açmadan önce use ($sayi) şeklinde belirtebiliriz.
$anonimFunc = function($x ="default") use ($sayi){
    echo $x." anonim - ";
    echo "use ".$sayi;
    echo "<br>";
};
//değişkene eşitlediğimiz için ; koyulmalı normal fonksiyonda koymaya gerek yok.

$anonimFunc();//default anonim - use 4

$anonimFunc("parametre");//parametre anonim - use 4


//null kontrol - single line if
$number = null;

echo "Değer: ". ($number ?? $sayi); //Değer: 4
#sayi null değilse sayiyı yazar. null ise number ı yazar.

echo "<br>";
#number null ise sayiyı al değilse sayi2
echo  is_null($number) ? $sayi: $sayi2; //4

echo "<br>";


// switch case -  match

echo date("Y.m.d");//Y-m-d => 2034-03-12  , Y.m.d => 2035.03.12
echo "<br>";

$day = 19;

    switch($day){
        case 5: 
        echo "cuma"; 
        break;
        default:
        echo"belirsiz gun...."; 
    }    
echo "<br>";

//match switch den daha hızlı çalışır. içeride array gibi tutar
echo match ($day){
    5     => "Cuma",
    2     => "Salı",
    default => "Belirsiz gün",
};
echo "<br>";

// Array

$gunler = ["pazartesi","salı","çarşamba","perşembe","cuma"];
$aylar = ["ocak","şubat","mart"];



//array i ya string e çevirip basabiliriz echo ile yada print_r ile
print_r($gunler);//Array ( [0] => pazartesi [1] => salı [2] => çarşamba [3] => perşembe [4] => cuma )

echo "<br>";

// print_r da aynı anda iki array basamayız ama arrayleri yeni bir array olarak tanımlayıp öyle basabiliriz.
print_r([$gunler,$aylar]);

echo "<br>";

print_r([$gunler,$aylar][0][0]);//pazartesi

echo "<br>";



// yeni eleman ekleme
$gunler[]= "cumartesi";//sona eklenir.
print_r($gunler);

echo "<br>";

$gunler[0]= "gun";//0. indextekinin yerine yazılır.
print_r($gunler);

echo "<br>";
var_dump($gunler); //array(6) { [0]=> string(3) "gun" [1]=> string(5) "salı" [2]=> string(10) "çarşamba" [3]=> string(9) "perşembe" [4]=> string(4) "cuma" [5]=> string(9) "cumartesi" }

echo "<br>";

echo count($gunler);//6

echo "<br>";

//ilişkisel array : key,value


/**tüm anahtarlar 1'e çarpıtıldığından her yeni eleman değeri bir öncekinin üzerie yazılır ve dizide sadece son atanan değer kalır.
PHP indisli ve ilişkisel diziler arasında bir ayrım yapmadığından int ve string türündeki anahtarlar aynı anda bulunabilir. */
$array = array(
    1    => "a",
    "1"  => "b",//a b ile geçersiz hale gelir.
    1.5  => "c",
    true => "d",//c d ile geçersiz hale gelir.
);
var_dump($array);//array(1) { [1]=> string(1) "d" }

echo "<br>";

$dizi = array(
    "foo" => "bar",
    42    => 24,
    "çok" => array(
         "boyutlu" => array(
             "dizi" => "foo"
         )
    )
);
$dizi2 = array(
    "foo" => "2",
    42    => 21,
    "çok" => array(
         "boyutlu" => array(
             "dizi" => "foo"
         )
    )
);

$dizi3 = [$dizi,$dizi2];
print_r($dizi3);

echo "<br>";

var_dump($dizi[42]);//int(24)
echo "<br>";
var_dump($dizi["çok"]["boyutlu"]["dizi"]);//string(3) "foo"

echo "<br>";echo "<br>";echo "<br>";


$sayilar = array(1,9,2,5,4,5);

sort($sayilar);//başarılı anlamında 1 döner

print_r($sayilar);//Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 5 [4] => 5 [5] => 9 )

echo "<br>";

//array den alan silme
unset($sayilar["5"]);//5. index silinir
print_r($sayilar);//Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 5 [4] => 5 )

echo "<br>";

//array den alan silme
unset($sayilar[0]);//0. index silinir
print_r($sayilar);//Array ( [1] => 2 [2] => 4 [3] => 5 [4] => 5 )


echo "<br>";echo "<br>";

print_r(array_values($dizi));//values gelir
echo "<br>";echo "<br>";
print_r(array_keys($dizi));//keys gelir


echo "<br>";echo "<br>";



// for - foreach

for($i = 0; $i < count($dizi3); $i++){
    echo "foo :".$dizi3[$i]["foo"]. "<br>";

}
echo "<br>";echo "<br>";

foreach($dizi3 as $key => $value){//key=0 => dizi , key=1 => dizi2
    
    if(is_array($value)){
        foreach($value as $key_ => $value_){
            echo "$key_ <br>";
        }
    }
}









?>
