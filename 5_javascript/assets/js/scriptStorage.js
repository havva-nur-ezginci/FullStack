
// console.log(localStorage);//Storage {length: 0}

//localStorage.clear();

// console.log(sessionStorage);//Storage {IsThisFirstTime_Log_From_LiveServer: 'true', length: 1}

// let firstName = "nur";
// let lastName  = "mavi";

// localStorage .setItem("firstName", firstName);//key  : value
// localStorage.setItem("lastName", lastName);

// sessionStorage.setItem("firstName", firstName);
// sessionStorage.setItem("lastName", lastName);

//console.log(localStorage);//Storage {lastName: 'mavi', firstName: 'nur', length: 2}
//console.log(sessionStorage);//Storage {IsThisFirstTime_Log_From_LiveServer: 'true', lastName: 'mavi', firstName: 'nur', length: 3}


//localStorage.clear();

/**
 * Dizileri ve Objeleri / Nesneler Storage a Yazma
 */

let numbers = [5,6,7];
let numbers2 = [55,67,78];

let person = {
    firstName: "havvanur",
    lastName : "ezginci"
}

sessionStorage.setItem("numbers", numbers);
sessionStorage.setItem("numbers2", JSON.stringify(numbers2));
sessionStorage.setItem("person", JSON.stringify(person));

//array olarak gözükmesini istiyorsak JSON.stringify kullanılır.

// console.log(localStorage);//Storage {length: 0}
// console.log(sessionStorage);//Storage {numbers: '5,6,7', IsThisFirstTime_Log_From_LiveServer: 'true', person: '{"firstName":"havvanur","lastName":"ezginci"}', numbers2: '[55,67,78]', length: 4}




/**
 * Dizileri ve Objeleri Okuma
 */

// numbers2 = sessionStorage.getItem("numbers2");
// numbers2 = JSON.parse(numbers2);

// console.log(sessionStorage.getItem("numbers"));//5,6,7
// console.log(JSON.parse(sessionStorage.getItem("numbers2")));//(3) [55, 67, 78]
// console.log(numbers2);//(3) [55, 67, 78]
// console.log(JSON.parse(sessionStorage.getItem("person")));//{firstName: 'havvanur', lastName: 'ezginci'}

// console.log(sessionStorage);//Storage {numbers: '5,6,7', IsThisFirstTime_Log_From_LiveServer: 'true', person: '{"firstName":"havvanur","lastName":"ezginci"}', numbers2: '[55,67,78]', length: 4}
// console.log(localStorage);//Storage {length: 0}

/**
 * Silme İşlemi
 */

// sessionStorage.removeItem("numbers");

// sessionStorage.clear();


// let sayi = 20;
// sessionStorage.setItem("sayi", JSON.stringify(sayi));

// let gelen = JSON.parse(JSON.stringify(sayi));
// console.log(sessionStorage);
// console.log(typeof gelen);
// document.cookie = "names=sercan" + new Date(2023,2,1,11,0);
// console.log(document.cookie);

