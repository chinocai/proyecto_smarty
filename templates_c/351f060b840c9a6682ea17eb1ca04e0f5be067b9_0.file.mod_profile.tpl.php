<?php
/* Smarty version 3.1.39, created on 2021-06-12 02:28:28
  from 'C:\xampp\htdocs\SMARTYPHP2\templates\mod_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c3ffac036ca7_20597496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '351f060b840c9a6682ea17eb1ca04e0f5be067b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SMARTYPHP2\\templates\\mod_profile.tpl',
      1 => 1622483552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c3ffac036ca7_20597496 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <section class="register_content">
    <div class="bg-light p-4 rounded" id="register_idDivForm">
      <header class="shadow-sm p-3 mb-3 rounded" id="register_mainMenu">
        <h2><?php echo $_smarty_tpl->tpl_vars['title_regOmod']->value;?>
</h2>
      </header>
        
        <section class="mainContent">
          
          <form id="formulario" name="formulario" class="row g-3" method="POST">
            <?php echo $_smarty_tpl->tpl_vars['messageError']->value['usuario'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_usuario">Usuario</span>
              <input type="text" class="form-control" placeholder="usuario"
                aria-label="usuario"
                name="usuario"
                id="usuario"
                value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
"
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                
              />
            </div>
            <?php echo $_smarty_tpl->tpl_vars['messageError']->value['nombre'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_nombre">Nombre</span>
              <input type="text" class="form-control" placeholder="nombre" 
              aria-label="nombre" 
              name="nombre" 
              id="nombre" 
              value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"
              aria-describedby="registracionDeUsuario"
               
                pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
              
              />
            </div>
            <?php echo $_smarty_tpl->tpl_vars['messageError']->value['apellido'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_apellido">Apellido</span>
              <input
                type="text"
                class="form-control"
                placeholder="apellido"
                aria-label="apellido"
                name="apellido"
                id="apellido"
                value="<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
"
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                
              />
            </div>
            <?php echo $_smarty_tpl->tpl_vars['messageError']->value['dni'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_dni">Dni</span>
              <input
                type="text"
                class="form-control"
                placeholder="dni"
                aria-label="dni"
                name="dni"
                id="dni"
                value="<?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
"
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                
              />
            </div>
            <?php echo $_smarty_tpl->tpl_vars['messageError']->value['condicion'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_condicion">Condición</span>
              <select
                class="form-control"
                name="condicion"
                id="condicion" 
                value="<?php echo $_smarty_tpl->tpl_vars['condicion']->value;?>
"
                aria-describedby="registracionDeUsuario">                
                <?php if ($_smarty_tpl->tpl_vars['condicion']->value == "admin") {?>
                  <option selected="true" value="admin">Administrador</option>
                  <option value="user">Usuario</option>                      
                <?php } else { ?>
                  <option selected="true" value="user">Usuario</option>
                  <option value="admin">Administrador</option>            
                <?php }?>
                
              </select>
            </div>
          
            <?php echo $_smarty_tpl->tpl_vars['messageError']->value['passwordDitinct'];?>

            <?php echo $_smarty_tpl->tpl_vars['messageError']->value['password'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_password">Password</span>
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                aria-label="Password"
                name="password"
                id="password"                
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                
              />
            </div>
            <?php echo $_smarty_tpl->tpl_vars['messageError']->value['rPassword'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_rPassword">Reingrese Password</span>
              <input
                type="password"
                class="form-control"
                placeholder="Reingrese Password"
                aria-label="rPassword"
                name="rPassword"
                id="rPassword"
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                
              />
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-outline-success" >
                <?php echo $_smarty_tpl->tpl_vars['submitTitle']->value;?>

              </button>
              <button type="button" class="btn btn-outline-primary">
                <a href="index.php">Cancelar</a>
              </button>
            </div>
          </form>
        </section>
      </div>
    </section>

<?php }
}
