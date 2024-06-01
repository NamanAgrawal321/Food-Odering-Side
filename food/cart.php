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
if(isset($_POST['update_update_btn'])){
  $update_value=$_POST['quan'];
  $update_id=$_POST['id'];
  $update_quantity_query = mysqli_query($con, "UPDATE `order` SET quantity = '$update_value' WHERE id = '$update_id'");
  if($update_quantity_query){
    header('location:cart.php');
 }

}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <style>
     body{
       background: #f2f2f2;
     }
     .Table-h{
      background: black;
    color: white;
     }
     table{
      width: 68rem;
      margin:auto;
     }
     .cs{
      transform: translateX(-15px);
    margin-top: 15px;
}
.btn1 a{
  text-decoration: none;
    color: white;

}

@media only screen and (max-width: 1199px){
  .containe{
    margin:0;
  }
  table {
    width: 58rem;
    position: fixed
}
.navbar-brand{
  
    font-size: 0.8rem;
    padding-top: 1px;
    margin-top: 1px;
}
.h-2{
  
  padding-top: 0px;

}
.hj{
  font-size: 9px;
    width: 9px;
    padding-right: 21px
}.na{
  
  font-size: 10px;
}
.container-fluid{
  padding-top: 5px;
}
}
@media only screen and (max-width: 1199px){
  table{
    width: 48rem;
  }
}
@media only screen and (max-width: 671px){
img{
  height: 3rem;
    width: 3rem;
}
td{
  font-size: 0.7rem;
    font-weight: bold;
    margin-left: 133px;
}
.btn{
  font-size: 0.5rem;
}
th{
  font-size: 0.7rem;
}
table {
    width: 32rem;
}
th{
  font-size: 0.4rem;
}
.num{
  width: 23px;
}
img{
  height: 2rem;
    width: 2rem;
}
.cs{
  transform: translateX(0px);
}
.btn1{
  transform: translatex(-138px);
    width: 61px;
}
table{
  width: 29rem;
}

}

     </style>
    <title>Bootstrap demo</title>
  </head>
  <body>
  <nav class="navbar  navbar-dark bg-dark h-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler hj" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active na" aria-current="page" href="fooder.php">Home</a>
        </li>
       
      
          
       
     
    </div>
  </div>
</nav>
<div class="containe">
<section class="Shoping-Cart">
  <h1 class="heading text-center">Shoping Cart</h1>
  <table>
    <thead class="Table-h">
    <th >Image</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th> Total Price</th>
    <th>Action</th>
</thead>



</div>
    <?php
   

   
   $sql = "SELECT * FROM `order`";

   $query = mysqli_query($con,$sql);
   $nums = mysqli_num_rows($query);
   $grand_total=0;
  
   while($red=mysqli_fetch_array($query)){
 
     
?>
<tr>
  <td><img src="data/<?php echo $red['Images'];?>" height="100" alt=" Your item" ></td>
  <td><?php echo $red['Dish Name'];?></td>
  <td ><?php  echo number_format($red['Rate']);?>/-</td>
  <td>
    <form action="" method="post"> 
      <input type="hidden" name="id" value="<?php echo $red['Id'];?>">
      <input type="number" name="quan" min="1" value="<?php echo $red['quantity'];?>" class="num">
      <input type="submit" value="Update" name="update_update_btn" class="btn btn-warning btn-sm">
    </form>
  </td>

  <td><?php echo  $sub_total=number_format($red['Rate'] * $red['quantity']);?></td>
  <td><a href="del.php?id=<?php echo $red['Id'];?>" class="btn btn-danger btn-sm"> Remove</a></td>
</tr>

<tr>
  <td class="table-botton">
    <a href="index.php"  class="btn cs btn-warning">Contine Shoping</a></td> 
    <td  colspan="3" class="fw-bold"> Grand Total </td>
    <td class="fw-bold"><?php echo $grand_total; ?>/-</td>
   <td  class="btn btn1 btn-dark"> <a href="Checkout.php"class="btn=<?= ( $grand_total<1 )?'':'disabled'; ?>" >Proceed TO Checkout</a>
    </td>
</tr>

<tbody>
  </table>
  <div class="container">
    <div class="image">
    <img src="data/<?php echo $red['Images'];?>" height="100" alt=" Your item" >
    </div>
    <div class="data">
    <form action="" method="post"> 
      <input type="hidden" name="id" value="<?php echo $red['Id'];?>">
      <input type="number" name="quan" min="1" value="<?php echo $red['quantity'];?>" class="num">
      <input type="submit" value="Update" name="update_update_btn" class="btn btn-warning btn-sm">
    </form>
    </div>
    <div class="rate">
    <?php echo  $sub_total=number_format($red['Rate'] * $red['quantity']);?></td>
  <td><a href="del.php?id=<?php echo $red['Id'];?>" class="btn btn-danger btn-sm"> Remove</a>
    </div>
    <div class="submission">
    <h3><?php
   $grand_total =  $grand_total + $sub_total ;
   }
 
  ?></h3>
  
    </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
