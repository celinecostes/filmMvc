<?php
class Role{
    private $_idRole;
    private $_personnage;
    private $_acteur;
   



    function __construct($role,$acteur)
    {
        $this->set_personnage($role['personnage']);
        $this->set_acteur($acteur);
       
    }

   

    
    

    /**
     * Get the value of _personnage
     */ 
    public function get_personnage()
    {
        return $this->_personnage;
    }

    /**
     * Set the value of _personnage
     *
     * @return  self
     */ 
    public function set_personnage($_personnage)
    {
        $this->_personnage = $_personnage;

    }

    /**
     * Get the value of _idRole
     */ 
    public function get_idRole()
    {
        return $this->_idRole;
    }

    /**
     * Set the value of _idRole
     *
     * @return  self
     */ 
    public function set_idRole($_idRole)
    {
        $this->_idRole = $_idRole;

    }

        /**
         * Set the value of acteur
         *
         * @return  self
         */ 
        public function set_acteur($acteur)
        {
                $this->_acteur = $acteur;

        }

        /**
         * Get the value of acteur
         */ 
        public function get_acteur()
        {
                return $this->_acteur;
        }
}

?>