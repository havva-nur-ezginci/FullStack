
//butona basıldığında veya verilen zaman aralığı dolana kadar eleman üretilsin.

let liste = document.querySelector("#liste");//id verdik
let btnStop = document.querySelector("#btnStop");

btnStop.onclick= function () {
    clearInterval(addElement);
};

function listeyeLiEkle() {
    let liNumber = document.querySelectorAll("li").length;//li sayısı

    let li = document.createElement("li");
    li.innerText = liNumber + 1 + ". Eleman";

    liste.appendChild(li);
}
//her saniye yeni bil li elementi oluşur.
//setInterval(listeyeLiEkle,1000); //1000 : 1sn

// let addElement = setInterval(listeyeLiEkle, 1000);

// setTimeout(intervalStop, 100000);

// setTimeout(function () {
//     alert("Eleman ekleme işlemi bitti");
// }, 10500);

function intervalStop(){
    clearInterval(addElement);
}