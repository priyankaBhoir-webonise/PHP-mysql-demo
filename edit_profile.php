<?php
	session_start();
	if(isset($_SESSION['username']))
	{
	
			include 'head.php';
			include 'connection.php';

			mysql_select_db('registration') or die(mysql_error());
			$query="select * from users where email_id='".$_SESSION['username']."' ";
			$result=mysql_query($query);
			$line = mysql_fetch_array($result, MYSQL_ASSOC);

		
			echo '<form action="update_profile.php" method ="post">';
			echo '<table border=1>';
			echo '<tr hidden><td>User id : <td><input type="text" name="uid" id="uid" value='.$line['id'].' hidden><br><br>';
			echo '<tr><td>First name : <td><input type="text" name="fname" id="fname" value='.$line['fname'].'><br><br>';
			echo '<tr><td>Last name : <td><input type="text" name="lname" id="lname"  value='.$line['lname'].'><br><br>';
			echo '<tr><td>Biography:	  <td><input type="textarea" name="biography" value='.$line['biography'].'><br><br>';
			echo '<tr><td colspan=2>Address:';
						echo '<table>';
						echo '<tr><td>address1:<td><input type="text" name="addr1" value='.$line['addr1'].'> ';
						echo '<tr><td>address2:<td><input type="text" name="addr2" value='.$line['addr2'].'> '; 
						echo '<tr><td>landmark :<td><input type="text" name="landmark"  value='.$line['landmark'].'>'; 
						echo '<tr><td>city:<td><input type="text" name="city" value='.$line['city'].' >'; 
						echo '<tr><td>state:<td><input type="text" name="state" value='.$line['state'].'>';
						echo '<tr><td>country:<td><input type="text" name="country" value='.$line['country'].'>';
						echo '<tr><td>pin:<td><input type="text" name="pin" value='.$line['pincode'].'>';  
						echo '</table>';
			echo '<tr><td colspan=2 align=center><input type="submit" name="submit" value="submit">';
			echo '</table>';
			echo '</form>';
		
	}
	else
	{
		
	}
	?>
	
	
