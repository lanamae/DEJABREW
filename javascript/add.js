//  
var productPrice = document.querySelectorAll('.product-price');
var qty = document.querySelectorAll('.qty');
// var subTotal = document.querySelectorAll('.sub-total');
var order = document.querySelectorAll('.order');
var grandTotal = document.querySelector('.grand-total');
var sample = document.querySelectorAll('.sample');
var total = document.querySelectorAll('.total');


const subTotal = () =>{
        
    gt = 0;
    for(let i=0;i<order.length;i++){

        total[i].value = (productPrice[i].value* qty[i].value);
        
        gt = gt+(productPrice[i].value* qty[i].value);
        grandTotals =gt;
        
    }
}

subTotal();

   


    // var price = productPrice.value;

// var subTotalVal = subTotal.value;

// alert(order.length);
// alert(productPrice.length);




// for(let i=0;i<productPrice.length;i++){

//      sample.innerText= productPrice[i].value;

// }

// const subTotal = () =>{


// }

// grandTotal.value = orderPrice;
// sample.innerText = orderPrice;

// alert(orderPrice)


// var priceLength = productPrice.length;
// var qtyLength = qty.length;


// for(let i=0;i<priceLength;i++){

//     let array = productPrice[i].value * qty[i].value;
//     console.log(array);
    


// }


