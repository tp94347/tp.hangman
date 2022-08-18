<!DOCTYPE html>
<html>
    <body>
        <?php
            include("signin.php");
            session_start();

            $severname = "sql102.epizy.com";
            $username = "epiz_31690279";
            $password = "8m5b2h34";
            $dbname = "epiz_31690279_CS3750"

            $conn = new mysqli($severname, $username, $password, $dbname);
            if($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }

			$sqlcheck = $conn->query("SELECT UserName FROM HangmanAccounts WHERE username = '$user' AND password = '$pw'");
			
			//if there is no record, try again
			if($sqlcheck->num_rows != 1)
			{
				echo "Username or Password is incorrect! Try again.";
				header("Location: signin.php");
				exit();
			}
			//otherwise, log in
			else
			{
				echo "Successfully log in!"
				header(hangman.php);
				exit();
			}
			
            $conn->close();

        ?>
    </body>
</html>