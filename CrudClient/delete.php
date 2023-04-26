
<?php
  include '../User.php';

  $user=new User();
  $id=$_POST["id"];
  $user->delete($conn,$id);
  header("Location: ../dashboard.php");

  
      




?>