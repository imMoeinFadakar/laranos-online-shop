let count = 1 ;

function add_products(){
let maxNumber = document.getElementById("maxNumber").value
let productCounter = document.getElementById("productCounter");


    count++

if (count >= maxNumber ){
    count = maxNumber
}
productCounter.value = count

}
function min_products(){
    let productCounter = document.getElementById("productCounter");
    count--
      if (count <= 1){

        count = 1

      }
  
      productCounter.value = count


}








