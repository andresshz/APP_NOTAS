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
  <link rel="icon" type="image/png" href="../resource/img/icon.png"/>
  <link rel="stylesheet" href="../resource/css/show.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <h1 style="text-align: center; margin-bottom: 5%; margin-top: 5%;">Registro de notas</h1>

  <div class="contenedor">
    <?php foreach ($filas as $fila) { ?>
      <div class="flex">
        <div class="titulo">
          <h4><?php echo $fila['titulo'] ?></h4>
        </div>
        <div class="contenido">
          <p><?php echo $fila['texto'] ?></p>
        </div>
      </div>
    <?php } ?>
  </div>

  <button style="margin-left: 10%;" type="button" class="btn btn-success"><a style="text-decoration: none; color:black; " href="menu.html">Regresar</a></button>
 
</body>

</html>