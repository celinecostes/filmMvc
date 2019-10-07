<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Offres
 *
 * @author 1703728
 */
class FilmDAO extends Dao
{

    //Récupérer tous les films + acteur + role
    public function getAll($recherche)
    {
        //On définit la bdd pour la fonction
        
        $query = $this->_bdd->prepare("SELECT films.idFilm, titre, realisateur, affiche, annee, acteurs.nom, acteurs.prenom, role.personnage FROM films LEFT JOIN role ON films.idFilm = role.idFilm LEFT JOIN acteurs ON role.idActeur = acteurs.idActeur ORDER BY titre");
        $query->execute();
      //  var_dump($query);
        $film = array();
       // var_dump($film);
        $id = 0 ;
        while ($data = $query->fetch()) {
            if($data['idFilm'] != $id) {
                $film[$data['idFilm']] = new Film($data); 
                $id = $data['idFilm'];
            }
            $acteur = new Acteur($data);
            $role = new Role ($data, $acteur);
            $film[$data['idFilm']] ->addActeur($acteur);
            $film[$data['idFilm']]->addRole($role);
           // var_dump($film);
        }
      //  var_dump($film);
        return ($film);
    }

    //Ajouter une film
    public function add($data)
    {
        //var_dump($data->get_titre());
        $valeur = ['titre' => $data->get_titre(), 'realisateur' => $data->get_realisateur(), 'affiche' => $data->get_affiche(), 'annee' => $data->get_annee()];
        //var_dump($valeur);
        $requete = 'INSERT INTO films (titre, realisateur, affiche, annee) VALUES (:titre , :realisateur , :affiche , :annee)';
        $insert = $this->_bdd->prepare($requete);
        $response = $insert->execute($valeur);
        //var_dump($response);
        return $response;
    }


    public function getOne($id){
        
    }
    

}
