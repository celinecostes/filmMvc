<?php
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password1'])) {
    if (isset($_POST['password']) == isset($_POST['password1'])) {
        $userDAO = new UserDAO;

        var_dump($_POST['password']);
        $user = new User(null, $_POST['email'], password_hash($_POST['password'], PASSWORD_BCRYPT));
        //var_dump($userDAO);
        $status = $userDAO->addUser($user);
        //var_dump($status);


        if ($status) {
            $smarty->assign('status', "Ajout OK");
            $smarty->assign('user', $user);
        } else {
            $smarty->assign('status', "Erreur Ajout");
        }
    }
}
$smarty->display(_VIEW_ . 'inscription.tpl');
