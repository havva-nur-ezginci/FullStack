console.log("123"); // String

console.log(1230); // integer

console.log(12.5); //Float

console.log(true); // boolean

console.log([1,2,3,4,5]); // dizi (array) 0. index ten başlar, length:5

console.warn(["Uyarı mesajı array or any","2.Uyarı mesajı",1111]);

console.error('Hata Mesajı','herşey olabilir');

// console.clear();

/**
 * ------ Variables -----
Javascriptte camelCase kullanılır.
 *
 * camelCase => firstName lastName
 * PascalCase => FirstName LastName
 * kebab-case => first-name last-name
 * snake_case => first_name last_name
 * 
 * harfle baslalamaya dikkat et.
 */
var _name = "Nur";
var age = 23;
var derece = 3.66; // float Number

console.log(_name,age); // print

console.log(typeof _name); //string
console.log(typeof age); //number
console.log(typeof derece); //number

// ------ Scope ------
var lastName = "Atakan";
var lastName = "Yağmur";
lastName = 111;
console.log(lastName);//111

// let -  değişebilir ama tekrar tanımlanamaz.
let last_name = 'Veli';
//let last_name = 'Kullanılamaz!!'; 
last_name = 2222;
console.log(last_name);

// const - sabit değer değişmez, tekrar tanımlanamaz.
const PI = "3.14";
console.log(PI);

//---- Variables Data Types ----
/**
 * Variables Data Types 
 * String, BigInt, Number, Boolean, Undefined
 */
var test;
console.log(test); // undefined
console.log(typeof test); // undefined

/**
 * Referans Veri Türü - Object
 * 
 * Array, Null, Date, Object
 */

var cicek = ["Papatya",11,"Gül"]; // array 
console.log(cicek); // ['Papatya', 11, 'Gül']
console.log(typeof cicek); // object

var _number = null;
console.log(_number); // null
console.log(typeof _number); // object

var nowDate = new Date();
console.log(nowDate); // Fri Mar 03 2023 17:25:35 GMT+0300 (GMT+03:00)
console.log(typeof nowDate); // object
console.log(nowDate.getDay()); // ayın kaçıncı günü

// Nesne Tanımlama

var person = {
    //fields
    firstName: "Havvanur",
    lastName: "Ezginci",
    age: 23,
    email: "@gmail.com",
    address: {
        city: "Konya",
        district: "Selçuklu",
        cities: ['İstanbul', 'Konya']
    }  
};
console.log(person.firstName);// Havvanur
console.log(person.address.city);// Konya

// Fonksiyon Tanımlama

function namePrint(){// Void
    console.log(person.firstName + " " + person.lastName);
}

namePrint();

    
var funcVariable = function(_name){
    return _name+"JavaScript";
}
console.log(funcVariable("havvanur_")); // havvanur_JavaScript
    
console.log(typeof namePrint); // function

console.log(funcVariable);// ƒ (_name){ return return _name+"JavaScript"; }


var result = 0;
function sum(x,y){
    result = x + y;
}
sum(10,20);
console.log(result);//30


// Parse - Convert
/** 
alert("JavaScript....."); // küçük pencere açılır
let sayi1 = prompt("1. sayıyı giriniz: ");//string
let sayi2 = prompt("2. sayıyı giriniz: ");
sum(Number(sayi1),Number(sayi2));
console.log(result);//2

*/
/** 
String To Number => Number
Number To String => String(sayi) veya sayi.toString()

Math.floor(sayi); // Aşağı yuvarlama
Math.ceil(sayi); // Yukarı yuvarlama
Math.round(sayi); // Yakın olduğu yönde yuvarlama ; 2.5 => 3

*/

let sayi = 23.1;
let sayi2 = 13.6;

let result1 = parseFloat(sayi) + parseFloat(sayi2);
let result2 = parseInt(sayi) + parseInt(sayi2);

// console.log(parseInt(result));
console.log(result1); // 36.7
console.log(result2); // 36
