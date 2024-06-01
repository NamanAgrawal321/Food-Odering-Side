<?php
$id=$_POST['id'];
$dish=$_POST['dish'];
$sep=$_POST['sep'];
$amt=$_POST['amt'];
$img=$_POST['image'];
$server="localhost";
$username="root";
$password="";
$databse="efood";
   $con=mysqli_connect($server,$username,$password,$databse);
   $sql="INSERT INTO `efood`.`cart` (id, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_product`, `total_price`) VALUE (NULL, '  $name', ' $number', ' $email', '$method', '$flat', '$street', '  $city', '$state ', ' $country', '  $pin_code', '$total_product', ' $price_total')";
   $up=mysqli_query($con,$sql);
   if($up){
       header("location: food.php");
   }

?>