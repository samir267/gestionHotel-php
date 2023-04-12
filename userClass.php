<?php
require 'connection.php';
class User {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $telephone;

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


    
    public function insert($conn){
        $st=$conn->prepare("insert into user values(default,?,?,?,?,?,?,?)");
        $st->execute(array($this->nom,$this->prenom,$this->email,$this->password,$this->telephone));
        
       
    
       }


    public function selection_id($conn,$id){
        //requete parametrée
        $st=$conn->prepare("select * from user where id=?");
        $st->execute(array($id));
        $row=$st->fetch();
        $this->nom=$row['nom'];

}
}
   


?>