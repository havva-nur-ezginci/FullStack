
addEventListener("DOMContentLoaded" ,function(event){
    // Tüm içerik yüklendiğinde çalışır

    let btnAddTaskList = document.querySelector("#btnAddTaskList");
    let btnCompletedTask = document.querySelector("#btnCompletedTask");
    let btnRemoveTask = document.querySelector("#btnRemoveTask");
    let btnSelectAll = document.querySelector("#btnSelectAll");
    let btnClearList = document.querySelector("#btnClearList");

    let newTaskName = document.querySelector("#newTaskName");
    let taskListUl = document.querySelector("#taskListUl");
    let completedListUl = document.querySelector("#completedListUl");

    let taskList = [];
    let completedTaskList = [];
    let selectedList = [];

    let wrapperLiElementID = 0;

    Array.prototype.remove = function () {
        var what, a = arguments, L = a.length, ax;
        // arguments : parametre gönderilirse değerler 
        while (L && this.length) {
            what = a[--L];// last index
            while ((ax = this.indexOf(what)) !== -1) {
                this.splice(ax, 1);
            }
        }
        return this;
    }

    // Butona tıklandığında task liste eklensin
    btnAddTaskList.addEventListener("click",function(event){
        //event.preventDefault(); - href= javascript:void(0)
        if(newTaskName.value == null || newTaskName.value==""){
            alert("New Task Name Boş!!");
        }
        else{
            createLiElement();
            newTaskName.value ="";
        }
        
    });

    //Tümünü seç butonu 
    btnSelectAll.addEventListener("click",function(event){
        //event.preventDefault(); - href= javascript:void(0)

        let allSelected = true;
        if (taskList.length > selectedList.length)
        {
            taskList.forEach(function (value, index, array) {
                let selectInput = document.querySelector("#input-" + value);

                if (!selectInput.checked){
                    allSelected = false;
                    selectInput.checked = true;
                    selectedList.push(value);
                }
            });
        }
            
        if(allSelected){//tümü seçiliyse hepsinin seçimini kaldır
                
            taskList.forEach(function (value, index, array) {
                let selectInput = document.querySelector("#input-" + value);
                if (selectInput.checked) {
                    selectInput.checked = false;                                    
                }
                });
            selectedList = []
        }
    });


    // Listeden Çıkar 
    btnRemoveTask.addEventListener("click", function (event) {
        if (!selectedList.length)
        {
            alert("Seçili task yok");
        }
       else{
        
        selectedList.forEach(function (value, index, array) {

            let wrapperLiElement = document.querySelector("#wrapper-li-" + value);
            wrapperLiElement.remove();
            taskList.remove(value);
            
        });
        selectedList = [];
    }
    });

    //Tamamlandı
    btnCompletedTask.addEventListener("click", function (event) {

        if (selectedList.length <= 0)
        {
            alert("Seçili task yok!");
        }
        else
        {
            completedTaskList = selectedList.concat(completedTaskList);

            completedTaskList.forEach(function (value, index, array) {

                let label = document.querySelector('label[for="input-' + value + '"]');

                createCompletedElement(label.innerText);

                let deleteLi = document.querySelector("#wrapper-li-" + value);
                deleteLi.remove();

                taskList.remove(value);
            });
            selectedList = [];
        }
    });

    // Listeyi temizle
    btnClearList.addEventListener("click", function (event) {

       let liList = document.querySelectorAll(".completed-li");

       liList.forEach(function (value, key, parent) {
           value.remove();
       });

       completedTaskList = [];
    });

   

    function createCompletedElement(lblText)
    {
        let completedLi = document.createElement("li");
        completedLi.className = "list-group-item task-list-item px-3 completed-li";

        let completedLabel = document.createElement("label");
        completedLabel.innerText = lblText;

        completedLi.appendChild(completedLabel);

        completedListUl.appendChild(completedLi);
    }

    function inputChangeAction(inputID){

        let check = selectedList.indexOf(inputID);//yoksa -1 doner

        if (check === -1){
            selectedList.push(inputID);
        }
        else{
            selectedList.remove(inputID);
        }
    }

    function createLiElement(){

        let inputID = ++wrapperLiElementID;
        taskList.push(inputID);

        let li = document.createElement("li");
        li.className = "list-group-item task-list-item";
        li.id = "wrapper-li-"+inputID;

        let inputElement = document.createElement("input");
        inputElement.type = "checkbox";
        inputElement.className = "select-task mx-2";
        inputElement.id = "input-"+inputID;
        inputElement.onchange = function (){
            inputChangeAction(inputID);
        };

        let label = document.createElement("label");
        label.setAttribute("for","input-"+inputID);
        label.innerText = newTaskName.value ;

        let iElement = document.createElement("i");
        iElement.className = "fa fa-2x fa-trash text-primary float-end trashed";

        li.appendChild(inputElement);
        li.appendChild(label);
        li.appendChild(iElement);

        taskListUl.appendChild(li);  
    }
    
    });
    
