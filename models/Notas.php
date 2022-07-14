

<?php

require_once '../lib/Conexion.php';
class Notas
{

    /* Metodo para agragar nota */
    public function save($titulo, $texto)
    {
        $valor = null;
        $pdo = new DATABASE;
        $db = $pdo->conection();
        $table = $db->prepare('INSERT INTO notasText (titulo,texto) VALUES (:titulo,:texto)');
        $table->bindParam('titulo', $titulo);
        $table->bindParam('texto', $texto);
        $table->execute();
        if ($table) {
            return $valor = true;
        } else {
            return $valor = false;
        }
    }
    /* Metodo para eliminar una nota ingregasa */
    public function delete($id)
    {

        $pdo = new DATABASE;
        $db = $pdo->conection();
        $table = $db->prepare('DELETE FROM notasText WHERE id = :id');
        $table->bindParam('id', $id);
        $table->execute();
    }
    /* Metodo para mostrar nota ingregasa */
    public function show_notes()
    {
        try{
            $rows = null;
            $pdo = new DATABASE;
            $db = $pdo->conection();
            $table = $db->prepare('SELECT * FROM notasText');
            $table->execute();
            while ($notas = $table->fetch()) {
                $rows[] = $notas;
            }
            return $rows;
        }catch(PDOException $e){
          echo $e;
        }
       
    }
}


?>