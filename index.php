
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
 .cont{
  position: relative;
  background:#131313;
   width: 100%;
   

   opacity: 2;
   height:100vh;
 }
 .pt{
  margin: auto;
 }
 .head h1,p,span{
   color:white;
 }
 h1{
  font-size: 4rem;
 }
 .fs{
  font-size: 3rem;
    color: red;
    font-weight: 1000;
 }
 .f{
   color:#ff9933;
   font-size: 3rem;
 }
    .shadow{
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,1.15)!important;
    }
    .d-flex i{
    color:white;
    margin-right:12px;
  }
  .navbar .container-fluid img {
    height: 2rem;
  }
  .step-img-box::before{
    width: 60%;
    /*height: 60%;*/
    /* 60% of parente's width*/
    padding-bottom: 60%;
    background-color: #b1a8a8;
    z-index: -2;
}
 
.step-img-box::after{
    width: 45%;
    padding-bottom: 45%;
    background-color: #857f7a;
    z-index: -1;
}
.or1{
  
  margin-top: 11px;

}
.or2{
  margin-left: 9rem;
    transform: translateY(-35px);
    color:#ff9933;
}
.head{
  margin-left: 8rem;

}
.order{
  margin-top: 29px;
}
.img img{
  height: 48rem;
  animation:  mymove 10s infinite ease ;
  z-index:1;
 
}
@keyframes my {
   1%{
     transform:translateY(10px);
   }
  50%{
    transform:translateY(-50px);
   }
   100%{
    transform:translateY(10px);
   }
  }
@keyframes mymove {
    100% {transform: rotate(360deg);}
  }
  .my{
    position: absolute;
    animation:  my 10s infinite;
    
  }
 .img1 img{
  margin:4rem;
  position: absolute;
  height: 63px;
  z-index: 2;
  animation:  my 10s infinite;

 }
 .img2 img{
  margin: 4rem;
    position: absolute;
    height: 136px;
    z-index: 2;
    transform: translateX(-110px)translateY(189px);
  animation:  my 10s infinite;
 }
 .cd{
   margin:auto;
   transform: translateY(-30px);
   box-shadow: 0 0.5rem 4rem rgba(0,0,0,1.15)!important;
  
    width: 80%;
    height: 11rem;
 }
 .cd h2{
   color: #888;
   text-transform: uppercase;
    letter-spacing: 0.75px;
    font-weight: 500;
 }
 .logo img{
  height: 3.2rem;
    filter: brightness(0);
    opacity: 50%;
    margin-left: 4rem;
   

 }
 .cim{
  background-image: radial-gradient(circle, black, red,black);
 }
 .ic{
   color:#ffa5a5;;
 }
 .sep{
  font-size: 1.5rem;
 }
 .rate{
  color: black;
    font-size: 2.5rem;
    font-weight: bold;
 }
 .foot{
   background:#131313;
 }
 .flg img{
  height: 40px;
    margin-left: 5rem;
 }
 hr{
   margin: 0;
 }
 .footim img{
   height:50px;
   animation:  my 10s infinite ease ;
   
 }
 .flg h1{
   color:white;
 }
 .flg h1 span{
   color:#ff9933;
 }
 .flg{
  justify-content: space-between;
 }
 .fg img{
   height: 19rem;
  
 }
 .fh{
   background:black;
   color:white;
   margin-bottom:0;
   font-size: 22px;
 }
 .fh span{
  color:#ff9933;
 }
  .foot hr{
   color:white;
   border:5px;
 }
 .Cart{
  border-radius: 8px;
    padding: 4px;
    text-decoration: none;
    color: red;
    font-size: 14px;
    border: red 2px solid;
    background: white;
    margin-right: 2rem;
 }
 .Cart:hover{
   background:red;
   color: white;
 }
 .num{
  font-size: 18px;
    background: white;
    color: red;
    border: 2px solid red;
    cursor: pointer;
    
    margin-right: 17px;
    border-radius: 9px;
    padding: 2px;
 }
 .gh{
  height: 655px;
    margin: auto;
 }
 .hg{
  width: 1100px;
    margin: auto;
}
 .bh{
  width: 41px;
    height: 5rem;
 }
 .hy{
  
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);

background: radial-gradient(circle, #1b201fe6, #f9f9f9,#787070);

 }
 .img:hover{
  text-shadow: 23px 50px 0 #969696, 50px 50px 50px #aba8a8;
 }
 @media only screen and (max-width: 1084px){

  .cont{
    flex-direction: column;
    height:100%;
  }

 .head{
  margin:auto;
 }
 .img img{
  height: 35rem;
 
 }
 .img {
  margin:auto;
 }
.img1{
  margin:auto;
}
.img2{
  margin:auto;
}
.img3{
  margin:auto;
}
.logo img{
  height: 2.2rem
}
.hg{
  width: 619px;
}
.im{
  width:500px
}
.reveal{
  width: 26rem
}
.imt{
  width: 21rem;

}
.bgt{
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 6rem;
  margin-top: 1rem;

}
.pt{
  margin:auto;
}
.grid{
  gap: 3.6rem;
 }
 .flg img {
    height: 19px;
    margin-left: 0.5rem;
}
.flg h1{
  font-size: 2rem;
}
.fh{
  font-size: 16px;
}
}
@media only screen and (max-width: 600px){
  .head h1{
    font-size: 3rem;
  }
  .hg {
    width: 400px;
    height: 46rem
}
.bgt{
  grid-gap: 1rem;

}
.byu{
  width: 21rem;
}
.imt {
  
    width: 18rem;
    height: 15rem;
}
.im {
    width: 437px;
    height: 44rem;
}
.logo img{
  height: 1.9rem;
    margin-top: 8pxs
}
}
@media only screen and (max-width: 416px){
  .img img {
    height: 28rem;
}
.im {
    width: 437px;
    height: 44rem;
}
.byu {
    width: 17rem;
}
.imt {
    width: 13rem;
    height: 12rem;
}
}
@media only screen and (max-width: 416px){
  .bgt{
    grid-gap: 2px
  }
  .logo img {
    height: 1.3rem;
  }
  .hg {
    width: 331px;
    height: 37rem;
}
.im{
  height: 35rem
}
.bgt{
  height:

}

}
@media only screen and (max-width: 350px){
  .ms-3{
    width: 21rem;
  }
  .img img {
    height: 23rem;
}
.hg {
    width: 319px;
    height: 32rem;
}
.im {
    height: 30rem;
    width: 31rem;
}
.byu {
    width: 14rem;
}
.head h1 {
    font-size: 2rem;
}
.fs {
    font-size: 2rem;
}
.imt {
    width: 10rem;
    height: 9rem;
}
.hg {
    width: 302px
}
.logo img {
    height: 1.1rem;
}
.gh {
    height: 300px;
}
}
  </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <img src="img/logo.png" alt="" class="h-5">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logi.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="login.php">Managing Bord</a></li>
          </ul>
        </li>
       
      </ul>
      
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

$sqll = " SELECT * FROM `order`";

$quer = mysqli_query($con,$sqll);
$num = mysqli_num_rows($quer);
?>
        
      </form>



    <a href="cart.php" class="Cart fw-bold">Your Cart-></a><span class="num"> (<?php echo $num;?>)</span>
    </div>
  </div>
</nav>

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
?>
<div class="cont d-flex  ">
  <div class="head ">
<img src="data/qwelcome_.png" alt="" class="h-5 mt-5 ms-3 mb-5">
<h1 class=" fw-bold mb-3">ENJOY OUR DELICIOUS FOOD</h1>
<p class="fs">Buy One Pizza. Get One</p>
<p class="fs-1 fw-bold">FREE</p>
<h3 class="border-end-0"><span class="fs-3">Price : </span><span class=" f fw-bold"> 380/-</span><h3>
<div class="order d-flex">
  <img src="img/or.png" alt="" srcset="">
<p class="fs-1 or1">Delivery Order Num.</p>
</div>
<p class="fs-1 or2 ">123-59794069</p>
<img src="img/6.png" alt="" srcset="" class=" my mt-5 ">
</div>


<div class="img1">
  <img src="img/4.png" alt="" >
  </div>
  <div class="img">
  <img src="img/1.png" alt="" srcset="" class="mt-5 ">
 
</div>
<div class="img2">
  <img src="img/8.png" alt="">
</div>
<div class="img3">
<img src="img/3.png" alt="" class="3">
</div>
</div>
<div class="card cd shadow p-3" style="width: 90%;">
<h2 class="text-center">As Fetured In</h2>
  <div class="card-body logo">
   <img src="img/logos/logo1.png" alt="" srcset="">
    <img src="img/logos/logo2.png" alt="">
   <img src="img/logos/logo3.png" alt="">
   <img src="img/logos/logo4.png" alt="">
   <img src="img/logos/logo5.png" alt="">
  </div>
  
</div>
<<div id="carouselExampleCaptions" class="carousel slide hg card-body shadow p-3 mb-5  rounded hy" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions bg-dark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions bg-dark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions bg-dark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/s1.jpg" class="d-block gh im" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="df">This is Foodera Side</h5>
        <p class="df">First priority to Give the Happiness </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/s2.jpg" class="d-block gh" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="df">Quality</h5>
        <p class="df">I Give the Best Quality Product </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/s3.jpg" class="d-block gh" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="df">ENJOY OUR DELICIOUS FOOD</h5>
        <p class="df">Buy One Pizza Get One FREE</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bh bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon bh bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class=" container text-center container text-center row py-2  pt">
  <div class="bgt row  mt-4 ml-5">
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

$sql = " select * from eorder ";

$query = mysqli_query($con,$sql);
$nums = mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
    

   ?>
 
   <div class="col-md-3 mt-1 byu">
   <form action="order.php" method="post">
        <div class="card h-5 ">
          <div class="cim shadow-sm p-3 border" id="searchres">
        <img src="data/<?php echo $res['Images'];?>"width="250px" height="200px" border-radius="90px" alt="Speicies"  class="imt"><div></div><i class="fa ic fa-star fa-2x" aria-hidden="true"></i><i class="fa ic fa-star fa-2x" aria-hidden="true"></i><i class="fa ic fa-star fa-2x" aria-hidden="true"></i><i class="fa  ic fa-star fa-2x" aria-hidden="true"></i><i class="fa ic fa-star-o fa-2x" aria-hidden="true"></i></div>
          <div class="card-body shadow p-3">
          <h2 class="card-title text-center"> <?php echo $res['Dish Name'];?></h2>
          <h2 class="card-title sep text-center"> <?php echo $res['Specification'];?></h2>
          <p class="card-text rate  text-center"><?php echo  $res['Rate'] ?>/-</p>
          <input type="hidden" name="order" value="<?php echo $res['Dish Name'];?>">
          <input type="hidden" name="Specification" value="<?php echo $res['Specification'];?>">
          <input type="hidden" name="Rate" value="<?php echo $res['Rate'];?>">
          <input type="hidden" name="Images" value="<?php echo $res['Images'];?>">
          <div class="d-grid gap-2">
        <button type="submit" class=" btn btn-outline-danger " name="cart" value="cart" >Buy Now</button>  
</div>
         </div>
        </div>
        </div>
        </form>
        
        
    
<?php
}

?>
    </div>
  </div>
  <div class="container  grid grid--2-cols grid--center-v">
           <!--Step 01-->
           <div class="step-text-box">
             <p class="step-number">01</p>
             <h3 class="heading-tertiary">
                 Tell us what you like (and what not)
             </h3>
             <p class="step-description">
               Never again waste time thinking about what to eat! Foodora AI 
               will create a 100% personalized weekly meal plan just for you. It makes
               sure you get all the nutrients and vitamins you need, no matter 
               what diet you follow!
             </p>
           </div>
           <div class="step-img-box">
             <img
              src="img/app/app-screen-1.png"
              class="step-img"
              alt="iPhone app
             preferences selection screen"
             />
           </div>

           <!--Step 02-->
           <div class="step-img-box">
             <img 
              src="img/app/app-screen-2.png"
              class="step-img"
              alt="iPhone app
            meal approving plan screen"
            />
           </div>
           <div class="step-text-box">
            <p class="step-number">02</p>
            <h3 class="heading-tertiary"> Approve your weekly meal plan</h3>
            <p class="step-description">
              once per week, approve the meal plan generated for you by Foodora
              AI. You can change ingredients, swap entire meals, or even add
              your own recipes.

            </p>
        </div> 

        <!--Step 03-->
          <div class="step-text-box">
           <p class="step-number">03</p>
           <h3 class="heading-tertiary"> Receive meals at convenient time</h3>
           <p class="step-description">
             Best chefs in town will cook your selected meal every day,
             and we will deliver it to your door whenever works best for you.
             You can change delivery schedule and address daily!

           </p>
          </div>
          <div class="step-img-box">
           <img 
             src="img/app/app-screen-3.png"
             class="step-img"
             alt="iPhone app delivery screen"
           />
          </div>
        </div>
       </section> 
       <hr>

 <div class="foot">
 <div class="footim">
   <img src="img/26.png" alt="" class="h-5">
   </div>
   <div class="flg d-flex">
     <img src="img/logo.png" alt=""  >
     <h1>Feel Hunger! Order Your <span>Like Food.</span></h1>
    
    
     <div class="fg">
     <img src="img/22.png" alt="">
     </div>
     </div>
  </div>
 </div>
<h1 class="text-center fh"> Copywrite ©2022 By <span>Foodora</span></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>