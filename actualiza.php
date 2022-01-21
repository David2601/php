
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Modificar</title>
</head>
<body>
    <h1>Modificar</h1>
<?php
    include("bdconexion.php");
    $result=mysql_query("select * FROM libros",$link);
?>
    <TABLE BORDER=1 CELLSPACING =1 CALLPADDING=1>
        <TR><td>&nbsp;<b>ID del libro</b>&nbsp;</td><TD>&nbsp;<b>Nombre del libro</b>&nbsp;</TD><td>
        &nbsp;<b>Fecha de entrega</b>&nbsp;</td><td>&nbsp;<b>Actualizar</b>&nbsp;</td>
        </TR>
<?php
    while ($row=mysql_fetch_array($result)){
     printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td>
      <td><a href=\"procesaactualiza.php?idlibro=%d\">ACTUALIZAR</a></td></tr>",
      $row["idlibro"],$row["nombrelibro"],$row["fecha_ent"]);
       }
      mysql_free_result($result);
      mysql_close($link);
?>


</body>

</html>
