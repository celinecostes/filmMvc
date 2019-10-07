<?php
unset($_SESSION['user']);

$smarty->display(_VIEW_ . 'deconnection.tpl');