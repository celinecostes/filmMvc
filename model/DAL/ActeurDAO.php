<?php

class ActeurDAO extends DAO
{

    public function getAll()
    {
        $query = $this->_bdd->prepare('SELECT nom, prenom FROM ACTEURS ');
        $query->execute();
        $acteurs = array();

        while ($data = $query->fetch()){
          $acteurs[]= new acteurs ($data);
        }
        return ($acteurs);
    }
public function getOne($idActeur){
        $query = $this->bdd->prepare("SELECT * FROM acteurs where acteur.idActeur = :idActeur ") ->fetch();
        $query -> execute(array(':idActeur' => $idActeur));
        $data = $query->fetch();
        $Acteur = new Acteurs($data);
        return ($Acteur);
    }
}
