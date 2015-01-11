<?php
 // Copyright by C-Art Webdesign'2001 (c-art@web.de)
 // Made for manhattan-project.de

 $cfg_libarypath = "../_libary";
 include("php/inc.config.php");
/*
 if ($cook_id=="") {
  setcookie("cook_id",time(),time()*2,"/");
  statistic($cfg_sitename, "visits", $cook_id, "visit", $connr);
 }
 else statistic($cfg_sitename, "views", $cook_id, "visit", $connr);
*/

  statistic2($cfg_sitename, $cook_id, $connr, "");

 ?>
<html>
 <head>
  <title>Manhattan Project - fine alternative rock</title>
<!--  <meta http-equiv="refresh" content="5; URL=php/frame.html">-->
  <meta name="audience" content="Alle">
  <meta name="author" content="Tobias Bielohlawek">
  <meta http-equiv="content-language" content="de">
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <meta name="copyright" content="C-ART Webdesign c-art@web.de">
  <meta http-equiv="createDate" content="2001/04/1">
  <meta name="date" content="2001-10-01T10:00:00+00:00">
  <meta name="description" content="Manhattan Project - die ">
  <meta name="keywords" content="manhattan, project, band, rock, wörrstadt, musik, alzey, bj, manu, peter, flo, plattenvertrag, ">
  <meta name="page-topic" content="Branche Produkt">
  <meta name="page-type" content="Produktinfo">
  <meta http-equiv="pragma" content="no-cache">
  <meta name="publisher" content="C-ART Webdesign c-art@web.de">
  <meta name="robots" content="all">
  <style type="text/css">
  .link       {font-family: courier; font-size: 14pt; color:#dddddd; font-weight:bold; text-decoration:none;}
  .link:hover {font-family: courier; font-size: 14pt; color:#eeeeee; font-weight:bold; text-decoration:underline;}

  .link2       {font-family: courier; font-size: 10pt; color:#dddddd; font-style:italic; font-weight:bold; text-decoration:none;}
  .link2:hover {font-family: courier; font-size: 10pt; color:#eeeeee; font-style:italic; font-weight:bold; text-decoration:underline;}

  .alink {font-family: arial,verdana,helvetica,sans-serif; font-size: 8pt; color:#6699cc; font-style:italic; text-decoration:none;}
 </style>
 <script language="JavaScript">
<!--
          function openFlash(page) {
                windowprops = "width=800,height=550,location=no,menubar=no,personalbar=no,resizable=yes,screenX=0,screenY=0,locationbar=no,scrollbars=no,directories=no,statusbar=no,toolbar=no";
                man = window.open(page, 'ManProFlash', windowprops);
                man.focus();
                man.moveTo(screen.availWidth / 2 - 400, screen.availHeight / 2 - 275);
          }
//-->
</script>
 </head>
 <body bgcolor=#000000>

  <table border=0 width=100% height=100%>
   <tr><td align=center>
    <table border=0 cellspacing=40>
     <tr><td align=center><a href="javascript:openFlash('php/index.php');"><img src=img/logo.jpg border=0></a><br>
      <a href="javascript:openFlash('php/index.php');"  class=link><font face=courier>enter website here</font></a><br><br>
      </td></tr>
    </table>
   </td></tr>
   <tr><td align=center><a href="http://www.macromedia.com/de/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash&Lang=German" target="_blank"><img src="img/flash.gif" width="92" height="35" border="0"></a></td></tr>
   <tr><td align=center valign=bottom class="alink" >best viewed in 800*600 & ShockwaveFlash enabled<br><a href="http://www.c-art-web.de/index.php?id=manpro" class="alink">(c) by C-Art Webdesign'03 - www.c-art-web.de<br><a href="http://www.multiadmin.de" class="alink">Powerd by MulitAdmin</a>
      <?php echo"&nbsp;&nbsp;Version $ver - $cook_id"; ?></td></tr>
  </table>

<?php
/* MainPage for Events
  <table border=0 width=100% height=100%>
   <tr><td align=center>
    <table border=0 cellspacing=40>
      <tr><td><img src=plakat2.gif width=200 height=282></td><td align=center><a href="javascript:openFlash('php/index.php');"><img src=img/logo.jpg border=0></a><br>
      <a href="javascript:openFlash('php/index.php');"  class=link><font face=courier>enter website here</font></a><br><br>

      <font face=courier color=#dddddd>
      Open-Air CD-Release Concert on <b>28th June</b><br>
      at the 'Ruine Bellerkirche' by Eckelsheim.<br><br>
      Get Poster and Flyer here:</font><br>
      <a href=plakat.pdf class=link2 target=_blank>Poster</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=flyer.pdf class=link2 target=_blank>Flyer</a>
      </td></tr>
    </table>
   </td></tr>
   <tr><td align=center><a href="http://www.macromedia.com/de/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash&Lang=German" target="_blank"><img src="img/flash.gif" width="92" height="35" border="0"></a></td></tr>
   <tr><td align=center valign=bottom class="alink" >best viewed in 800*600 & ShockwaveFlash enabled<br><a href="http://www.c-art-web.de/index.php?id=manpro" class="alink">(c) by C-Art Webdesign'03 - www.c-art-web.de<br><a href="http://www.multiadmin.de" class="alink">Powerd by MulitAdmin</a>
      echo"&nbsp;&nbsp;Version $ver - $cook_id"; </td></tr>
  </table>
*/ ?>

 </body>
</html>




