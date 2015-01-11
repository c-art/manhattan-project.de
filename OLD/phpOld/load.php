<?php
// header ("application/x-www-urlformencoded");

 require("inc.config.php");

 $column= mysql_fetch_columnname($mysql_tbsites, $connr);

 $query="SELECT * FROM $mysql_tbsites WHERE $column[pfad]='$sitepfad' ORDER BY $column[pfad] ASC ";
 $res = mysql_query($query,$mysql_nr[$connr]) or mysql_myerror($query,mysql_error($mysql_nr[$connr]));

 while ($row = mysql_fetch_array($res)) {
   $toe_variables.=$row[$column['type']]."=".rawurlencode(strip_br2(stripslashes($row[$column['content']])))."&";
   if ($row[$column['type']]=="text") $rowanz="rowanz=".(substr_count($row[$column['content']],"\n")+3);
 }

 echo "$toe_variables$rowanz";

 function strip_br2($string) {
  $return_string=str_replace ("\n", "",$string);
  return $return_string;
 }

 mysql_close();

?>
