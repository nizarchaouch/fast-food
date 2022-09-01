<!DOCTYPE html>
<?php         
$servername = "127.0.0.1";       
$username = "root";         
$password = "";              
$dbname = "client";           
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);   
}
?> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <title>Fast Foo Restaurant</title>
    </head>
<body>
    <div class="nav-header">
        <div id="banner">
        <div id="logo"><a href="index.html"><p>Chef Online</p></a></div>
        <div id="nav">
            <ul>
                <il><a href="index.html">HOME</a></il>
                <il><a href="menu.html">MENU</a></il>
                <il><a href="#">ABOUT</a></il>
                <il><a href="book.html">BOOK TABLE</a></il>
            </ul>
        </div>
        <div id="icon">
            <a href="sign.html" title="SIGN "><i class="material-icons" style="color: aliceblue; ">&#xe853;</i></a>
        </div>
        <div id="icon_buy">
            <a href="login.html" title="SETTING"><i style="font-size:24px; color: aliceblue;" class="fa" >&#xf013;</i></a>       
         </div>
        <div id="box">
            <button class="btm">Order Online</button>
        </div>
        </div>
    </div>

    <!-----------------------------------affiche---------------------------------->
    <form method="POST" >
       <center> <fieldset> 
            <legend style="    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: 60px;" >RESERVATION TABLE</legend>
            <label>PHONE NUMBER:</label><input type="number" name="tel" id="tel" placeholder="Phone Number" maxlength="8">  
         <input type="submit" name="afficher" value="Afficher">
         </fieldset>
        </center>
    </form>  
        <?php
           if(isset($_POST['afficher'])){
            $tel=$_POST['tel'];
           $sql ="SELECT * FROM `book` WHERE tel LIKE '$tel';";              
           $res = mysqli_query($conn,$sql); 
        }
            $conn->close();     
            ?>     <br> <br>
     <fieldset>
     <center>
      <table width="600px" >
        <tr bgcolor="#C0C0C0" >
            <td>Name</td>
            <td>Last Name</td>
            <td>Phone Number</td>
            <td>Persons</td>
            <td>Date</td>
        </tr>
        <?php if(isset($_POST['afficher'])){
        while($ligne= mysqli_fetch_array($res)) {?> 
        <tr>        
        <td> <?php echo $ligne['name']; ?> </td>
        <td> <?php echo $ligne['lastname']; ?> </td>
        <td> <?php echo $ligne['tel']; ?> </td>
        <td> <?php echo $ligne['person']; ?> </td>
        <td> <?php echo $ligne['date']; ?> </td>
        </tr>
        <?php } }?>
      </table>
     </center>
     </fieldset> 
</body>
</html>