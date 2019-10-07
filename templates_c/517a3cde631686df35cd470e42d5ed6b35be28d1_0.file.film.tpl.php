<?php
/* Smarty version 3.1.30, created on 2019-08-29 07:07:16
  from "C:\wamp64\www\film_MVC\view\film.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6779a4ae9f12_26121614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '517a3cde631686df35cd470e42d5ed6b35be28d1' => 
    array (
      0 => 'C:\\wamp64\\www\\film_MVC\\view\\film.tpl',
      1 => 1567062433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6779a4ae9f12_26121614 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid" style="background-color: silver;" name="search">
  <p>
    <h2>Rechercher un film</h2>
  </p>
  <p>Saisissez un mot-clé<p>
      <form method="post" action="">
        <p><input class="form-control form-control-sm" type="text" placeholder=""> <input type="submit" value="Envoyer">
        </p>
      </form>
</div>
<p>
  <h1>Voici la liste de tous nos films</h1>
</p>
<div class="card-group">
  <div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allfilm']->value, 'film', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['film']->value) {
?>
    <div class="card col-4">
      <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['film']->value->get_affiche();?>
" class="img-fluid" alt="Responsive image"
        alt="Card image cap">
      <div class="card-body">
        <p><strong><?php echo $_smarty_tpl->tpl_vars['film']->value->get_titre();?>
</strong> (<?php echo $_smarty_tpl->tpl_vars['film']->value->get_annee();?>
)</p>
        <p>Réalisé par : <?php echo $_smarty_tpl->tpl_vars['film']->value->get_realisateur();?>
</p>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['film']->value->get_role(), 'role', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['role']->value) {
?>
        Acteurs  : 
        <p><?php echo $_smarty_tpl->tpl_vars['role']->value->get_acteur()->get_prenom();?>
 <?php echo $_smarty_tpl->tpl_vars['role']->value->get_acteur()->get_nom();?>
 (<?php echo $_smarty_tpl->tpl_vars['role']->value->get_personnage();?>
)</p>
      <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

      </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div><?php }
}
