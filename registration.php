<!DOCTYPE html>
<?php 
		$array_hobbies=array('reading','traveling','music');
		$countries=array('select','india','united_kingdom','shrilanka','United_state');
?>
<html>
	<head>
		<title> assignment - 2 : sever side validation </title>
	</head>
	<body>
		
		<h2 align=center>Registration</h2>
		<div name="form_div" >
		<frame id="1" border=1>
		<form action="register.php" method ="post">
		<table border=1>
		<tr><td>First name : <td><input type="text" name="fname" id="fname" "><br><br>
		<tr><td>Last name : <td><input type="text" name="lname" id="lname"   ><br><br>
		<tr><td>Gender :      <td><input type="radio" name="gender" value="male" >Male
						         <input type="radio" name="gender" value="female">Female<br><br>
		<tr><td>email :	  <td><input type="text" name="email" > <br><br>
		<tr><td>Password :   <td> <input type="password" name="password" ><br ><br>
		<tr><td>Biography:	  <td><textarea name="biography" rows="5" cols="25"></textarea><br><br>
		<tr><td colspan=2> <frame id="2">
						Address:
						<table>
						<tr><td>address1:<td><input type="text" name="addr1" > 
						<tr><td>address2:<td><input type="text" name="addr2" > 
						<tr><td>landmark :<td><input type="text" name="landmark" > 
						<tr><td>city:<td><input type="text" name="city" > 
						<tr><td>state:<td><input type="text" name="state" >
						<tr><td>country:<td><input type="text" name="country" >
						<tr><td>pin:<td><input type="text" name="pin" >  
						 </table>
						</frame>
		<tr><td colspan=2 align=center><input type="submit" name="submit" value="submit">
		</table>
		</form>
		</frame>
		
		</div>
	</body>
</html>
		
