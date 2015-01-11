<?php
  /*   Copyright by C-ART '2001 www.c-art-web.de (c-art@web.de)    */

  $nousrchk=true;

  include("inc.config.php");

  $columnno ="40_no";
  $columnpfad = "40_pfad";

//Get all Links
  $query="SELECT * FROM $mysql_tbstruk $where ORDER BY $columnpfad ASC ";
  $res = mysql_query($query,$mysql_nr[$connr]) or mysql_myerror($query,mysql_error($mysql_nr[0]));
  while ($row = mysql_fetch_array($res)) {
   $spacer=str_repeat("&nbsp;&nbsp;", substr_count($row[$columnpfad],"."));
   $toe_strukt.="<tr><td>&nbsp;&nbsp;$spacer<a href=site.php?sitepfad=$row[$columnpfad] class=menu target=main><img src=../$row[4] border=0></a></td></tr>";
  }

echo"
<html>
 <link href=\"style.css\" type=text/css rel=stylesheet>
 <body background=../img/bg_menu.jpg>
  <table width=100% height=100%>
    $toe_strukt

  </table>
 </body>
</html>";

?>