<?php
class RoleDAO extends Dao {

    public function getAll(){
        $query = $this->_bdd->prepare('SELECT personnage FROM role ');
        $query->execute();
        $role = array();

        while ($data = $query->fetch()){
            $role[] = new role ($data);
        }
        return ($role);
    }

    public function getOne($idRole){
        $query = $this->bdd->prepare("SELECT * FROM role WHERE role.idRole = :idRole") ->fetch();
        $query = execute(array(':idRole' =>$idRole));
        $data = $query->fetch();
        $role = new Role($data);
        return ($role);
    }
}