<?php
require_once '../models/Notas.php';
require_once '../lib/Conexion.php';

    $classNotas = new Notas();
    $filas = $classNotas->show_notes();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Notas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center; margin-bottom: 5%; margin-top: 5%;">Registro de notas</h1>

<table class='table' style="margin: 0 auto; width: 900px;">
    <thead>
      <tr>
        <th scope='col'>#</th>
        <th scope='col'>Titulo</th>
        <th scope='col'>Texto</th>
      </tr>
    </thead>
    <?php foreach($filas as $fila){ ?>
    <tbody>
      <tr>
        <th scope='row'><?php echo $fila['id'] ?></th>
        <td><?php echo $fila['titulo'] ?></td>
        <td><?php echo $fila['texto'] ?></td>
      </tr>
    </tbody>
    <?php } ?>
    </table>

</body>

</html>