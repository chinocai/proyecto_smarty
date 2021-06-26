<?php
	session_start();

	include("inc/includes.inc.php");
	include("smarty/libs/Smarty.class.php");

	$db=new Mysql_inc();

	$titulo="MercadoWeb";

	$showMain=false;
	$headerMessage="";

		//Sesión
		if(isset($_SESSION["id"]) AND $_SESSION["id"]!=""){
			$usuarioLoged=$_SESSION["usuario"];
		}
		else{
			$usuarioLoged="";
		}
		//Sesión

	$smarty=new Smarty;
	$smarty->assign('titulo',$titulo);
	$smarty->assign('headerMessage',$headerMessage);
	$smarty->assign("usuarioLoged",$usuarioLoged);
	$smarty->display('header.tpl');

	$showMain=false;

		//Botonera Menú
			if (isset($_GET['action']) && $_GET["action"]=="register"){
				include("register.php");
			}
			elseif (isset($_GET['action']) && $_GET["action"]=="login"){
				include("login.php");
			}
			elseif (isset($_GET['action']) && $_GET["action"]=="modify"){
				include("mod_profile.php");
			}
			elseif (isset($_GET['action']) && $_GET["action"]=="delete"){
				include("delete.php");
			}
			elseif (isset($_GET['action']) && $_GET["action"]=="salir"){
				session_destroy();
				$smarty->assign("usuarioLoged","");
			 	$showMain=true;
			}
			if(!isset($_GET["action"]) || $showMain){
				$smarty->display('menu.tpl');
				$smarty->display('main.tpl');
				$showMain=false;
			}
		//Fin Botonera Menú

	$smarty->display('footer.tpl');

?>
