  /** readyState
         * 0 => İstek henüz başlatılmadı
         * 1 => İstek açıldı
         * 2 => İstek gönderildiğinde
         * 3 => Yüklendiğinde
         * 4 => İstek tamamlandığında
         */
let btnGetData = document.querySelector("#btnGetData");
let btnGetContent = document.querySelector("#btnGetContent");
let divContent = document.querySelector("#content");
let response;

btnGetData.addEventListener("click", function (event) {

    let xhttp;

    if (window.XMLHttpRequest){// Tarayıcımız XML HTTP Request i destekliyorsa
        xhttp = new XMLHttpRequest();
    }
    else{ // Tarayıcı desteklemiyorsa
        xhttp =  new ActiveXObject();//bütün beowserlar destekler
    }
   
    xhttp.open("GET", "https://jsonplaceholder.typicode.com/posts", true);//true : asenkron
    /**
     * true  => senkronize olarak arka planda yap.
     * false => Tüm işlemlerin bitmesini bekle ve sonrasında veriyi ver.
     */
    xhttp.send();//isteği gonder


    //   İsteğin durumunu izleme iki fonksiyonda kullanılabilir.
    //   xhttp.onreadystatechange = function () {
    //  };
    // xhttp.addEventListener("readystatechange", function ()

    xhttp.addEventListener("readystatechange", function () {
      

      //  console.log(this.readyState);// 0 1 2 3 4 
      //  console.log(this.status);//http code 200

        if (this.readyState === 4 && this.status === 200)
        {
            //console.log(this.response);//gelen data 
            response = this.response;
            console.log(typeof response);//string
            response = JSON.parse(response);
            //console.log(response);
            console.log(typeof response);//object
            //response = response.replace(/\\n\\*/g, ' ');
         
            // // console.log(this.response.indexOf("\\n"));

        }

    });



    
});

// btnGetContent.addEventListener("click", function (event) {
//     if (gelenCevep !== undefined && gelenCevep !== null && Array.isArray(gelenCevep))
//     {
//         gelenCevep.forEach(function (row) {
//             let h3 = document.createElement("h3");
//             let title = row.title;
//             h3.innerText = title;
//             if (row.id % 2 === 0)
//             {
//                 h3.style.color = "green";
//             }
//             else
//             {
//                 h3.style.color = "red";
//             }

//             let paragraph = document.createElement("p");
//             paragraph.innerText = row.body;

//             divContent.appendChild(h3);
//             divContent.appendChild(paragraph);
//         });
//     }
// });