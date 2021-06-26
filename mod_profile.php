<?php

  $smarty->assign('title_regOmod','Modificar Usuario');
  $smarty->assign('submitTitle',"Modificar Usuario");

  $messages="";
  $usuario="";
  $nombre="";
  $apellido="";
  $dni="";
  $condicion="";
  $password="";
  $rPassword="";
  $message="";

  $idLoged=$_SESSION["id"];

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

  $resultSQL= $db-> users-> getById($idLoged);
  $id=$resultSQL['id'];
  $smarty->assign('usuario',$resultSQL['usuario']);
  $smarty->assign('nombre',$resultSQL['nombre']);
  $smarty->assign('apellido',$resultSQL['apellido']);
  $smarty->assign('dni',$resultSQL['dni']);
  $smarty->assign('condicion',$resultSQL['condicion']);

if ($allOk){
    $db-> users->updateById($id,$usuario,$nombre,$apellido,$dni,$condicion,$password);
    $smarty->assign('headerMessage',cartelError("Modificación de usuario completada correctamente"));
    $showMain=true;
    $allOk=false;
  }
  else{
      $smarty->assign("messageError",$messages);
      $smarty->display("mod_profile.tpl");
  }
  //Fin de Carga de datos a la DB.

?>
