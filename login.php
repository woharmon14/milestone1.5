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

<div class="col-4" style="text-align: center; margin: 50px 500px; border: 3px solid white; ">
<form method="POST">
  <h2 style="color:white; padding-bottom: 20px;"><strong>LOGIN</strong></h2>
    <h4 style="color:white"> Username: </h4>
    <input input type="text" name="username" style="color:grey; width: 60%;"></input>
    <h4 style="color:white"> Password: </h4>
    <input type="text" name="password" style="color:grey; width: 60%;"></input>
    <br>
    <input type="submit" name="login" value="Login" style="color: rgb(31,31,31); margin-top: 15px; font-size: 15px; margin-bottom: 10px;">
    <h4><a>Forgot Password?</a></h4>
    <h4><a href='register.php'>Register</a></h4>
</form>  
</div>
<?php 
} else {
  echo "<div style='text-align:center; padding:50px 20px; margin: 100px; border: 5px solid white;'>";
  echo "<h4 style='color:white; font-size: 3em'>Welcome Back ".$_SESSION['role']." ".$_SESSION['username'];
  echo "</h4><br>";
  echo "<a href='logout.php'><button>Logout</button></a>";
  echo "</div>";
}
?>


<?php }
require_once('index.php');
?>

