<?php
function display_content(){
?>

	    <?php

$string = file_get_contents("users.json");
$users = json_decode($string, true);

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  foreach ($users as $user) {
    if($username==$user['username'] && $password==$user['password']){
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $user['role'];  

    }
  }
}

if(!isset($_SESSION['username'])){
?>
<form method="POST" style="z-index: 9999">
    <h4> Username: </h4>
    <input input type="text" name="username" style="color:grey;"></input>
    <h4> Password: </h4>
    <input type="text" name="password" style="color:grey;"></input>
    <br>
    <input type="submit" name="login" value="Login" style="color: rgb(31,31,31); margin-top: 5px; font-size: 15px;">
      <h5><a href='register.php'>Register</a></h5>
</form>  

<?php 
} else {
  echo "Welcome Back ".$_SESSION['role']." ".$_SESSION['username'];
  echo "<br>";
  echo "<a href='logout.php'><button>Logout</button></a>";
}
?>


<?php }
require_once('index2.php');
?>

