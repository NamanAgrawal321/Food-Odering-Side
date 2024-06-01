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




  .navbar {
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

  .container::before {
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
          <li class="nav-item">

          </li>
        </ul>
        <form class="d-flex">
          <a class="form-control me-2  btn btn-danger" aria-label="page" href="logout.php">Logout</a>


        </form>
      </div>
    </div>
  </nav>
  <div class="golt">
    <div class="gol"></div>

  </div>
  <?php
$id=$_GET['id'];
$server="localhost";
$username="root";
$password="";
$databse="efood";
   $con=mysqli_connect($server,$username,$password,$databse);

 $sql="SELECT * FROM `eorder` WHERE id=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 $dish= $row['Dish Name'];
 $sep= $row['Specification'];
 $rate= $row['Rate'];
 $img= $row['Images'];

?>
  <div class="container">
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
      <input type="text" name="dish" id="name" placeholder="Enter Your dish" value="<?php echo $dish; ?>">
      <input type="text" name="sep" id="Email" placeholder="Enter Your Specification" value="<?php echo $sep; ?>">
      <input type="number" name="amt" id="phone" placeholder="Enter Your amount" value="<?php echo $rate; ?>">
      <input type="file" name="image" id="image" placeholder="Upload Your Image" value="<?php echo $img; ?>">
      <br>
      <button type="submit" class="btn btn-dark"> Update</button>
    </form>
  </div>
  </div>