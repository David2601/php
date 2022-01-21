
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Modificar</title>
</head>

<body>
<?php
require_once("bdconexion.php");
$id=$_GET['idlibro'];
echo $id;
$result=mysql_query("SELECT * FROM libros where idlibro='$id';",$link);
$row=mysql_fetch_row($result);
$r_id=$row[0];
$r_nombrelibro=$row[1];
$r_nombresol=$row[2];
$r_fechasal=$row[3];
$r_fechaent=$row[4];
?>
 Formulario de modificacion,
 modifique los campos que sean necesarios y
 presione modificar para efectuar el cambio, <br>
 <form name="form1" action="guardaactualiza.php" method="get">
 <table>
 <p>ID del libro:
 <input type="text" name="idlibro"
 value="<?php echo $r_id?>"size="10" maxilenght="20">
 <br>

  <p>Nombre del libro:
 <input type="text" name="nombrelibro"
 value="<?php echo $r_nombrelibro?>"size="20" maxilenght="20">
 <br>

  <p>Nombre del solicitante:
 <input type="text" name="nombresol"
 value="<?php echo $r_nombresol?>"size="20" maxilenght="20">
 <br>

  <p>Fecha de salida:
 <input type="text" name="fecha_sal"
 value="<?php echo $r_fechasal?>"size="20" maxilenght="20">
 <br>

  <p>Fechad de entrega:
 <input type="text" name="fecha_ent"
 value="<?php echo $r_fechaent?>"size="20" maxilenght="20">
 <br>

<input type="submit" name="submit" value="Modificar">
 </p>
 </form>
 </table>
</body>

</html>
