<?php
require_once '../models/Notas.php';
require_once '../lib/Conexion.php';


$id = $_GET['id'];

if($id == null){
return;
}

$class = new Notas();
$delete = $class->delete($id);
if($delete === true){
    echo '<script language="javascript">';
    echo('alert("Nota eliminada con exito!!")');
    header("Location: ../views/show.notes.php");
    echo '</script>';
}
?>