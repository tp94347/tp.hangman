<!DOCTYPE html>
<html>
    <body>
        <?php
            include("signup.php");
            session_start();

            /*
            $conn = new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
            */

            //check if password inputs are matching
            if($password != $confirmpassword)
            {
				header("Location: signup.php");
                echo "confirm password does not match password<br>";
                echo "Try again!";
            }
            
            /*
			$sqlcheck = $conn->query("SELECT * FROM HangManAccounts WHERE username = '$user'");
            
			//if account already exists, go back to signup page
			if($sqlcheck->num_rows > 0)
			{
				echo "Username " . $user . " is already existed. Please try with a different user name!";
				header("Location: signup.php");
			}
			else
			{
                // add salt and hash the password
                $salt = substr(md5(uniqid(rand(), TRUE)), 0, 4);
                $hashedpw = hash('sha256', $salt, $pw);

				$sqlinsert = "INSERT INTO HangManAccounts(username, password, hashedpassword) VALUES ('$user', '$pw', '$hasedpw')";
				echo "Account was successfully created!"
				header("Location: hangman.php");
            }
            */

            //$conn->close();

        ?>
    </body>
</html>