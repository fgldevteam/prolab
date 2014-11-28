<?php
function MySQLConnction($task) {
	
	if($task == "open" || $task == ""){
		$host = "localhost";
		$user = "root";
		$pass = "root";
		$db = "library";
	
		$connection = mysql_connect($host, $user, $pass) or die ("<span class='error'>Unable to connect!</span>");
			
					/*socket connection*/
		$connection = mysql_connect('localhost:/Applications/MAMP/tmp/mysql/mysql.sock', $user, $pass) 
			or die ("<span class='error'>Unable to connect!</span>");
		
				mysql_select_db($db) or die ("<span class='error'>Unable to select database!</span>"); 
	}
	
	if($task == "close") {
		if(isset($connection)){
			mysql_close($connection);
		}
	}
}
?>