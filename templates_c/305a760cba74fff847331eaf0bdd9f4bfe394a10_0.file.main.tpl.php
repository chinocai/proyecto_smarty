<?php
/* Smarty version 3.1.39, created on 2021-06-12 01:22:36
  from 'C:\xampp\htdocs\SMARTYPHP\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c3f03c3deb06_60479461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '305a760cba74fff847331eaf0bdd9f4bfe394a10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SMARTYPHP\\templates\\main.tpl',
      1 => 1623453187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c3f03c3deb06_60479461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="middlePanel">
    <aside id="menu">
        <ul>
            <li id="item"><a href="articulos.php">Artículos</a></li>
            <li id="item"><a href="#">Categorías</a>

                <ul id="desplegable">
                  <li id="item"><a href="#">TV</a></li>
                  <li id="item"><a href="#">Tablets</a></li>
                  <li id="item"><a href="#">Celulares</a></li>
                  <li id="item"><a href="#">Cables</a></li>
                  <li id="item"><a href="#">Herramientas</a></li>
                </ul>

            </li>

            <li id="item"><a href="#">Mensajes</a></li>
            <li id="item"><a href="#">Usuarios</a></li>
        </ul>
    </aside>

    <div id="mainPanel">
      <?php echo $_smarty_tpl->tpl_vars['headerMessage']->value;?>

    </div>

</section>
<?php }
}
