<?php
  include '/include/mysql_class.php';
  $sql="SELECT 	`almacen`.`Nombre` Na, 
        `producto`.`Nombre` Np
        FROM `almacenproducto` 
        JOIN `producto` 
        ON `producto`.`IdProducto`=`almacenproducto`.`IdProducto`
        JOIN `almacen`
        ON `almacen`.`IdAlmacen`=`almacenproducto`.`IdAlmacen` ";
  $micon->consulta($sql);
  $alm="";
  ?>
  <table>
    <tr>
      <th>Almacen</th>
      <th>Producto</th>
    <tr>
    <?php
  while($row=$micon->campoconsultaA()){?>
    <tr>
      <td><?=$row[Na]?><td>
      <td><?=$row[Np]?><td>
    <tr>  
  <?
  }
?>