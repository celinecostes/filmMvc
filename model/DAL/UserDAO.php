<?php
class UserDAO extends Dao {

//ajouter un membre
public function addUser($data) {
    $valeur = ['email'=> $data->get_email(), 'password'=>$data->get_password()];
var_dump($data);
    $requete = 'INSERT INTO user (email, password) VALUES (:email, :password)';
    $insert = $this->_bdd->prepare($requete);
    $response=$insert->execute($valeur);

    return $response;
}


//connection du membre
    public function connection($user)
    {
        //var_dump($user);
        $query = $this->_bdd->prepare('SELECT email, password FROM user WHERE user.email = :user');
        $query->execute(array(':user' => $user->get_email()));
        $data = $query->fetch();
        //var_dump($data);
        if (password_verify($user->get_password(),$data['password'])) {
            $user = new User(null, $data['email'], null);
           // var_dump($data);
            return $user;
        } else {
            return false;
        }
    }

}












