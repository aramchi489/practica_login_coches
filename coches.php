<?php
include "loginsesion.php";
iniciaSesion();
$_SESSION['carrito'];
$marca=$_GET['marca'];
$fichero;

switch($marca){
    case 'NISSAN': 
        $fichero='ficheros/cochesnissan.csv';
    break;

    case "HYUNDAI":
        $fichero='ficheros/cocheshyundai.csv';
    break;

    case "AUDI":
        $fichero='ficheros/cochesaudi.csv';
    break;
}

$data = file_get_contents($fichero);
$coches=explode("\n",$data);

echo("<h1>COCHES DE $marca</h1>");

for($i=0;$i<count($coches);$i++){
    echo("<span>$coches[$i]</span><button type='submit' name='coches' value='$coches[$i]'>Comprar</button></br>");
}

echo("<a href='marcas.php'>VOLVER</a></br><a href='carrito.php'>VER CARRITO</a>");