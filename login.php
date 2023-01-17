<?php
$servername = "127.0.0.1";      
$username = "root";          
$password = "";              
$dbname = "client";          
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);  
}

if (isset($_POST['login'])){
  $mail = stripslashes($_REQUEST['mail']);
  $mail = mysqli_real_escape_string($conn, $mail);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `sign` WHERE mail='$mail' and password='$password'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $rows=mysqli_num_rows($result);
  if($rows==1){
     header("Location: count.php");
  }else{
     header("Location: login.html");
  }
}
?>