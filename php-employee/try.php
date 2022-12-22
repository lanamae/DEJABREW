<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .order{
        width: 200px;
        height: 300px;
        border:  1px solid black;

    }

    img{
        width: 100px;
        height: 100px;
    }
</style>

<body>


<div class="order">

    <div class="product-name">Almond</div>
    <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" srcset="">
    <input type="numer" name="product-price" class="product-price" value="130">
    <!-- <input type="number" name="qty" id="qty" value="8" class="qty"> -->

 
    <input type="number" name="qty" id="qty" class="qty" value="2" onchange=subTotal()>
    <input type="number" name="total" id="total" class="total" value="0">
    
</div>

<div class="order">

    <div class="product-name">Almond</div>
    <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" srcset="">
    <input type="numer" name="product-price" class="product-price" value="140">
    <!-- <input type="number" name="qty" id="qty" value="2" class="qty"> -->

 
    <input type="number" name="qty" id="qty" class="qty" value="3">
    <input type="number" name="total" id="total" class="total" value="0">
    
</div>

<div class="order">

    <div class="product-name">Almond</div>
    <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" srcset="">
    <input type="numer" name="product-price" class="product-price" value="160">
    <!-- <input type="number" name="qty" id="qty" value="3" class="qty"> -->

 
    <input type="number" name="qty" id="qty" class="qty" value="5">
    <input type="number" name="total" id="total" class="total" value="0">


    
</div>



<input type="number" class="grand-total" value="">
<div class="sample"></div>





</body>

<script src="../javascript/add.js"></script>
</html>