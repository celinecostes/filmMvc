<?php
/* Smarty version 3.1.30, created on 2019-08-29 14:19:21
  from "C:\wamp64\www\film_MVC\view\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d67dee9e12d34_33880582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61959578af31e8034ec40ecb63fa015617e49a7b' => 
    array (
      0 => 'C:\\wamp64\\www\\film_MVC\\view\\inscription.tpl',
      1 => 1567088358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d67dee9e12d34_33880582 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    <form action="inscription" method="POST">
        <div class="form-group">
            <label for="InputEmail1">Adresse mail</label>
            <input type="email" class="form-control"  name="email" id="email" placeholder="E-mail">

        </div>
        <div class="form-group">
            <label for="InputPassword">Mot de passe : </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
        </div>
        <div class="form-group">
            <label for="=InputPassword1">Confirmer votre mot de passe : </label>
            <input type="password" class="form-control" name="password1" id="=password1" placeholder="Confirmation mot de passe">
            <br>
            <p><button type="submit">S'inscrire</button></p>
        </div>
</div><?php }
}
