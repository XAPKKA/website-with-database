<?php
    
   	header("Content-Type: text/html; charset=UTF-8");
 
	$host = 'localhost'; 
	$user = 'xvanpijp_agent'; 
	$password = '12071981Nik';
	$db_name = 'agent'; 

	$connect = mysql_connect($host, $user, $password, $db_name);
	
mysql_select_db("xvanpijp_agent", $connect) or die( mysql_error());
	
   
?>
   
