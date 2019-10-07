<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//On appelle la fonction getAll()
$filmDAO = new  FilmDAO();
/* @var $alloffers type */
$allfilm = $filmDAO->getAll("");
//On transmets les variables à Smarty

$smarty->assign('allfilm', $allfilm);

$smarty->display(_VIEW_ . 'film.tpl');
