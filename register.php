<?php

  $smarty->assign('title_regOmod','Registraci&oacute;n');
  $smarty->assign('submitTitle',"Registrar");
  $messages="";

  $usuario="";
  $nombre="";
  $apellido="";
  $dni="";
  $condicion="";
  $password="";
  $rPassword="";
  $message="";

  $messages=[];
  $messages["usuario"]="";
  $messages["nombre"]="";
  $messages["apellido"]="";
  $messages["dni"]="";
  $messages["condicion"]="";
  $messages["password"]="";
  $messages["rPassword"]="";
  $messages["passwordDitinct"]="";

  $allOk=false;

  //Validación de Parámetros.
    if(isset($_POST["usuario"])){
        $allOk=true;

        $result=verifyParams("usuario");
        $result["valid"] ? $usuario=$result["value"]:$messages["usuario"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("nombre");
        $result["valid"] ? $nombre=$result["value"]:$messages["nombre"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("apellido");
        $result["valid"] ? $apellido=$result["value"]:$messages["apellido"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("dni");
        $result["valid"] ? $dni=$result["value"]:$messages["dni"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("condicion");
        $result["valid"] ? $condicion=$result["value"]:$messages["condicion"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("password");
        $result["valid"] ? $password=$result["value"]:$messages["password"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("rPassword");
        $result["valid"] ? $rPassword=$result["value"]:$messages["rPassword"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        if ($password!=$rPassword and ($password!="" and $rPassword!="")){
            $allOk=false;
            $messages["passwordDitinct"]=cartelError("Los password no coinciden");
        }
    }
  //Fin de Validación de Parámetros.

  $smarty->assign('usuario',$usuario);
  $smarty->assign('nombre',$nombre);
  $smarty->assign('apellido',$apellido);
  $smarty->assign('dni',$dni);
  $smarty->assign('condicion',$condicion);
  $smarty->assign('password',$password);
  $smarty->assign('rPassword',$rPassword);

  //Carga de datos a la DB.
  if ($allOk){
      $db->users->insert($usuario,$nombre,$apellido,$dni,$condicion,$password);
      $smarty->assign('headerMessage',cartelError("Registro de nuevo usuario completo"));
      $showMain=true;
      $allOk=false;
  }
  else{
      $smarty->assign("messageError",$messages);
      $smarty->display("register.tpl");
  }
  //Fin de Carga de datos a la DB.

?>
