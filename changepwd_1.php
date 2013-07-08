<?php 
	session_start();
	if(!isset($_SESSION)){
		header("Location: login.php");
	}
	else
	{
		include 'head.php';
		include 'connection.php';
		
			mysql_select_db('registration') or die(mysql_error());
			$query="select password from users where email_id='".$_SESSION['username']."' ";
			$result=mysql_query($query);
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
		
			if($line['password']===$_POST['oldpwd'] and $_POST['newpwd']===$_POST['newpwd1'])
			{
				$query="update users set password= '".$_POST['newpwd']."' where email_id='".$_SESSION['username']."' ";
				$result=mysql_query($query);
				echo '<br>Your password changed successfully<br>';
				echo 'Go to <a href=home.php> Home page</a>';
			}
			else if($line['password']!==$_POST['oldpwd'] )
			{
				echo '<br>Existing password not matching to your entered password<br>';
				echo 'Not '.$_SESSION['username'].' ? please go to login page <a href=login.php> login</a><br>'; 
				echo '<a href=changepwd.php>back</a>'; 
			}
			else
			{
				echo 'please retype your password<br>';
				echo '<a href=changepwd.php>back</a>'; 
			}
		
	}
?>

				
