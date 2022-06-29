

<?php

require_once '../lib/Conexion.php';
class Notas{


    /* Metodo para agragar nota */
public function save($titulo,$texto){

    $pdo = new DATABASE;
    $db = $pdo->conection();
    $table = $db->prepare('INSERT INTO notas (titulo,texto) VALUES (:titulo,:texto)');
    $table->bindParam('titulo',$titulo);
    $table->bindParam('texto',$texto);
    $table->execute();

}
    /* Metodo para eliminar una nota ingregasa */
public function delete($id){

    $pdo = new DATABASE;
    $db = $pdo->conection();
    $table = $db->prepare('DELETE FROM notas WHERE id = :id');
    $table->bindParam('id',$id);
    $table->execute();

}
    /* Metodo para mostrar nota ingregasa */
public function show_notes(){
 $pdo = new DATABASE;
    $db = $pdo->conection();
    $table = $db->prepare('SELECT * FROM notas');
    $table->execute();
    while ($notas = $table->fetch()){ 
        return $rows[] = $notas;
    }

}

}


?>