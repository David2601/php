
<?php
 include("bdconexion.php");
  $id=$_GET['idlibro'];
  echo $id;
  mysql_query("delete from libros WHERE idlibro=$id",$link);
  header("Location:borrar.php");
?>
