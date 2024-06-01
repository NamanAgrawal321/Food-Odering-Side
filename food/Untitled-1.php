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
 
if(isset($_POST['order_btn'])){

  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $method = $_POST['method'];
  $flat = $_POST['flat'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $pin_code = $_POST['pin_code'];
  $sql = "SELECT * FROM `order`";
  $cart_query = mysqli_query($con, $sql);

  $price_total = 0;
  if(mysqli_num_rows($cart_query) > 0){
     while($product_item = mysqli_fetch_assoc($cart_query)){
        $product_name[] = $product_item['Dish Name'];
        $product_price = number_format($product_item['Rate'] );
        $price_total += $product_price;
     };
  };
  $total_product = implode($product_name);
  $detail_query ="INSERT INTO `efood`.`cart` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_product`, `total_price`) VALUES (NULL, '  $name', ' $number', ' $email', '$method', '$flat', '$street', '  $city', '$state ', ' $country', '  $pin_code', '$total_product', ' $price_total')";
  if($cart_query && $detail_query){
    echo "
    <div class='order-message-container'>
    <div class='message-container'>
       <h3>thank you for shopping!</h3>
       <div class='order-detail'>
          <span>".$total_product."</span>
          <span class='total'> total : ".$price_total."/-  </span>
       </div>
       <div class='customer-details'>
          <p> your name : <span>".$name."</span> </p>
          <p> your number : <span>".$number."</span> </p>
          <p> your email : <span>".$email."</span> </p>
          <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
          <p> your payment mode : <span>".$method."</span> </p>
          <p>(*pay when product arrives*)</p>
       </div>
          <a href='products.php' class='btn'>continue shopping</a>
       </div>
    </div>
    ";
  }

}

?>