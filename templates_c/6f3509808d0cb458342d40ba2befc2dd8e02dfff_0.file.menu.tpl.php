<?php
/* Smarty version 3.1.39, created on 2021-05-27 03:23:48
  from 'D:\www\UTN_PHPAvanzado_01_2021\Clase\13-Smarty Sistema\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aef4a41b1ee3_05901558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f3509808d0cb458342d40ba2befc2dd8e02dfff' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_01_2021\\Clase\\13-Smarty Sistema\\templates\\menu.tpl',
      1 => 1622076609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aef4a41b1ee3_05901558 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="border-bottom" id="mainMenu">
<div class="menuSep"></div>
<div class="menuPerfil">
    <div id="nameAndLastName"></div>   
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img class="imgIco" src="templates/img/ico/user-04.png">
                <span class="usuarioLoged"><?php echo $_smarty_tpl->tpl_vars['usuarioLoged']->value;?>
</span>
            </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                <?php if ($_smarty_tpl->tpl_vars['usuarioLoged']->value == '') {?>
                    <li><a class="dropdown-item" href="index.php?action=login">Login</a></li>
                <?php }?>
                <li><a class="dropdown-item" href="index.php?action=register">Registrar Usuario</a></li>
                <?php if ($_smarty_tpl->tpl_vars['usuarioLoged']->value != '') {?>
                    <li><a class="dropdown-item" href="index.php?action=modify">Modificar Usuario</a></li>                
                    <li><a class="dropdown-item" href="index.php?action=borrar">Borrar Usuario</a></li>
                <?php }?>
                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>                                
            </ul>   
        </div>
</div> 
</header><?php }
}
