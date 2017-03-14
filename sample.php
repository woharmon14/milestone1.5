<!DOCTYPE html>
<html>
<head>
	<title>Log In Sample</title>
</head>
<body>
<?php

// $users = [
// 		 ['username'=>'woharu',
// 		 'password'=>'password'],
// 		 ['username'=>'test1',
// 		 'password'=>'password'],
// 		 ['username'=>'test2',
// 		 'password'=>'password'],

// ];

// 	$fp = fopen('users.json', 'w');
//  	fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
//  	fclose($fp);
$string = file_get_contents("users.json");
$users = json_decode($string, true);

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	foreach ($users as $user) {
		if ($username==$user['username'] && $password==$user['password'])
		echo "log in successful!";
		 
	}
}

if (isset($_POST['register'])) {
	$new_user = ['username' => $_POST['username'],
				'password' => $_POST['password']];

		if ($_POST['password']==$_POST['confirmpw']) {
			$string = file_get_contents("users.json");
			$users = json_decode($string, true);
		
		$users[] = $new_user;

		$fp = fopen('users.json', 'w');
 		fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
 		fclose($fp);
 		echo "Registration successful!";
		 
	}
}



?>

<form method="POST"> <!-- post because it will link the arrays to the form -->
<h3>LOGIN</h3>
Username:<input type="text" name="username"></input>
<br>
Password:<input type="password" name="password"></input>
<br>
	<input type="submit" name="login" value="login"></input>
</form>
<br>

<form method="POST"> <!-- post because it will link the arrays to the form -->
<h3>Registration</h3>
Username:<input type="text" name="username"></input>
<br>
Password:<input type="password" name="password"></input>
<br>
Confirm Password:<input type="password" name="confirmpw"></input>
<br>
	<input type="submit" name="register" value="register"></input>
</form>
</body>
</html>