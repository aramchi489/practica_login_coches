<?php
include "loginsesion.php";
iniciaSesion();

$fichero="ficheros/marcas.csv";
$data=file_get_contents($fichero);
$marcas=explode("\n",$data);

echo("<h1>LISTA DE MARCAS</h1>");

for($i=0;$i<count($marcas);$i++){
    echo("<span>$marcas[$i]</span><a href='coches.php?marca=$marcas[$i]'<a>Enlace</a><br>");
}

echo("<a href='carrito.php'>VER CARRITO</a>");




