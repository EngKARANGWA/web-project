let openingshop=document.querySelector(".booking");
let closingshop=document.querySelector(".closeshoping");
let list=document.querySelector(".list");
let listcard=document.querySelector(".listcard");
let body=document.querySelector("body");
let total=document.querySelector("total");
let quantity=document.querySelector("quantity");

openingshop.addEventListener("click",()=>{
    body.classList.add("active");
})

closingshop.addEventListener("click",()=>{
    body.classList.remove("active");
})
let product={
    {
    id: 1,
    name:"product name 1",
    Image:"1.png",
    price:100000
},
{
    id: 1,
    name:"product name 1",
    Image:"polo.jpg",
    price:300000
},
{
    id: 1,
    name:"product name 1",
    Image:"nova.jpg",
    price:200000
},
{
    id: 1,
    name:"product name 1",
    Image:"23vw.png",
    price:50000
},
};
let listcard=[];
function initapp(){
    product.forEach((volume,key) => {
        let newDiv=document.createElement("div")
        newDiv.innerHTML="
    <image src="image/{value.image}"/>
     <div class="title">${value.name}</div>
     <div class="price">${value.price.total}</div>
        ";
        list.appendChild(newDiv);
        
    })
}
initapp();