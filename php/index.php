<?php
/*  Copyright by C-ART WEBDESIGN '2002 - www.c-art-web.de - (c-art@web.de)    -  09/03/02
 *   Project Send-A-Cake - www.sendacake.de
 *
 *   forward to php/index.php
 *
 *   post / get vars:
 *    {variablennamen} - {typ} - {method} -> {kurzbeschreibung}
 *     NONE
 */

 include("inc.config.php");

 /******** Temporary **********************/
 /**/ if ($HTTP_HOST == "localhost" || stristr($HTTP_HOST, "192.168")) $cfg_libarypath = "../".$cfg_libarypath; /**/
 /******** Temporary **********************/

 $mysql_tbstat = mysql_fetch_tabname("\_statistic", $connr);
 include_once("$cfg_libarypath/inc.tools.php");

 /************* Statistic ******************************/
 if (!isset($cook_userId)) {
  $cook_userId = "guest".time();
  setcookie("cook_userId", $cook_userId, time() * 2, "/");
  statistic($cfg_sitename, "visits", $cook_userId, "visit", $connr);
 }
 else
  statistic($cfg_sitename, "views", $cook_userId, "visit", $connr);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
  <head>
  <title>Manhattan Project - fine alternative rock</title>
  <meta name="audience" content="Alle">
  <meta name="author" content="Tobias Bielohlawek">
  <meta http-equiv="content-language" content="de">
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <meta name="copyright" content="C-Art Webdesign c-art@web.de">
  <meta http-equiv="createDate" content="2001/10/1">
  <meta name="date" content="2001-10-1T12:00:00+00:00">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="page-topic" content="Gesellschaft">
  <meta name="publisher" content="C-Art Webdesign">
 </head>
 <frameset cols="*,0">
  <?php echo'<frame src="main.php" name="site" marginheight="0" marginwidth="0" scrolling="no" noresize>'."\n"; ?>
  <?php echo'<frame src="blank.html" name="sendmail" scrolling="no">'."\n"; ?>
 </frameset>
</html>