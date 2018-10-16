<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
  </head>
  <body>
    <?php $numero = 4; ?>

      <table>
        <thead>
          <th><?= $numero ?></th>
          <th>x</th>
          <th>n</th>
          <th>=</th>
          <th>m</th>
        </thead>
        <tbody>
          <?php for ($i = 0; $i <= 10; $i++){ ?>
            <tr>
              <td><?= $numero ?></td>
              <td>x</td>
              <td><?= $i ?></td>
              <td>=</td>
              <td><?= $numero * $i ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
  </body>
</html>
