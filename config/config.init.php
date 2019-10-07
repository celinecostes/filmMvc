<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require('config/' . 'defines.inc.php');
require('Autoload.php');
require(_PATH_ . 'tools/smarty/Smarty.class.php');

// Chargement du coeur
/*
$files = scandir(_MODEL_);
foreach ($files as $filename)
{
    if (is_file(_MODEL_.$filename))
        require_once(_MODEL_.$filename);
}
  */


Autoloader::register();

// Initialisation Smarty
$smarty = new Smarty();
