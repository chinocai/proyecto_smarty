<?php
/* Smarty version 3.1.39, created on 2021-06-02 00:41:22
  from 'C:\xampp\htdocs\Actividades Avanzado\13-Smarty Sistema\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b6b792403808_31980293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edf1228bea8833506efe3a6214dea695c0e8afa5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Actividades Avanzado\\13-Smarty Sistema\\templates\\menu.tpl',
      1 => 1622586862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b6b792403808_31980293 (Smarty_Internal_Template $_smarty_tpl) {
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

</header>
<?php }
}
