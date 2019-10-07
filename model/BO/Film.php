<?php
class Film {
    private $_idFilm;
    private $_titre;
    private $_realisateur;
    private $_affiche;
    private $_annee;
    private $_acteur = array() ;
    private $_role = array();



    function __construct($film)
    {
        $this->set_idFilm($film['idFilm']);
        $this->set_titre($film['titre']);
        $this->set_realisateur($film['realisateur']);
        $this->set_affiche($film['affiche']);
        $this->set_annee($film['annee']);
    }

    function addActeur($acteur){
        $this->_acteur[] = $acteur;
    }

    function addRole($role)
    {
        $this->_role[] = $role;
    }


   

    /**
     * Get the value of _idFilm
     */ 
    public function get_idFilm()
    {
        return $this->_idFilm;
    }

    /**
     * Set the value of _idFilm
     *
     * @return  self
     */ 
    public function set_idFilm($_idFilm)
    {
        $this->_idFilm = $_idFilm;

    }

    /**
     * Get the value of _titre
     */ 
    public function get_titre()
    {
        return $this->_titre;
    }

    /**
     * Set the value of _titre
     *
     * @return  self
     */ 
    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

    }

    /**
     * Get the value of _realisateur
     */ 
    public function get_realisateur()
    {
        return $this->_realisateur;
    }

    /**
     * Set the value of _realisateur
     *
     * @return  self
     */ 
    public function set_realisateur($_realisateur)
    {
        $this->_realisateur = $_realisateur;

    }

    /**
     * Get the value of _affiche
     */ 
    public function get_affiche()
    {
        return $this->_affiche;
    }

    /**
     * Set the value of _affiche
     *
     * @return  self
     */ 
    public function set_affiche($_affiche)
    {
        $this->_affiche = $_affiche;

    }

    /**
     * Get the value of _annee
     */ 
    public function get_annee()
    {
        return $this->_annee;
    }

    /**
     * Set the value of _annee
     *
     * @return  self
     */ 
    public function set_annee($_annee)
    {
        $this->_annee = $_annee;

    }

public function get_role(){
    return $this->_role;
}

}

?>