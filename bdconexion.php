<?php
$link = mysql_pconnect("localhost","root","")or die(mysql_error($link));
mysql_select_db("biblioteca",$link)or die (mysql_error($link));
?>