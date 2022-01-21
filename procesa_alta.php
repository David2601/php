
<?php
include("bdconexion.php");
$idlibro=$_GET['idlibro'];
$nombrelibro=$_GET['nombrelibro'];
$nombresol=$_GET['nombresol'];
$fechasal=$_GET['fecha_sal'];
$fechaent=$_GET['fecha_ent'];
$query="insert into libros values (".
"('$idlibro'),".
"UPPER('$nombrelibro'),".
"UPPER('$nombresol'),".
"('$fechasal'),".
"('$fechaent'))";                      ;
mysql_query($query,$link)or die(mysql_error($link));
header("Location: alta.php");

?>