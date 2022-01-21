<?php
  require_once("bdconexion.php");
$id=$_GET['idlibro'];
$nombrelibro=$_GET['nombrelibro'];
$nombresol=$_GET['nombresol'];
$fechasal=$_GET['fecha_sal'];
$fechaent=$_GET['fecha_ent'];
$Peticion="UPDATE libros SET nombrelibro=UPPER('$nombrelibro'),
nombresol=UPPER('$nombresol'),fecha_sal='$fechasal',
fecha_ent='$fechaent' where idlibro='$id';";
$idresult=mysql_query($Peticion,$link);
if ($idresult==0)
{
  echo "La setencia no se ha podido ejecutar, <BR>";
  echo mysql_errno(),":".mysql_error(),"<BR>";
}
else
{
 echo "Se han modificado los registros <BR>";
 header("Location: actualiza1.php");
 mysql_close($link);
}
?>
