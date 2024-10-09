<?php
include "loginsesion.php";
iniciaSesion();
$compras=$_POST['coches'];
$_SESSION['carrito']=$compras;
$carrito=$_SESSION['carrito'];

echo("<h1>CARRITO DE LA COMPRA</h1>");

for($i=0;$i<count($carrito);$i++){
    echo("<p>$carrito[$i]</p>");
}