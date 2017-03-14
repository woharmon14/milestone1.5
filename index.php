<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Template</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="A Bootstrap carousel example with centered form">
        
  		<link rel="stylesheet" type="text/css" href="freshcss.css">
  	
</head>
<style>
  label {
  font-size: 1.2em

}

</style>
<body style="overflow: none">

<div class="container-fluid" >
<!-- Header -->
<div class="row header">
	<div class="col-6"><h1 style="font-size: 3em; font-weight: bold;">音楽図書館</h1></div>
	<div class="col-6">
		<ul class="nav">
			<li><a href="home.php">Home</a></li>
			<li><a href="data.php">Items</a></li>
<?php 
 if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
 	echo "<li><a href='admin.php'>Admin</a></li>";
}
?>
			<li><a href="#contact">Contacts</a></li>
		</ul>
	</div>
</div> <!-- End of Header -->

<!-- Section -->
<div class="row" >
	<div class="col-12" id="data" style="background-color: rgb(31,31,31)">
		<?php display_content(); ?>
	</div>
</div> <!-- End of Section -->

<!--  Footer 1 -->


<!--  Footer 2 -->
<div  id="grad" class="row footer-1" style="height: 20px; background: linear-gradient(to right, red , yellow)">
</div>

<!--  Footer 2 -->
<footer class="container-fluid bg-4 text-center" style="padding: 10px 0 20px 0; background-color: rgb(31,31,31); color:white; text-align: center;">
  <h5><a href="https://www.facebook.com/woharmon.scheiz">Michael Harmon Doctolero</a> | My Sample Portfolios</h5>
    
    <div class="logo">
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145802.svg" style="height: 50px; width: 50px"></a>
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145812.svg" style="height: 50px; width: 50px"></a>
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145811.svg" style="height: 50px; width: 50px"></a>
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145804.svg" style="height: 50px; width: 50px"></a>
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145808.svg" style="height: 50px; width: 50px"></a>
    </div>

   </footer>
<!-- End of Foooter -->
</div> <!-- End of Container -->

<!-- JS -->


	
</script>
<script>
function myFunction() {
    confirm("Confirm to Delete an Item?");
}
</script>




<!-- JS -->

</body>
</html>
