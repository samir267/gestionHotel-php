<?php
require '../connection.php';

class Chambre {
  public $id;
  public $prix;
  public $categorie;
  public $etat;
  public $nb_personne;

  public function __construct($id, $prix, $categorie, $etat, $nb_personne) {
    $this->id = $id;
    $this->prix = $prix;
    $this->categorie = $categorie;
    $this->etat = $etat;
    $this->nb_personne = $nb_personne;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getPrix() {
    return $this->prix;
  }

  public function setPrix($prix) {
    $this->prix = $prix;
  }

  public function getCategorie() {
    return $this->categorie;
  }

  public function setCategorie($categorie) {
    $this->categorie = $categorie;
  }

  public function getEtat() {
    return $this->etat;
  }

  public function setEtat($etat) {
    $this->etat = $etat;
  }

  public function getNbPersonne() {
    return $this->nb_personne;
  }



  public function __selection($conn){
    $sql = $conn->prepare("SELECT * FROM chambre ");
    $sql->execute();
    return $sql;
}
public function __selectionbyid($conn,$id){
  $sql = $conn->prepare("SELECT * FROM chambre where id=$id");
  $sql->execute();
  return $sql;

}


public function update ($conn,$id){
  $st=$conn->prepare("update chambre set etat=0 where id=$id");
  $st->execute(array());
}

}


?>