<?php
        include '../User.php';

        $user=new User(null,"","","","","","");
        if(isset($_POST['add'])){
        $user->nom=$_POST['nom'];
        $user->prenom=$_POST['prenom'];
        $user->email=$_POST['email'];
        $user->password=$_POST['password'];
        $user->telephone=$_POST['tel'];
        $user->role=1;
        $user->insert($conn);
        
        header("Location: ../dashboard.php");
        }
        
        
var_dump($_POST)
?>