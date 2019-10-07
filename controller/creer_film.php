<?php
if (!isset($_SESSION['user'])){
    header("Location: connection");
}


if (isset($_POST['titre']) && isset($_POST['realisateur']) && isset($_POST['affiche']) && isset($_POST['annee']))
{
    $filmDAO = new filmDAO();

    $film = new Film (array('id '=> null, 'titre'=>$_POST['titre'] , 'realisateur'=>$_POST['realisateur'] , 'affiche'=>$_POST['affiche'] , 'annee'=>$_POST['annee'] ));


    $status = $filmDAO->add($film);

    //transmission à smarty

    if ($status) {
        $smarty->assign('status', "Ajout OK");
        $smarty->assign('film', $film);
   
    } else {
        $smarty->assign('status', "Erreur Ajout");

    }
   
}
$smarty->display(_VIEW_ . 'creer_film.tpl');
