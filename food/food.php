
<?php   
$username = "root";
$password = "";
$hostname = "localhost"; 
$db       = "efood";
$link = new mysqli($hostname, $username, $password, $db);

 if ($link->connect_errno)
    printf("Connect failed: %s\n", $link->connect_error);
 else 
    echo "";


 $Urgency = "Urgency";

if(isset($_POST['sub'])){
$dish=$_POST["dish"];
$sep=$_POST["sep"];
$rate=$_POST["amt"];
$Image=$_POST["image"];

 //Insert into Database
  $sql = "INSERT INTO `efood`.`eorder` (`id`, `Dish Name`, `Specification`, `Rate`, `Images` ) VALUES (NULL, '$dish', '$sep', '$rate', '$Image')";

if(!mysqli_query($link, $sql))
       {
       die('Error: ' . mysqli_error($link));
       }

    

    mysqli_close($link);

}//////// end isset submit if ////////
 ?>

    

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .gol {
    height: 20rem;
    width: 20rem;
    background: rgba(249, 47, 47, 0.3);
    border: rgba(249, 47, 47, 0.3) 2px solid;
    border-radius: 50%;
    position: absolute;
    transform: translateY(-88px)translateX(-140px) skew(287deg, 10deg)rotateX(45deg);


  }
  .navbar{
    z-index: 100;
  }

  .gol::before {
    position: absolute;
    content: "";
    z-index: -1;
    height: 100%;
    width: 100%;
    opacity: 2;
  }

  .container::before 
  {
   border-radius: 5px;
    background-color: #f2f2f2;
    content: "";
    z-index: -1;
    height: 100%;
    width: 100%;
    opacity: 2; 
  }

  .container {
    max-width: 80%;
    display: flex;

    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    margin: 6rem auto;
    border: 2px solid rgb(26, 18, 18);
    border: black 2px solid;
    border-radius: 3px;
    background: rgba(255, 255, 255, 0.07);
    box-shadow: 1rem 2rem 2rem 2rem rgba(0, 0, 0, 0.1);
  }

  .container form {
    width: 68rem;
    background: #d1c9c63b;
    width: 102%;
    border: rgba(0, 0, 0, 0.3) 1px solid;
    border-radius: 5rem;
  }

  
  
  input {
    border: rgba(86, 10, 10, 0.3) 2px solid;
    border-radius: 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: double;
    background-color: transparent;

    justify-content: center;
    text-align: center;
    margin: 14px auto;
    height: 39px;
    width: 80%;
  }

  input::placeholder {
    color: rgb(0, 0, 0);
  }


  .navbar .container-fluid img {
    height: 2rem;
  }

 .submit {
    width: 81%;
    margin-bottom: 2rem;
  }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

      <img src="img/logo.png" alt="" class="h-5">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
 else
 {
   
 }

$sql = " select * from eorder ";

$query = mysqli_query($con,$sql);
$nums = mysqli_num_rows($query);
?>
        
      </form>



        </ul>
        <form class="d-flex">
          <a class="form-control me-2  btn btn-danger" aria-label="page" href="logout.php">Logout</a>

          <span><i class="fa fa-cart-arrow-down  fa-2x" aria-hidden="true"></i></span> <a href="index.php" class=" btn btn-outline-danger justify-content-end">
        (<?php echo $nums;?>)
</a>
        </form>
      </div>
    </div>
  </nav>
  <div class="golt">
    <div class="gol"></div>

  </div>
  <div class="container">
    <form action="food.php" method="post">
      <input type="text" name="dish" id="name" placeholder="Enter Your dish">
      <input type="text" name="sep" id="Email" placeholder="Enter Your Specification">
      <input type="text" name="amt" id="phone" placeholder="Enter Your amount">
      <input type="file" name="image" id="image" placeholder="Upload Your Image">
      <br>
      <button class="btn submit btn-dark w-40" name="sub">Submit</button>
    </form>
  </div>
  </div>
  <table class="table ">
  <thead>
    <tr class="table-dark">
      <th scope="col">Image</th>
      <th scope="col">Dish Name</th>
      <th scope="col">Specification</th>
      <th scope="col">Rate</th>
      <th scope="col">Opration</th>
      
    </tr>
  </thead>
  <tbody>
    
  
 
  <?php
 

$sqll = " select * from eorder ";

$query = mysqli_query($con,$sqll);
$nums = mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
    

   ?>
   
 
   <tr class="table-Secondary">
      <th scope="row"><img src="data/<?php echo $res['Images'];?>"width="150px" height="100px" border-radius="90px" alt="Speicies" ></th>
      <td> <?php echo $res['Dish Name'];?></td>
      <td><?php echo $res['Specification'];?></td>
      <td><?php echo $res['Rate'];?></td>
     
      <td>
<a href="edit.php?id=<?php echo $res['id'];?>"  class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
<a href="Remove.php?id=<?php echo $res['id'];?>" class="btn btn-danger "> <i class="fa fa-trash" aria-hidden="true"></i>Remove</a>
      </td>
      
    </tr>
    <hr>
<?php
}

?>
 </tbody>
</table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>
<!-- INSERT INTO `odering` (`Sr.No`, `Dish Name`, `Specification`, `Rate`, `Images`, `Date And Time`) VALUES (NULL, 'Pizaa', 'Good Piza', '20', 'naban', current_timestamp()); -->