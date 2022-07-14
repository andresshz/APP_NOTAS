<?php

require_once '../lib/Conexion.php';
require_once '../models/Notas.php';

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$ClassNotas = new Notas();
$retorno = $ClassNotas->save($titulo,$texto);
if($retorno === true){
    echo '<script language="javascript">';
    echo('alert("Nota agregada correctamente")');
    header("Location: ../views/show.notes.php");
    echo '</script>';
}else{
    echo '<script language="javascript">';
    echo 'alert("Error")';
    echo '</script>';
    return;
}

?>