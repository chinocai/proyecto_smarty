<?php
/* Smarty version 3.1.39, created on 2021-05-29 03:36:36
  from 'C:\xampp\htdocs\GitHub\UTN_PHPAvanzado_01_2021-master\Clase\13-Smarty Sistema\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b19aa4b08744_62691103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9af21ebd55799548912b0e807a5ba2eb17fd205' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GitHub\\UTN_PHPAvanzado_01_2021-master\\Clase\\13-Smarty Sistema\\templates\\login.tpl',
      1 => 1622079741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b19aa4b08744_62691103 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="register_content">
<?php echo $_smarty_tpl->tpl_vars['messageError']->value;?>
        
        <div class="bg-light p-4 rounded">            
            <div class="row justify-content-center align-items-center">                    

                    <form id="formulario" method="POST">
                        <div class="mb-3">
                            <span class="input-group-text" id="span_usuario">Ususario</span>
                            <input type="text" 
                                   class="form-control" 
                                   name="usuario" 
                                   id="usuario" 
                                   aria-describedby="loginDeUsuario"
                                    
                                    pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                                    
                                   required />
                        </div>

                        <div class="mb-3">
                        <span class="input-group-text" id="span_password">Password</span>
                            <input type="password" 
                            class="form-control" 
                            name="password" 
                            id="password" 
                            aria-describedby="loginDeUsuario" 
                             
                                pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                             
                            required />
                        </div>
                    
                        <div class="col-auto">
                            <button type="Submit" id="bt_login" class="btn btn-outline-primary">Acceder</button>                    
                            <button type="button" class="btn btn-outline-success">
                            <a href="index.php">Regresar</a></button>
                        </div>
                    </form>
                
            </div>
        </div>
</section>
<?php }
}
