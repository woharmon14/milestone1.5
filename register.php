<?php

function display_content(){

?>

<div class="col-4" style="margin: 50px 500px; border: 3px solid white; ">
<div  style="text-align: center;">
		<?php
$string = file_get_contents("users.json");
$users = json_decode($string, true);

if (isset($_POST['register'])) {
	$new_user = ['username' => $_POST['username'],
				'password' => $_POST['password'],
				'role'=>'regular'];

		if ($_POST['password']==$_POST['confirmpw']) {
			$string = file_get_contents("users.json");
			$users = json_decode($string, true);
		
		$users[] = $new_user;

		$fp = fopen('users.json', 'w');
 		fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
 		fclose($fp);
 		echo "<h2>Registration successful!</h2>";
		 
	}
}
?>


<form method="POST"> <!-- post because it will link the arrays to the form -->
<h2 style="color:white; padding-bottom: 20px;"><strong>Registration</strong></h2>
<h4 style="color:white"> Username: </h4>
<input type="text" name="username" style="width: 60%;"></input>
<br>
<h4 style="color:white"> Password: </h4>
<input type="text" name="password" style="width: 60%;"></input>
<br>
<h4 style="color:white"> Confirm Password: </h4><input type="text" name="confirmpw" style="width: 60%; margin-bottom: 20px;"><br>
	<input type="submit" name="register" value="submit"></input>
</form> <br>
<a href="login.php"><input type="submit" name="login" value="Login" style="margin-bottom: 30px;"></input></a>
</form>
		
	</div>
	</div>

<?php }

require_once('index.php');

?>
