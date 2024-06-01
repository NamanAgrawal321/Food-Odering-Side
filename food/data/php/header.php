<?php
  function createHeader($icon, $heading, $sub_heading) {
    echo '
    <section class="row content-header">
      <div class="header-title col-md-11">
        <p class="h4 pt-2"><i class="fa fa-'.$icon.'"></i>&emsp;'.$heading.'</p>
        &emsp;&emsp;&emsp;<small class="font-weight-bold h6">'.$sub_heading.'</small>
      </div>
      <div class="col-md-1 user_options">
        <button class="col col-md-1 m-3" onclick="showOptions();">
          <i class="fa fa-gear"></i>
        </button>
        <div id="mark"><i class="fa fa-play fa-rotate-270"></i></div>
        <ul id="options" class="options list-unstyled" style="display: none;">
          <li>
            <a href="my_profile.php"><i class="fa fa-user"></i><span>My Profile</span></a>
          </li>
          <li>
            <a href="change_password.php"><i class="fa fa-edit"></i><span>Change Password</span></a>
          </li>
          <li>
            <a href="logout.php"><i class="fa fa-key"></i><span>Logout</span></a>
          </li>
        </ul>
      </div>
    </section>
    <hr style="border-top: 2px solid #41c02c;">
    ';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
   .log{
      float: right;
    margin-top: 9px;
    color: white;
    background: red;
    border: 2px solid brown;
    border-radius: 13px;
    padding: 7px 22px;
    text-decoration:none;
    }
.log:hover{
      background-color:green;
      text-decoration:none;
      color: white;
    }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<a href="logout.php" class="log">Logout</a>
</body>
</html>
