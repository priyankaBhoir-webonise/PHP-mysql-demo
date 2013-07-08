<?php 
	session_start();

	if(isset($_SESSION['username']))
	{
			include 'connection.php';
			mysql_select_db('registration') or die(mysql_error());

	 		$query="update users set fname ='".$_POST['fname']."',lname='".$_POST['lname']."',biography='".$_POST['biography']."',addr1='".$_POST['addr1']."',addr2='".$_POST['addr2']."',landmark='".$_POST['landmark']."',city='".$_POST['city']."',state='".$_POST['state']."',country='".$_POST['country']."',pincode='".$_POST['pin']."' where id='".$_POST['uid']."' ";

			$result=mysql_query($query);
			if($result===true){
				echo 'Profile edited successfully';
				echo '<br><a href=home.php>Home Page</a>';
			}
			else
				echo 'Error';
	}
?>
