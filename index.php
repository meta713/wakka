<?php

require_once("./vendor/autoload.php");
//require_once("./vendor/smarty/smarty/libs/Smarty.class.php");

$smarty = new Smarty;

$smarty->display('./htdocs/index.html');

?>
