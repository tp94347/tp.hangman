<?php 
	session_start(); 
?>

<!DOCTYPE html>
<html>
	<body>
		<?php 
			$user = $_POST["username"];
			$pw = $_POST["password"];
			
		?>
			
		<p>User Name: <input type="text" name="username"/></p>
		<br>
		<p>Password: <input type="text" name="password"/></p>
		<br>
		   
		<form action="checksignin.php">
			<input type="submit" value="Sign In" />
		</form>
	</body>
</html>
