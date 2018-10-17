<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
  </head>
  <body>
    <?php
    require './auxiliar.php';

    if (isset($_GET['numero'])){
      mostrarError("Falta el parámetro <i>num</i>");
    }else {
      $numero = $_GET['num'];

      if (!ctype_digit($numero)) {
        mostrarError("se ha pasado algo que no es un numero!");
      }else{

        if ($numero < 0 || $numero > 10){
          mostrarError("el numero debe estar comprendido entre 0 y 10");
        }else{
          mostrarTabla($numero);
        }
      }
    }
    ?>
  </body>
</html>
