<?php
   /*   Copyright by C-ART '2001 www.c-art-web.de (c-art@web.de)   */

 //*************** Config File ***********************
 $ver="1.0-".date("n.j", getlastmod());

 if(!isset($cfg_libarypath)) $cfg_libarypath = "../../_libary";
 include("$cfg_libarypath/inc.config.php");

 $connr = 10;

 @include("$cfg_libarypath/inc.mysqlconnect.php");
 @include("$cfg_libarypath/inc.tools.php");

 //Wichtige Tabellen

 $cfg_sitename = "10";

 ?>