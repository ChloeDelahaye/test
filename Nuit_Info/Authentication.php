<html>
	<body>

		<?php
			$user_input = $_POST['user'];
			$password_input = ($_POST['pass']);

			$file = fopen('login.txt', 'r');

			while(!feof($file)){
			    $line = fgets($file);
			    list($user, $password) = explode(':', $line);
			    if(trim($user) == $user_input && trim($password) == $password_input){
			        echo 'Logged in';
			        break;
			    }
			    else {
			    session_start();
                $_SESSION['message'] = 'Identifiant ou mot de passe invalide';
                header("Location: login.php");
                //echo 'invalid username or password';
         }
        
       }
			fclose($file);
		?>


	</body>
</html>