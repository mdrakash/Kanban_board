document.getElementById("addtaskbtn").addEventListener("click", addtask);
document.getElementById("taskdlt").addEventListener("click", deletetask);

let taskList=document.getElementById("task-list");
/* let progressList=document.getElementById("task-list");
let doneList=document.getElementById("task-list"); */

function  addtask(){
    let numb = taskList.childElementCount;
    let taskName=document.getElementById("addtask").value;
    taskList.insertAdjacentHTML('beforeend',` <li class="bg-light list-group-item task" id="${numb+1}">${taskName}
                    <button class="btn btn-primary btn-sm" type="button">X</button>
                    <button class="btn btn-primary btn-sm" type="button">Y</button>
                    </li>
                    `)
}

function deletetask(){
    taskList.removeChild
}