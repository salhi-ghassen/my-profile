<?php
if(!isset($mysql_hostname)) {
 $mysql_hostname = "localhost";
 $mysql_user = "root";
 $mysql_password = "";
 $mysql_database = "demo";
 $lien = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("SYSTEM INDISPONIBLE");
 mysql_select_db($mysql_database, $lien) or die("SYSTEME INDISPONIBLE");
} else {
 mysql_close($lien);
 unset($mysql_hostname);
 unset($mysql_user);
 unset($mysql_password);
 unset($mysql_database);
}
?>
