<!doctype html>
<html lang="en">
<head>
</head>
<body>
 <form action='dj.php' method="post">
 Name:<input type="name" name="name"><br><br>
 Password:<input type="Password" name="pas"><br><br>
 Submit:<input type="Submit">
 </form>
</body>
<?php
$name = $_POST["name"];
$pas = $_POST["pas"];
$servername = "localhost";
$username = "root";
$password = "";
$database ="test";
$conn = new mysqli($servername, $username, $password);
$table = "create table myname (
 Name varchar(255),
 pass varchar(255)
)";
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
else{
 echo "Connected successfully";}
$insert = "insert into myworld.myname values('$name','$pas')";
mysqli_query($conn, $insert);
?>
</html> 
