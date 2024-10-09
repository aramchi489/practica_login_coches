<?php
function iniciaSesion(){
    session_start();
}

function cierraSesion(){
    unset($_SESSION['user']);
    session_destroy();
}

function login($user){
    iniciaSesion();
    $_SESSION['user']=$user;
}

function logout(){
    cierraSesion();
}

function estaLogeado($usuario='user'){
    $valido=false;
    if (isset($_SESSION[$usuario])){
        $valido=true;
    }

    return $valido;
}

function guardaSesion($usuario='user',$nomusuario){
    $_SESSION[$usuario]=$nomusuario;
}

function leeSesion($usuario='user'){
    $nomusuario=null;

    if(isset($_SESSION[$usuario])){
        $nomusuario=$_SESSION[$usuario];
    }
    
    return $nomusuario;
}