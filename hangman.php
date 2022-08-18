<!DOCTYPE html>
<html>
    <body>
        <?php
            include("signin.php");
            session_start();

			$servername= "sql102.epizy.com";
			$username = "epiz_31690279";
			$password = "8m5b2h34";
			$dbname = "epiz_31690279_CS3750";

            $guessedValue = $_POST["guess"];

            $conn = new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }

			// ----- Hangman Game -----
			
			
			// randomly get a word
			$id = rand(1,20);
			$sqlword = $conn->query("SELECT Word FROM HangManWords WHERE ID = $id");
			$display = "";
			
			// display the length of the word
			for($x = 0; $x <= strlen($sqlword); $x++)
			{
				$display += "_";
			}
			
			echo $display;
			
			$wrongguess = 0;
			$guess = $_POST["guess"];
			
			while($wrongguess < 8)
			{
				// take input guess
				<p>Enter your guess: <input type="text" name="guess"/></p>
				
				// compare guess vs string
				for($x = 0; $x <= strlen($sqlword); $x++)
				{
					// if correct, display the char(s)
					if($guess === $sqlword[$x])
					{
						$display[$x] = $sqlword[$x];
						echo $display;
					} else 
					{
						$wrongguess++;
					}
				}
			} else
			{
				echo "You have used all attemps! Try Again."
			}

			// store the guess into guess column
			$recordinsert = $conn->query("INSERT INTO HangManAccounts(score) VALUES($wrongguess) WHERE username = '$user'");
			
			//display high scores
        ?>

    </body>
</html>