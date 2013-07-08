<?php 
	session_start();
	if(!isset($_SESSION)){
		echo 'what';
		//header("Location: login.php");
		
	}
	else
	{
			include 'head.php';
			echo '<table>';
			echo '<form action=changepwd_1.php method=post>';
			echo '<tr><td>Old password :<td><input type=password name=oldpwd>';
			echo '<tr><td>new password :<td><input type=password name=newpwd>';
			echo '<tr><td>confirm password( type again ):<td><input type=password name=newpwd1>';
			echo '<tr><td colspan=2><input type=submit name=submit value=submit>';
			echo '</form>';
			echo '</table>';
		
	}
?>
			
