<?php
$servername = "127.0.0.1";      
$username = "root";          
$password = "";              
$dbname = "client";          
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);  
}
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$mail=$_POST['mail'];
$date=$_POST['date'];
$password=$_POST['password'];
if(isset($_POST['send'])){
    $sql='INSERT INTO sign VALUES("","'.$name.'","'.$lastname.'","'.$mail.'","'.$date.'","'.$password.'")';
if($conn->query($sql)===TRUE){
    echo"Nouvel enregistrement créé avec succès";
}else{
    echo"Erreur:".$sql."<br>".$conn->error;
}
$conn->close();
}

?>