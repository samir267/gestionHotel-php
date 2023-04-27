
<?php
  include '../User.php';

  $user=new User();
  $id=$_POST["id"];
  $user->delete($conn,134);
  header("Location: List.php");

  
      




?>