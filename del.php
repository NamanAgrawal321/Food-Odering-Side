<?php
$id=$_GET['id'];
$server="localhost";
$username="root";
$password="";
$databse="efood";
   $con=mysqli_connect($server,$username,$password,$databse);

 $sql= "DELETE FROM `order` WHERE Id=$id";
 $delete=mysqli_query($con,$sql);
 if($delete){
     header("location:cart.php");
 }
?>