<?php
/* Smarty version 3.1.30, created on 2019-08-30 09:51:12
  from "C:\wamp64\www\film_MVC\view\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d68f1905e8975_76125591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9314487d6b2724ed7f565e5e471e74d20fad51ad' => 
    array (
      0 => 'C:\\wamp64\\www\\film_MVC\\view\\header.tpl',
      1 => 1567158670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68f1905e8975_76125591 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <title>allo film</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                crossorigin="anonymous">
        <link rel="stylesheet" href="base.css" />
        <link rel="shortcut icon" href="/web/images/favicon.ico" />
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!-- On importe jQuery -->
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<body>
        <div>
                <nav class="navbar navbar-laght bg-dark" name="nav">
                        <a>
                                <h1 span style="color : white"><strong>Mediathèque</h1>
                        </a>
                        <a class="navbar-brand" href="film">Film</a>
                        <a class="navbar-brand" href="creer_film">Ajouter film</a>
                        <?php if (isset($_SESSION['user'])) {?>
                        <a class="navbar-brand" href="deconnection">Déconnexion</a>
                        <?php } else { ?>
                         <a class="navbar-brand" href="connection">Connexion</a>
                         <?php }?>
                        <a class="navbar-brand" href="inscription">Inscription</a>
                </nav>

        </div>

        <body><?php }
}
