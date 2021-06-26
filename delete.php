<?php

include("inc/includes.inc.php");
//include("smarty/libs/Smarty.class.php");

session_start();
$db= new Mysql_inc();
$id=$_SESSION['id'];
$result=$db->users->deleteById($id);
header("location: index.php");
session_destroy();
//$smarty->display("delete.tpl");

?>
