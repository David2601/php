
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Alta</title>
</head>

<body>

    <h2 align= "center"> Introduce los datos</h2><hr><br>
    <form action="procesa_alta.php" method="get">
    <table align="left"border="1">
    <tr align="right">
    <td>ID del libro: </td>
    <td><input type="text" name="idlibro" size="50" maxlength="20"></td>
    <tr align="right">
    <td>Nombre del libro: </td>
    <td><input type="text" name="nombrelibro" size="50" maxlength="20"></td>
    <tr align="right">
    <td>Nombre del solicitante: </td>
    <td><input type="text" name="nombresol" size="50" maxlength="20"></td>
    <tr align="right">
    <td>Fecha de salida: </td>
    <td><input type="text" name="fecha_sal" size="50" maxlength="20"></td>
    <tr align="right">
    <td>Fecha de entrega: </td>
    <td><input type="date" name="fecha_ent" size="50" maxlength="20"></td>
    <tr>
    <td colspan = 3 align= center>
    <input type="submit" name="agregar" value="Agregar"/>
    </td>
    </tr>
</table></form> <br /><br /><br /><br /><br /><br /><br /><br /><br /> </hr>
      <?php
       include("bdconexion.php");
       $result=mysql_query("select * FROM libros",$link);
        ?>
<table align="center" border=1 cellspacing=1 cellpadding=1>
  <TR><td>ID del libro</td><TD>Nombre del libro</TD><TD>Nombre del solicitante</TD><TD>Fecha de salida</TD><TD>Fecha de entrega</TD></TR>
    <?php
    while($row=mysql_fetch_array($result)){
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp</tr></tr>",$row["idlibro"],$row["nombrelibro"],$row["nombresol"],
      $row["fecha_sal"],$row["fecha_ent"]);
    }
    mysql_free_result($result);
    mysql_close($link);
     ?>
</table>
</body>

</html>
