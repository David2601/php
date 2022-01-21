
<?php
    header("Content-type: application/vnd.me-excel");
    header("Content- Disposition: attachment; filename=libros.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    include("bdconexion.php");
    $q = "SELECT * FROM libros";
    $rs = mysql_query($q, $link);
    $tot = mysql_num_rows($rs);
?>
 <table>
   <thead>
     <tr>
       <td>ID del libro</td>
       <td>Nombre del libro</td>
       <td>Nombre del solicitante</td>
       <td>Fecha de salida</td>
       <td>Fecha de entrega</td>
     </tr>
   </thead>
   <tbody>
   <?php while($row=mysql_fetch_assoc($rs)): ?>
   <tr>
     <td><?php echo $row ['idlibro']?></td>
     <td><?php echo $row ['nombrelibro']?></td>
     <td><?php echo $row ['nombresol']?></td>
     <td><?php echo $row ['fecha_sal']?></td>
     <td><?php echo $row ['fecha_ent']?></td>
   </tr>
     <?php endwhile;?>
   </tbody>
 </table>
