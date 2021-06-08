<?php

$fp = fopen('archivo.html', 'w');

$conexion = mysqli_connect( "localhost", "root", "", "bd_pruebas" );
$sql = "SELECT * FROM tb_personas";
//echo $sql;
$resultado = $conexion->query( $sql );

while( $fila = mysqli_fetch_assoc( $resultado ) )
{
    fwrite($fp, $fila[ 'nombre' ]. "<br>") ;
}

fclose($fp);