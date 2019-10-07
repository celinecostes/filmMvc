<?php
$status = "";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $userDAO = new UserDAO();

    $status = $userDAO->connection(new User(null, $_POST ['email'], $_POST['password']));

//var_dump($status);

    //On transmets les variables à Smarty
    if (!$status) {
        $status =  "Erreur Connexion";
    } else {
        $status =  "Vous êtes bien connecté";
       $_SESSION['user'] = $_POST['email'];
    }
}
$smarty->assign('status', $status);

    $smarty->display(_VIEW_ . 'connection.tpl');
?>