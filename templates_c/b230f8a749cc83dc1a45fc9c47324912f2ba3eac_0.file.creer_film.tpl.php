<?php
/* Smarty version 3.1.30, created on 2019-08-27 07:07:28
  from "C:\wamp64\www\film_MVC\view\creer_film.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d64d6b01c2ff3_75670797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b230f8a749cc83dc1a45fc9c47324912f2ba3eac' => 
    array (
      0 => 'C:\\wamp64\\www\\film_MVC\\view\\creer_film.tpl',
      1 => 1566889646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d64d6b01c2ff3_75670797 (Smarty_Internal_Template $_smarty_tpl) {
?>
 
 <div id="formulaire">
 <p style ="background-color: darkgrey;">Formulaire d'enregistrement d'un nouveau film</p>

 <p>
 <form action="creer_film" method="POST">
          <div class="form-group">
          <label for="formGroup">Titre du film : </label>
          <input type="text"  name = "titre">
          </div>
          <div class="form-group">
          <label for="formGroup">réalisateur : </label>
          <input type="text" name="realisateur">
          </div>
          <div class="form-group">
          <label for="formGroup">affiche : </label>
          <input type="text" name="affiche">
          </div>
          <div class="form-group">
          <label for="formGroup">année : </label>
          <input type="text" name="annee">
          </div>
          <button type="submit" >Valider</button>
     </form>
     </p>
</div>
<?php }
}
