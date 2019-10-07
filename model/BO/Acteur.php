<?php
class Acteur {
    private $_idActeur;
    private $_nom;
    private $_prenom;

function __construct($acteur)
{
    //$this->set_idActeur($acteur['idActeur']);
    $this->set_nom($acteur['nom']);
    $this->set_prenom($acteur['prenom']);

}


    
     
    //public function get_idActeur()
   // {
     //   return $this->_idActeur;
    //}


    /**
     * Set the value of _idActeur
     *
     * @return  self
     */ 
    //public function set_idActeur($_idActeur)
    //{
      //  $this->_idActeur = $_idActeur;

        //return $this;
    //}

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

    }

    public function __toString(){
        return $this->_nom . ' ' . $this->_prenom ;
    }
}

?>