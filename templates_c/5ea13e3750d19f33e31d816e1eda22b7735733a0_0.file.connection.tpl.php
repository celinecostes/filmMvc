<?php
/* Smarty version 3.1.30, created on 2019-08-30 09:33:36
  from "C:\wamp64\www\film_MVC\view\connection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d68ed702459f7_30987010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ea13e3750d19f33e31d816e1eda22b7735733a0' => 
    array (
      0 => 'C:\\wamp64\\www\\film_MVC\\view\\connection.tpl',
      1 => 1567157302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68ed702459f7_30987010 (Smarty_Internal_Template $_smarty_tpl) {
?>

<br>

<form action="connection" method="POST">
    <div>
        <label for="email">e-mail :</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">password :</label>
        <input type="password" id="password" name="password">
    <br><button type="submit" >Valider</button>
   
   <p><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</p>
   <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
   <?php echo $_smarty_tpl->tpl_vars['user']->value->get_email();?>

   <?php }?>

   
    </div>
    
    <?php }
}
