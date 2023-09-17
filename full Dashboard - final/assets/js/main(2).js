// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
let availablekeywords=["kigali", "muhanga", "huye", "gikongoro",
         "nyanza","kibuye" ,"cyangugu","gitarama","gisenyi","byumba","ruhengeri",
         "gatuna", "nyagatare","rwamagana", "kibungo", "rusumo","kayonza"];
       
        const resultsBox=document.querySelector(".result-box");
        const inputBox=document.getElementById("input-box");
        inputBox.onkeyup= function(){
            let result=[];
            let input=inputBox.value;
            if(input.length){
                result=availablekeywords.filter((keyword)=>{
                    return keyword.toLowerCase().includes(input.toLowerCase());
                });
                console.log(result);
            }
          display(result); 
               if(!result.length){
                resultsBox.innerHTML="";
               }
            
        }
