

<?php

require_once '../lib/Conexion.php';
class Notas
{
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

    public function delete($id)
    {
        try {
            $pdo = new DATABASE;
            $db = $pdo->conection();
            $table = $db->prepare('DELETE FROM notasText WHERE id = :id');
            $table->bindParam('id', $id);
            $table->execute();
            return true;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function show_notes()
    {
        try {
            $rows = null;
            $pdo = new DATABASE;
            $db = $pdo->conection();
            $table = $db->prepare('SELECT * FROM notasText');
            $table->execute();
            while ($notas = $table->fetch()) {
                $rows[] = $notas;
            }
            return $rows;
        } catch (PDOException $e) {
            echo $e;
        }
    }
}


?>