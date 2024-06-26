
<?php
 $server="localhost";
 $username="root";
 $password="";
 $databse="efood";
    $con=mysqli_connect($server,$username,$password,$databse);
 if(!$con)
 {
     die("The Data Base Is Not Conected".mysqli_connect_error());
   
 }
 
// if(isset($_POST['order_btn'])){

//   $name = $_POST['name'];
//   $number = $_POST['number'];
//   $email = $_POST['email'];
//   $method = $_POST['method'];
//   $flat = $_POST['flat'];
//   $street = $_POST['street'];
//   $city = $_POST['city'];
//   $state = $_POST['state'];
//   $country = $_POST['country'];
//   $pin_code = $_POST['pin_code'];
 
//   $cart_query = mysqli_query($con, "SELECT * FROM `order`");

//   $price_total = 0;

//      while($product_item = mysqli_fetch_assoc($cart_query)){
//         $product_name[] = $product_item['Dish Name'];
//         $product_price = number_format($product_item['Rate'] );
//         $price_total += $product_price;
     
//   }
//   $total_product = implode(', ',$product_name);
//    $detail_query =  "INSERT INTO`cart`(`name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`,` pin_code`, `total_products`, `total_price`) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')" or die('query failed');

//   if($cart_query && $detail_query){
//     echo "
//     <div class='order-message-container'>
//     <div class='message-container'>
//        <h3>thank you for shopping!</h3>
//        <div class='order-detail'>
//           <span>".$total_product."</span>
//           <span class='total'> total : ".$price_total."/-  </span>
//        </div>
//        <div class='customer-details'>
//           <p> your name : <span>".$name."</span> </p>
//           <p> your number : <span>".$number."</span> </p>
//           <p> your email : <span>".$email."</span> </p>
//           <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
//           <p> your payment mode : <span>".$method."</span> </p>
//           <p>(*pay when product arrives*)</p>
//        </div>
//           <a href='products.php' class='btn'>continue shopping</a>
//        </div>
//     </div>
//     ";
//   }

// }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <style>
    .display-order{
   
      border-radius: 5rem;
background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
    text-align: center;
    padding: 0rem;
    margin-bottom: 1rem;
   
}
.checkout-form form{
padding: 2rem;
border-radius: 5rem;
background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
.checkout-form form .flex{
display: flex;
flex-wrap: wrap ;
gap: 1.5rem;

}
.checkout-form form .flex .inputBox{
    flex: 1 1 24rem;

}
.inputBox input{
   width: 28rem;
   border-radius:7px;
   background: transparent;
}
.inputBox input::placeholder{
   color:black;
}
.inputBox select{
   width: 28rem;
   border-radius:7px;
   background: transparent;
}

.inputBox span {
    display: block;
    font-size: 1.5rem;
    font-weight: bold;
}
.checkout-form form .flex .inputBox span{
    font-size: 1rem;
}
.checkout-form form .flex .inputbox input,
.checkout-form form .flex .inputbox select{
width: 100%;
background-color: white;
font-size: 0rem;
color: black;
border-radius: 0.5rem;
margin: 1rem 0;
padding: 1rem 1rem;
text-transform: none;
border:2px solid black;
}
.display-order span{
   display: inline-block;
   border-radius: .5rem;

  
   font-size: 1.5rem;
   color:var(--black);
   margin:.5rem;
}
.display-order .grand-total{
  display: block;
}
.h1{
   font-size: 3rem;

}
@media only screen and (max-width: 671px){
   .inputBox input,.inputBox select{
   width: 16rem;
}
.flex{
   justify-content: center;
    align-items: center;
}
.h1{
   font-size: 1.4rem;
}
.display-order span{
   font-size: 1rem;
   margin: 2px
}
}
    </style>
  <body>
 <div class="container">
  
     <div class="checkout-form">
     <h1 class="heading text-center h1">Complete Your Form</h1>
     <div class="display-order">
       <?php
       $select_cart=mysqli_query($con,"SELECT * FROM `order`");
       $total=0;
       $grand_total=0;
       if(mysqli_num_rows($select_cart) > 0){
       while($vr=mysqli_fetch_array( $select_cart)){
        $total_price=number_format($vr['Rate'] * $vr['quantity']);
        $grand_total = $total += $total_price;
         ?>
           <span><?= $vr['Dish Name']; ?>(<?= $vr['quantity']; ?>)</span>
          <?php
         }
        }else{
           echo "<div class='display-order'><span>your cart is empty!</span></div>";
        }
        ?>
      <span class="grand-total"> Grand total : <strong><?= $grand_total; ?>/-</strong> </span>
      
     </div>
<form action="forder.php" method="post">
<div class="flex">
         <div class="inputBox">
            <span>Your Name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>Your Phone Number</span>
            <input type="number" placeholder="enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span>Your Email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Payment Method</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on delivery</option>
               <option value="credit cart">credit cart</option>
               <option value="paypal">paypal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Address line 1</span>
            <input type="text" placeholder="e.g. flat no." name="flat" required>
         </div>
         <div class="inputBox">
            <span>Address line 2</span>
            <input type="text" placeholder="e.g. street name" name="street" required>
         </div>
         <div class="inputBox">
            <span>City</span>
            <input type="text" placeholder="e.g. mumbai" name="city" required>
         </div>
         <div class="inputBox">
            <span>State</span>
            <input type="text" placeholder="e.g. maharashtra" name="state" required>
         </div>
         <div class="inputBox">
            <span>Country</span>
            <input type="text" placeholder="e.g. india" name="country" required>
         </div>
         <div class="inputBox">
            <span>Pin code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
         </div>
      </div>
      <div class="d-grid gap-2">
      <input type="submit" value="order now" name="order_btn" class="btn btn-dark mt-5">
      </div>
     
   </form>

 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>