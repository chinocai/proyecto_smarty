<?php
/* Smarty version 3.1.39, created on 2021-05-30 00:35:52
  from 'C:\xampp\htdocs\GitHub\Clase\13-Smarty Sistema\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b2c1c8250138_42000822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72cb2564f3d2ad90a959253e36b2aca51f353a02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\Clase\\13-Smarty Sistema\\templates\\main.tpl',
      1 => 1622079741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b2c1c8250138_42000822 (Smarty_Internal_Template $_smarty_tpl) {
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
