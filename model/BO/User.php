<?php
class User{
    private $_idUser;
    private $_email;
    private $_password;


    function __construct($id=null, $email, $password=null)
    {
        $this->set_idUser($id);
        $this->set_email($email);
        $this->set_password($password);
    }

    /**
     * Get the value of _idUser
     */ 
    public function get_idUser()
    {
        return $this->_idUser;
    }

    /**
     * Set the value of _idUser
     *
     * @return  self
     */ 
    public function set_idUser($_idUser)
    {
        $this->_idUser = $_idUser;

    }

    /**
     * Get the value of _email
     */ 
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */ 
    public function set_email($_email)
    {
        $this->_email = $_email;

    }

    /**
     * Get the value of _password
     */ 
    public function get_password()
    {
        return $this->_password;
    }

    /**
     * Set the value of _password
     *
     * @return  self
     */ 
    public function set_password($_password)
    {
        $this->_password = $_password;


    }
}
?>