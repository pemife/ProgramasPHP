<?php
/**
 * Muestra un mensaje de error
 * @param  string $mensaje El mensaje de error
 */
function mostrarError($mensaje){
  echo "<h3>Error: $mensaje</h3>";
}

/**
 * Muestra la tabla de multiplicar
 * @param  string|int $numero El numero del cual sacar la tabla
 */
function mostrarTabla($numero){
  ?>
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
  <?php
}
