<?php

  $usuario="";
  $password="";
  $messages["usuario"]="";
  $messages["password"]="";
  $allOk=false;
  $smarty->assign('messageError',"");
  

  //Verificacion de Parámetros.
    if(isset($_POST["usuario"])){
      $allOk=true;

      $result=verifyParams("usuario");
      $result["valid"] ? $usuario=$result["value"]:$messages["usuario"]=cartelError($result["value"]);
      $result["valid"] ? :$allOk=false;

      $result=verifyParams("password");
      $result["valid"] ? $password=$result["value"]:$messages["password"]=cartelError($result["value"]);
      $result["valid"] ? :$allOk=false;
    }
  //Fin de Verificacion de Parámetros.

  //Validación de datos.
    if ($allOk){
        $resultSQL=$db->users->login($usuario,$password);

        //Creación de la sesión.
        if ($db->db->numRows()>0){
            $_SESSION["id"]=$resultSQL["id"];
            $_SESSION["usuario"]=$resultSQL["usuario"];

            $smarty->assign("usuarioLoged",$_SESSION["usuario"]);
            //Mensaje de Ingreso.
            $smarty->assign('headerMessage',cartelError("Bienvenido ".$resultSQL['nombre']." ".$resultSQL['apellido']));
            $showMain=true;
        }
        else{
          //Mensaje de Error.
          $smarty->assign('messageError',cartelError("El usuario o contraseña no coinciden"));
          $smarty->display("login.tpl");
        }
    }
    else{
      $smarty->display("login.tpl");
    }
  //Fin de Validación de datos.

?>
