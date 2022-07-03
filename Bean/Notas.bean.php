<?php

require_once '../lib/Conexion.php';
require_once '../models/Notas.php';

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$ClassNotas = new Notas();
$retorno = $ClassNotas->save($titulo,$texto);
if($retorno === true){
   
    header("Location: ../views/bienvenido.html");
    echo '<script language="javascript">';
    echo 'alert("Nota ingresada correctamente")';
    echo '</script>';
}else{
    echo '<script language="javascript">';
    echo 'alert("Error")';
    echo '</script>';
    return;
}



?>