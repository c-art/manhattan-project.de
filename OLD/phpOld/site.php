<?php
   /*   Copyright by C-ART '2001 www.c-art-web.de (c-art@web.de)    */

 include("inc.config.php");

 $width="90%";
 $height=$width;
 $file="desktop.swf?sitepfad=$sitepfad"; //&time=".time();

echo"
<html>
 <head>
  <meta http-equiv=\"pragma\" content=\"no-cache\">
 </head>
 <body background=../img/bg_main.jpg>
  <table width=100% height=100%>
   <tr>
    <td align=center>
     <OBJECT classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0\" WIDTH=$width HEIGHT=$height>
      <PARAM NAME=movie VALUE=\"$file\">
      <PARAM NAME=loop VALUE=false>
      <PARAM NAME=menu VALUE=false>
      <PARAM NAME=quality VALUE=high>
      <PARAM NAME=bgcolor VALUE=#141414>
      <EMBED src=\"$file\" loop=false menu=false quality=high bgcolor=#000000  WIDTH=600 HEIGHT=400 TYPE=\"application/x-shockwave-flash\" PLUGINSPAGE=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\"></EMBED>
     </OBJECT>
    </td>
   </tr>
  </table>
 </body>
</html>";

?>