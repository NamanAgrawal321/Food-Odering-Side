<?php
$id=$_GET['id'];
$server="localhost";
$username="root";
$password="";
$databse="efood";
   $con=mysqli_connect($server,$username,$password,$databse);

 $sql= "DELETE FROM `eorder` WHERE id=$id";
 $delete=mysqli_query($con,$sql);
 if($delete){
     header("location:food.php");
 }
?>