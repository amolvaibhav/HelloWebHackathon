<?php
$msg="";
	if(isset($_REQUEST['btn']))
	{
		$h1=mysql_connect("localhost","root","") or die("Connection Failed..");
		mysql_select_db("test");
		$query="insert into teachers values('$_REQUEST[t_name]','$_REQUEST[t_email]',$_REQUEST[t_userID],'$_REQUEST[t_pass]')";
		mysql_query($query);
		if(mysql_affected_rows()>0)
		{
			$msg="<font color=green>YOU HAVE REGISTERED!";
		}
		else
		{
			$msg="<font color=red>TRY AGAIN!</font>";
		}
		mysql_close($h1);
	}
?><!-- Sign Up Page for Teacher -->
<!DOCTYPE HTML> 
<html> 
	<head> 
		<title>Sign-Up: Teacher</title> 
		<link rel="stylesheet" type="text/css" href="css/form.css">
	</head> 
<body id="body-color"> 
	<div class="container"> 
<form id="contact" method="POST" action="">
		<fieldset style="width:70%">
			<legend><h3>Teacher Registration</h3></legend>
			<h4>Enter Your Details</h4> 
				<table border="0"> 
					<tr> 
						
		 				<td>Name</td><td> <input type="text" name="s_name"></td> 
		 			</tr> 
		 			<tr> 
		 				<td>Email</td><td> <input type="text" name="s_email"></td> 
		 			</tr> 
		 			<tr> 
		 				<td>Roll</td><td> <input type="text" name="s_userID"></td> 
		 			</tr> 
		 			<tr> 
		 				<td>Password</td><td> <input type="password" name="s_pass"></td>
		 			</tr> 
		 			<tr> 
		 				<td>Confirm Password </td><td><input type="password" name="s_cpass"></td> 
		 			</tr> 
		 			<tr> 
		 				<td><button id="contact-submit" type="submit" name="btn">Sign up</button></td> 
		 			</tr> 
		 			<?php echo "$msg"; ?>
		 			</form> 
		 		</table> 
			</fieldset> 
		</div> 
	</body> 
</html>
