// nesne oluşturma
let student = {};

let student3 = new Object();
student3.firstName = "Yaşar";

student.firstName = "yasemin";
student.class = "3-A";

console.log(student.firstName);
console.log(student['firstName']);

let student2 = {
    firstName: "lale",
    lastName: "yaz",

    get firstNameUpperCase(){
        return this.firstName.toUpperCase();
    },
    getFullName: function (){
        return this.firstName + ' ' + this.lastName;
    },
    setfirstName(value){
        value = value.replace(/\\n*/g, "");
        this.firstName = value;
    }
}
student2.setfirstName("\nkırmızı");


// kalıtım
var Employee = function (firstName, lastName, departmentID, salary) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.departmentID = departmentID;
    this.salary = salary;

    this.setSalary = function(value){
        this.salary= value;
    };

};

let employee1 = new Employee("Yasemin", "Kevser", 1, 2000);

// Nesneye sonradan fonksiyonlarını oluşturma.
Employee.prototype.calculateSalary = function () {
    switch (this.departmentID)
    {
        case 0:
            return this.setSalary((this.salary * 0.20) + this.salary);
        case 1:
            return this.setSalary((this.salary * 0.30) + this.salary);
        case 2:
            return this.setSalary((this.salary * 0.40) + this.salary);
        default:
            return this.salary;

    }
};

// call - apply - bind 

let message = function (mesaj1,mesaj2) {
  return this.firstName + " " + this.lastName+" mesaj: "+mesaj1+mesaj2;
};

console.log(message.call(employee1,"tebrikler","...."));
console.log(message.apply(employee1,["tebrikler","...."]));

let messageBind = message.bind(employee1);// messageBind artık fonksiyon gibi çalışır.
console.log(messageBind("tebrikler","...."));

//contructor
let Employee2 = function (firstName, lastName, projectName, salary) {
    this.departmentID = 1;
    this.projectName = projectName;

    Employee.call(this, firstName, lastName, this.departmentID, salary);
    
};

Employee2.prototype = Object.create(Employee.prototype);// Employee2 aynı zamanda bir Employee dir.
Employee2.constructor = Employee2;// constructor kendi constructor ını kullanıcak

let employee2 = new Employee2("Havvanur", "kaya","geliştirme", 2000);

console.log(employee2);