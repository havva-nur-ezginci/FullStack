<?php
//proje2.test

declare(strict_types=1);// tür kullanımını zorunlu hale getirdik. 0 vererek etkisiz hale getirebiliriz.

function topla(int $sayi1,int $sayi2):int// :int bu fonksiyonun geri dönüş tipini belirtmek istersek kullanabiliriz.
{
    return $sayi1+$sayi2;
}

$sayilar = "1-2-3-4-5-6-7-8-9";


$sayilar = explode("-",$sayilar);//explode(ayraç,string,kaç karakter)
print_r($sayilar);//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )


$sayilar = implode("-",$sayilar);// implode ile eski haline dönüştürebiliriz.
print_r($sayilar);//"1-2-3-4-5-6-7-8-9"

$sayilar = "1-2-2-4-5-6-2-2-2";
$sayilar = explode("-",$sayilar);
$count = array_count_values($sayilar);// array döner.
print_r($count);
/**1: "1",
2: "5",
4: "1",
5: "1",
6: "1"
 */

$unique_array = array_unique($sayilar);
print_r($unique_array);
/**0: "1",
1: "2",
3: "4",
4: "5",
5: "6"
 */
// aray_flip() ile index ve değeri array de yer değiştirebiliriz.
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);
/**{
oranges: "0",
apples: "1",
pears: "2"
} */

//array_key_exists ilgili key i arar
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}

// array_filter : array in item larını teker teker istenen fonksiyona gönderir.
function odd($var){
    // returns whether the input integer is odd
    return $var & 1;
}
$array1 = [6, 7, 8, 9, 10, 11, 12];

print_r(array_filter($array1,"odd"));
/**{
1: "7",
3: "9",
5: "11"
} */
print_r(array_filter($array1,function($item){
    return !($item & 1);
}));
/**{
0: "6",
2: "8",
4: "10",
6: "12"
} */

$array2 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

$arraymerge = array_merge($array1,$array2);
print_r($arraymerge);

$array1 = [6, 10, 7, 8, 9, 11, 12];

sort($array1);
print_r($array1);
/**{
0: "6",
1: "7",
2: "8",
3: "9",
4: "10",
5: "11",
6: "12"
} */

$array1 = array_reverse($array1);
print_r($array1);
/**{
0: "12",
1: "11",
2: "10",
3: "9",
4: "8",
5: "7",
6: "6"
} */

$bul = array_search(7,$array1);// kaçıncı indexte olduğunu döndürür. var_dump ile sonuca bak.
$bul = in_array(77,$array1);// var mı

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);// ilk elemanı çıkarır
print_r($stack);

$pop = array_pop($stack);//sondan çıkaraır.
print_r($stack);


// array_slice istenen kadar eleman siler : (array,kaçtane)
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      

print_r($output);//"c", "d","e"





function topla2(int $sayi1=2,int $sayi2=19):int// :int bu fonksiyonun geri dönüş tipini belirtmek istersek kullanabiliriz.
{
    return $sayi1+$sayi2;
}

echo topla2(sayi2:89);//91

print("\n");

// Recursive Fonksiyon 


function fibonacci(int $number):int{
    if($number == 0) return 0;
    else if($number == 1) return 1;
    else return (fibonacci($number-1)+fibonacci($number-2));
}
$fib = 8;

for($i=1; $i<=$fib; $i++){
    echo fibonacci($i)." ";
}
//"1 1 2 3 5 8 13 21"

print("\n");

// JSON Encode - Decode

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$age = json_encode($age);// array => json (string)
print_r($age);//"{"Peter":35,"Ben":37,"Joe":43}"

print("\n");

$age = json_decode($age);// json => array



// Dosya oluşturma

//mkdir("./dosyalar");


/**r : Sadece okuma işlemini yapar. İmleci yazının başına taşır.
r+ : Okuma,yazma işlemini yapar. İmleci yazının başına taşır.
w : Sadece yazma işlemini yapar. Dosya yoksa dosya oluşturur ve dosyada içerik varsa içeriği siler. İmleci yazının başına taşır.
w+ : Okuma,yazma işlemini yapar. Dosya yoksa dosya oluşturur ve dosyada içerik varsa içeriği siler. İmleci yazının başına taşır.
a : Sadece yazma işlemini yapar. Dosya yoksa dosya oluşturur. İmleci yazının sonuna taşır.
a+ : Okuma,yazma işlemini yapar. Dosya yoksa dosya oluşturur. İmleci yazının sonuna taşır.
 */

$dosya = fopen ("./dosyalar/new.txt" , 'w'); //dosya oluşturma işlemi
$yaz="Dosya oluşturuldu..."; //dosya içine ne yazmak istiyorsanız buraya yazın. $değer
fwrite ( $dosya , $yaz ) ;
fclose ($dosya);

// Superglobals
/**The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION */


// try - catch

/** Throwable ,Exception, Error
 * error => hatayı gösterir.
 * exception => istisnadır tetikletmemiz gerekir.
*/


try{
    $number = 23/0;
   
}catch(Throwable $e){ // Hataların tümü Throwable den türer.
    print_r($e);
    /**{
message:protected: "Division by zero",
string:Error:private: "",
code:protected: "0",
file:protected: "/var/www/html/proje2/index.php",
line:protected: "208",
trace:Error:private: { },
previous:Error:private: ""
}, */
    echo "HATA : ".$e->getMessage();//"HATA : Division by zero"
}

print("\n");

try{
    $number = 20/10;
    if($number == 2){
        throw new Exception("number 2 olamaz.");
    }
}catch(Throwable|Exception $e){
   // print_r($e);

    echo "HATA : ".$e->getMessage();//"HATA : number 2 olamaz."
}




?>

