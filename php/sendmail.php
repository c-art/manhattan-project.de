<?php
  /*   Copyright by C-ART WEBDESIGN '2002 - www.c-art-web.de - (c-art@web.de)    -  09/02/02	  */

  include("inc.config.php");

  $name = addslashes(strip_tags($name));
  $email = addslashes(strip_tags($email));
  $website = addslashes(strip_tags($website));
  $text = addslashes(str_replace("\n\n", "\n", strip_tags($text)));

  $query = "INSERT INTO 28_4_guestbook SET name='$name', email='$email', website='$website', text='$text', date='".time()."'";
  $res = mysql_query($query, $mysql_nr[$connr]) or mysql_myerror($query,mysql_error($mysql_nr[$connr]));

  $cfgSendMailTo = "bj@manhattan-project.de";
  $cfgSendMailSubject = "Eintrag ins Gästebuch";

  $cfgSendMailMessage = "
 Es wurde ins Gästebuch eingetragen:
  Name:    $name
  Email:   $email
  Website:   $website
  Message:
  $text";

  mail($cfgSendMailTo, $cfgSendMailSubject, $cfgSendMailMessage, "From: $email\nReply-To: $email\nX-Mailer: PHP/".phpversion()."\nCC: $cfgSendMailCCTo");

  header("Location: blank.html");
?>