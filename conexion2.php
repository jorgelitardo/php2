<?php
$dbhost="localhost"; 
$username="root"; 
$password="Daniel12341"; 
$dbname="admisiones"; 
$link = mysql_connect($dbhost,$username,$password); 
mysql_select_db($dbname,$link); 
mysql_query("SET NAMES 'utf8'");
//$tildes = $link->query("SET NAMES 'utf8'");
?> 