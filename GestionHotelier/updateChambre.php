<?php
require 'chambre.php';
require '../connection.php';

$chambre=new Chambre(null,"","","","");

    $id=$_POST['id'] ;
    $chambre->update($conn,$id);
    header("Location: dashboard.php");



?>