
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Eliminar</title>
</head>

<body>

<H1>Bajas</H1>
    <?php
        include("bdconexion.php");
        $result=mysql_query("select * from libros",$link);
    ?>
    <TABLE BORDER=1 CELLSPACING=1 CALLPADDING=1>
    <TR><td>&nbsp;<B>NOMBRE DEL LIBRO</B>&nbsp;</td><TD>&nbsp;
    <b>NOMBRE DEL SOLICITANTE</b>&nbsp;</TD><td>&nbsp;<B>Borrar</B>&nbsp;</td></TR>
    <?php
    while($row=mysql_fetch_array($result)){
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td>
      <td><a href=\"procesaborra.php?idlibro=%d\">BORRAR</a></td></tr>",
      $row["nombrelibro"],$row["nombresol"],$row["idlibro"]);
      }
      mysql_free_result($result);
      mysql_close($link);

    ?>

</body>

</html>
