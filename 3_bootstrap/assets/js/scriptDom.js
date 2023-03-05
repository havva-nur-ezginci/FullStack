//----------- Eleman seç -------

// let btnAddTaskList = document.getElementById("btnAddTaskList");

// console.log(btnAddTaskList);//ilgili elemntinin tamamını alırız
// console.log(btnAddTaskList.classList);//donen turu DOMTokenList
// console.log(btnAddTaskList.className);
// console.log(btnAddTaskList.innerText);//Add Task List=> ekranda gözüken text 
// console.log(btnAddTaskList.innerHTML);//Add Task List <i class="fa fa-plus ms-2"></i>
// console.log(btnAddTaskList.textContent);//Add Task List=> koddaki içerik


// btnAddTaskList.innerText = "Buton text değişti";
// btnAddTaskList.innerHTML = "<b>Buton text değişti</b>";//kalın-bold

// btnAddTaskList.hidden = true; //gorunmez hale gelir htmlde yeni attribute eklenmiş olur.


// //css e js ile ekleme ; browser da ekler
// //inline css eklenir htmle
// btnAddTaskList.style.fontWeight ="bold";
// btnAddTaskList.style.color = "blue";

// //yeni class ekleme
// btnAddTaskList.className += " test";
// btnAddTaskList.classList.add("test2");

// //class silme
// btnAddTaskList.classList.remove("test");

// let classNames = btnAddTaskList.className;
// classNames = classNames.replace("test2","");
// btnAddTaskList.className = classNames;

// //aynı classa sahip birden çok elemente ulaşma
// var multipleElements = document.getElementsByClassName("btn");
// console.log(multipleElements);//type HTMLCollection (5)

// multipleElements = document.getElementsByTagName("h2");
// console.log(multipleElements);//type HTMLCollection (3) 
// console.log(multipleElements[1]);//1. elementi getirir.
// console.log(multipleElements[1].innerHTML);//Task List

// //document.querySelectorAll : Element,.class,#id istenilen kullanılır.

// multipleElements = document.querySelectorAll("h2");
// console.log(multipleElements);//type NodeList(3)


// multipleElements = document.querySelectorAll("a.btn-danger");
// console.log(multipleElements);//type NodeList


// id için # kullanılır.

// //-------- Element oluşturma -------
// var spanElement = document.createElement("span");
// console.log(spanElement);//<span></span>
// spanElement.classList.add("btn", "btn-danger", "w-50");
// spanElement.innerText = "Kaydet";
// console.log(spanElement);//<span class="btn btn-danger w-50">Kaydet</span>
// console.log(spanElement.innerText);//Kaydet

// spanElement.setAttribute("data-id", "20");
// //spanElement.setAttribute("class", "btn btn-danger w-50");
// console.log(spanElement);//<span class="btn btn-danger w-50" data-id="20">Kaydet</span>

// //istenilen elemente html de id vererek sonrasında yeni element verme.
// var createTaskRow = document.querySelector("#createTaskRow");
// createTaskRow.appendChild(spanElement);//kaydet butonu eklenmiş olur.



// //----- Element silme ---------
// console.log(createTaskRow.children);
// createTaskRow.children[0].remove();//ilk element input silinmiş olur.
// console.log(createTaskRow.children);

// createTaskRow.removeChild(spanElement);
// console.log(createTaskRow.children);

// var newTaskName = document.querySelector("#newTaskName");
// createTaskRow.children[0].removeChild(spanElement);



//----------- Event Listener -------

// // ----Mouse

// var btnAddTaskList = document.querySelector("#btnAddTaskList");
// var btnCompleted = document.querySelector("#btnCompleted");
// var createTaskCard = document.querySelector("#createTaskCard");


// btnAddTaskList.addEventListener("click", function (event){
//     //event.preventDefault();   //varsayılan özellikleri yok say   
//     console.log(event);
//     console.log(event.target);// Tıklanan elementin bilgisi gelir
//     var clickElementID = event.target.getAttribute("id");
//     console.log(clickElementID);//btnAddTaskList   
//      });

// /**
//  * event.preventDefault(); kullanmak yerine 
//  * ilgili elemente <a href="javascript:void(0)" 
//  * href değiştirilebilir.
//  */


// //üzerine geldiğimizde
// btnAddTaskList.addEventListener("mouseover", function (event) {
//     console.log("over");
// });
// btnAddTaskList.addEventListener("mouseenter", function (event) {
//     console.log("enter");
// });


// //mouse üzerinden ayrıldığında
// btnAddTaskList.addEventListener("mouseout", function (event) {
//     console.log("out");
// });
// btnAddTaskList.addEventListener("mouseleave", function (event) {
//     console.log("leave");
// });


// btnAddTaskList.addEventListener("mouseup", function (event) {
//     console.log("up");//mouse ile tıklamayı bitirdiğimiz an
// });


// btnAddTaskList.addEventListener("mousedown", function (event) {
//     console.log("down");//bastığımız an
// });

// // iki kere tıklandığında
// btnAddTaskList.addEventListener("dblclick", function (event) {
//     console.log("dblClick");
// });

// createTaskCard.addEventListener("mousemove", function (event) {
//     console.log("x : " + event.offsetX);
//     console.log("Y : " + event.offsetY);
// });




// ------ Klavye

// let body = document.querySelector("body");

// body.addEventListener("keypress", function (event) {
//     console.log(event.key);//basılan tuş
//     console.log(event.ctrlKey);//ctrl ye basılırken baska bir tusa basılırsa true
// });

// body.addEventListener("keydown", function (event) {
//     console.log(event.key);
// });

// body.addEventListener("keyup", function (event) {
//     console.log("keyup");//basmayı bitirilen tuş
// });


// newTaskName.addEventListener("focus", function (event) {
//     console.log("focus");//inputa dokunulduğunda
// });

// newTaskName.addEventListener("change", function (event) {
//     console.log("change");
// });

// newTaskName.addEventListener("cut", function (event) {
//     console.log("cut");
// });
// newTaskName.addEventListener("copy", function (event) {
//     console.log("copy");
// });
// newTaskName.addEventListener("paste", function (event) {
//     console.log("paste");
// });

// var sehirler = document.querySelector("#sehirler");

// let self = this;
// var value = 5;
// sehirler.addEventListener("change", function (event) {
//     console.log("select change");
//     console.log(this.value);//3
//     console.log(self.value);//5
// });

// newTaskName.addEventListener("paste")


addEventListener("DOMContentLoaded" ,function(event){
// Tüm içerik yüklendiğinde çalışır

});





