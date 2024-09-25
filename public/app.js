// app.js

let  imageHolder = document.getElementById("imageHolder");







function counterProductInBasket(id , price){
let counterProductInBaskets = document.getElementById("counterProductInBasket"+id).value
  let User_id = document.getElementById("User_id").value
  let csrf = document.getElementById("csrf").value 
  let Product_id = document.getElementById("Product_id").value    
let priceWrapper = document.getElementById("priceWrapper"+id)

let theLastPrice =   price * counterProductInBaskets

priceWrapper.innerHTML = theLastPrice  + " تومان"


        let myJson = {
          order_id : id ,
          product_id:  Product_id  ,
          user_id : User_id ,
          count : counterProductInBaskets ,
        };
      
        fetch('/sendNewCount', {
          method: "POST",
          body: JSON.stringify(myJson), 
          headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": csrf ,
          },
        }).then(result => result.text()).then(result => {


        })




  }










let box = document.getElementById("close")
let closeHandler = document.getElementById("closeHandler")

box.style.fontFamily

if (box  && closeHandler){

closeHandler.addEventListener( 'click' , function () {

  console.log("hi");
box.style.display = "none"

})


}else{


}



function AddToCart(Product_id , csrf_token){
let shoppingBasket = document.getElementById("shoppingBasket")
    let id = document.getElementById("id").value
    let idUser = document.getElementById("idUser").value
    let productCounter = document.getElementById("productCounter").value
    let afterShop = document.getElementById("afterShop")

 
    
      let myJson = {
        product_id:  Product_id  ,
        user_id : idUser ,
        count : productCounter ,
      };
    
      fetch('/addToOrders', {
        method: "POST",
        body: JSON.stringify(myJson), 
        headers: {
          "Content-Type": "application/json",
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest",
          "X-CSRF-Token": csrf_token ,
        },
      }).then(result => result.text()).then(result => {

        shoppingBasket.style.display = 'none'
        afterShop.style.display = 'block'

        let div1 = document.createElement('div');

        div1.classList.add("z-2")
        div1.setAttribute(  "id", "close" )
        div1.style.top = "0%"
        
        div1.style.width = "100%"
        div1.style.height = "100vh"
        div1.style.zIndex = "2"
        div1.style.position = "fixed"
        div1.style.borderRadius = "10px"
        div1.style.backdropFilter = "blur( 6.5px ) "
        div1.style.boxShadow = "0 8px 32px 0 rgba( 31, 38, 135, 0.37 )"
        div1.style.backgroundColor = "rgba( 255, 255, 255, 0.15 )"
        
        let div2 = document.createElement('div');
        div2.classList.add("card")
        div2.classList.add("text-bg-light")
        div2.classList.add("mb-3")
        div2.classList.add("p-0")
        div2.classList.add("mx-auto")
        div2.classList.add("z-3")
        div2.style.maxWidth = "25rem"
        div2.style.top = "40%"
        div2.style.left = "0%"
        
        let div3 = document.createElement('div');
        div3.classList.add("card-header")
        div3.classList.add("orangeBGC")
        div3.classList.add("text-white")
        div3.innerHTML = "پیام مدیریت"
        
        let div4 = document.createElement('div');
        div4.classList.add("card-body")
        
        let p = document.createElement('p');
        p.classList.add("card-text")
        p.style.fontFamily = "Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"
        p.innerHTML = result
        
        let p2 = document.createElement('p');
        p2.classList.add("card-text")
        p2.style.fontFamily = "Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"
        
        
        
        let h5 = document.createElement('h5');
        h5.classList.add("card-title")
        
        let btn =  document.createElement("button")
        btn.classList.add("btn")
        btn.classList.add("btn__signup")
        btn.innerHTML = "باشه"
        
        
        document.body.appendChild(div1)
        div1.appendChild(div2)
        div2.appendChild(div3)
        div2.appendChild(div4)
        div4.appendChild(p)
        div4.appendChild(btn)
        div4.appendChild(h5)
        
        btn.addEventListener('click' , function(){
        
            div1.style.display = "none"
        
        })
        div1.addEventListener('click' , function(){
        
            div1.style.display = "none"
        
        })
        
        setInterval(() => {
            
           
        p2.innerHTML = num
        
        }, 1000);
        
        
        
        setTimeout( function(){
        
        div1.style.display = "none"
          
        }  , 5000)
        
        
    
      })
    
}






