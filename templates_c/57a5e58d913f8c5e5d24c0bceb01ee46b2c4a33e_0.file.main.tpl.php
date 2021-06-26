<?php
/* Smarty version 3.1.39, created on 2021-05-29 03:36:24
  from 'C:\xampp\htdocs\GitHub\UTN_PHPAvanzado_01_2021-master\Clase\13-Smarty Sistema\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b19a988212d7_45764715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a5e58d913f8c5e5d24c0bceb01ee46b2c4a33e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\UTN_PHPAvanzado_01_2021-master\\Clase\\13-Smarty Sistema\\templates\\main.tpl',
      1 => 1622079741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b19a988212d7_45764715 (Smarty_Internal_Template $_smarty_tpl) {
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
