<?php
/* Smarty version 3.1.39, created on 2021-05-27 03:23:48
  from 'D:\www\UTN_PHPAvanzado_01_2021\Clase\13-Smarty Sistema\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aef4a4232995_61239850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7e3a5add8404c0a1e77cf4a3d9442732516735c' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_01_2021\\Clase\\13-Smarty Sistema\\templates\\main.tpl',
      1 => 1622076657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aef4a4232995_61239850 (Smarty_Internal_Template $_smarty_tpl) {
?>
     
            <section class="middlePanel">
                <aside  class="border-end" id="leftMenu">
                    <ul>
                        <li>Actividades</li>
                        <li>Cursos</li>
                        <li>Tareas</li>
                        <li>Recursos</li>                        
                        <li><a href="javascript:createChat()">Chat</a></li>
                    </ul>
                </aside>
                <div id="mainPanel">
                    <?php echo $_smarty_tpl->tpl_vars['headerMessage']->value;?>

                </div>
            </section>
<?php }
}
