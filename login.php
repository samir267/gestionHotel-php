<?php
$pdo = include 'connection.php';


if(isset($_POST['email']) && isset($_POST['password'])){
    $pswd=$_POST['password'];
    
  
    $sql = "SELECT password FROM user WHERE password = '$pswd'";
    $result = $conn->query($sql);
    
  
    
    if ($result->rowCount() > 0) {
    session_start ();
        header ('location: home.php');
  
    }
    else {
      header ('location: signin.php');
      
  
  }
}
?>