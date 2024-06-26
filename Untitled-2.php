<div class="card mb-3 ml-5 mb-4" style="max-width: 70vh;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/<?php echo $res['Images'];?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res['Dish Name'];?></h5>
        <p class="card-text"><?php echo $res['Specification'];?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <?php
 $server="localhost";
 $username="root";
 $password="";
 $databse="food";
 
 
 
 $con=mysqli_connect($server,$username,$password,$databse);
 if(!$con)
 {
     die("The Data Base Is Not Conected".mysqli_connect_error());
 }

$sql = " select * from odering ";

$query = mysqli_query($con,$sql);
$nums = mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
    

   ?>

<?php
}

?>