<?php
require 'connection.php';
class User {
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $telephone;

    public function __construct($id, $nom, $prenom, $email, $password, $telephone) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->telephone = $telephone;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function __selection($conn){
        $sql = $conn->prepare("SELECT * FROM user");
        $sql->execute();
        return $sql;

    }


    
    public function insert($conn) {
        $st = $conn->prepare("INSERT INTO user (nom, prenom, email, password, telephone) VALUES (?, ?, ?, ?, ?)");
        $st->execute(array($this->nom, $this->prenom, $this->email, $this->password, $this->telephone));
    }

    public function selection_id($conn,$id){
        //requete parametrée
        $st=$conn->prepare("select * from user where id=?");
        $st->execute(array($id));
        $row=$st->fetch();
        $this->nom=$row['nom'];
        $this->prenom=$row['prenom'];
        $this->email=$row['email'];
        $this->password=$row['password'];
        $this->telephone=$row['telephone'];
}



public function update ($conn,$id){
    $st=$conn->prepare("update user set nom=?,prenom=?,email=?,password=?,telephone=? where id=$id");
    $st->execute(array($this->nom,$this->prenom,$this->email,$this->password,$this->telephone));
}
   
}


?>