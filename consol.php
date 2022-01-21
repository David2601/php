
<?php
    include("bdconexion.php");
    $sol=$_GET['nombresol'];
    $result=mysql_query("select * from libros where nombresol like '$sol%'",$link);
?>
<TABLE BORDER= 1 CELLSPACING= 1 CELLPADDING= 1>
<TR><td>ID</td><TD>Nombre del libro</TD><TD>Nombre del solicitante</TD><TD>Fecha de entrega</TD></TR>
<?php
    while($row=mysql_fetch_array($result)){
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;
      </td><td>&nbsp;%s&nbsp;</td></tr>",$row["idlibro"],$row["nombrelibro"],$row["nombresol"],$row["fecha_ent"]);
    }
    mysql_free_result($result);
    mysql_close($link);
    ?>
</TABLE>