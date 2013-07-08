<html>
<body>
<?php
	if(isset($_POST['submit']))
	{
	//echo 'In the Process.....';
	$mysqlObj =  mysql_connect('127.0.0.1' , 'root' , 'webonise6186');

	//echo 'In the Process-------';
       if(!$mysqlObj) {    
		    die('[' . mysql_errorno() . ']Could not connect to the DB : ' .mysql_error());   
	    }
	else
	{
		mysql_select_db('registration') or die(mysql_error());
	$query="insert into users values('','".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['biography']."','".$_POST['addr1']."','".$_POST['addr2']."','".$_POST['landmark']."','".$_POST['city']."','".$_POST['state']."','".$_POST['country']."','".$_POST['pin']."','user')";
		echo '<br>'.$query.'<br>';

		
		$result=mysql_query($query) or die (mysql_error());
		if($result){
			echo 'you are registered successfully<br>';
			echo 'You can login now <a href=http://localhost/assignment_3/login.php> Login</a>';
		}

	}
	}else
	{
		echo 'NOTHING !!!';
	}
?>
</body>
</html>
