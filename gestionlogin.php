<?php
include "loginsesion.php";
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

if($usuario=='antonio' && $contrasena=='1234'){
    if(estaLogeado())
    {
        header("Location: marcas.php");
    }
    else
    {
        login();
        header("Location: marcas.php");
        
    }
    
}
else{
    header("Location: errorlogin.php");
}