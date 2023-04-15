<?php
        include 'userClass.php';

        $user=new User(null,"","","","","","");
        if(isset($_POST['add'])){
        $user->nom=$_POST['nom'];
        $user->prenom=$_POST['prenom'];
        $user->email=$_POST['email'];
        $user->password=$_POST['password'];
        $user->telephone=$_POST['tel'];
        $user->role=0;
        $user->insert($conn);
       // $_POST = array();
        
        header("Location: dashboard.php");
        //$res=$user->__selection($conn);
        }
        
        
var_dump($_POST)
?>