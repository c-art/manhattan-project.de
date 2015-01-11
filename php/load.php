<?php


include("inc.config.php");

$to_echo = "";

switch($item) {
 case "lyrics":
   $query = "SELECT titel, text FROM 25_4_lyrics ORDER BY position ASC ";
   $res = mysql_query($query,$mysql_nr[$connr]) or mysql_myerror($query,mysql_error($mysql_nr[$connr]));

   while ($row = mysql_fetch_array($res)) {
     if($row[0] != "") $to_echo .= "<br><font color=\"#ffffff\">".strip_br2(stripslashes($row[0]))."</font><br>";
     if($row[1] != "") $to_echo .= strip_br2(stripslashes($row[1]))."<br>";
   }
   echo "lyrics=".rawurlencode("<b>$to_echo</b>");
  break;

 case "history":
   $query = "SELECT titel, text FROM 26_4_history ORDER BY position ASC ";
   $res = mysql_query($query,$mysql_nr[$connr]) or mysql_myerror($query,mysql_error($mysql_nr[$connr]));

   while ($row = mysql_fetch_array($res)) {
     if($row[0] != "") $to_echo .= "<br><font color=\"#ffffff\">".strip_br2(stripslashes($row[0]))."</font><br>";
     if($row[1] != "") $to_echo .= strip_br2(stripslashes($row[1]))."<br>";
   }
   echo "history=".rawurlencode("<b> - history of Manhattan Project <br> $to_echo</b>");
  break;

 case "news":
   $query = "SELECT date, titel, text FROM 27_4_news ORDER BY date ASC ";
   $res = mysql_query($query,$mysql_nr[$connr]) or mysql_myerror($query,mysql_error($mysql_nr[$connr]));
   $to_echo2 = "";
   while ($row = mysql_fetch_array($res)) {
     $to_echo .= "<font color=\"#ffffff\">".strftime("%D <br> %H:%M", $row[0])."</font><br>";
     $to_echo2 .= "<font color=\"#ffffff\">".stripslashes($row[1])."</font><br>";
     $to_echo2 .= "<font size=\"12\">".strip_br2(stripslashes($row[2]))."</font><br><br>";
     $to_echo .= str_repeat("<br>", substr_count(trim($row[2]), "<br>"))."<br>";
    }
   echo "dates=".rawurlencode("<b>$to_echo</b>")."&news=".rawurlencode("<b>$to_echo2</b>");
  break;

 case "guestbook":
   $query = "SELECT name, email, website, text, date FROM 28_4_guestbook ORDER BY date DESC ";
   $res = mysql_query($query,$mysql_nr[$connr]) or mysql_myerror($query,mysql_error($mysql_nr[$connr]));

   while ($row = mysql_fetch_array($res)) {
     $to_echo .= "<font color=\"#ffffff\">".stripslashes($row[0])."</font> - <font size=\"-2\">".strftime("%H:%M %D", $row[4])."</font><br>";
     if($row[1] != "") $to_echo .= "<font size=\"-2\"><a href=\"mailto:".stripslashes($row[1])."\">".stripslashes($row[1])."</a></font>";
     if($row[1] != "" && $row[2] != "") $to_echo .= " | ";
     if($row[2] != "") $to_echo .= "<font size=\"-2\"><a href=\"http://".str_replace("http://", "", stripslashes($row[2]))."\">".str_replace("http://", "", stripslashes($row[2]))."</a></font><br>";
     $to_echo .= "<font size=\"12\">".strip_br2(stripslashes($row[3]))."</font><br><br>";
    }
   echo "guestbook=".rawurlencode("<b>$to_echo</b>");
  break;

 }

 function strip_br2($string) {
  $return_string=str_replace ("\n", "",$string);
  return $return_string;
 }

 mysql_close();

?>