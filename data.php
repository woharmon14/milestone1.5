<?php

function display_content(){
if(isset($_SESSION['username'])){


$string = file_get_contents("items.json");
$album = json_decode($string, true);

	foreach ($album as $key => $row) {
		$title = $row['title'];
		$artist = $row['artist'];
		$image = $row['image'];
		$released = $row['released'];
		$genre = $row['genre'];
		$length = $row['length'];
		$label = $row['label'];
		$price = $row['price'];
		
	
		echo "<div class='col-3 col-md-6 col-sm-12' style='height: 800px; text-align: center; border:5px solid white; color: white; font-size: 1.2em; margin: 20px;'>";
		echo "<img src='$image' style='height: 300px; width: 300px; margin-top:30px;'>";
		echo "<h3 style='border-bottom: 2px solid grey; margin: 20px 0; padding-bottom: 15px;'>$title</h3>";
		echo "<p>Artist: $artist</p>";
		echo "<p>Released: $released</p>";
		echo "<p>Genre: $genre</p>";
		echo "<p>Length: $length</p>";
		echo "<p>Label: $label</p>";
		echo "<p>Price: $price</p>";

		echo "<a href='addtocart.php?key=$key'><button style='color:Black; margin: 30px;'><i class='fa fa-shopping-cart fa-lg' aria-hidden='true'></i> Add to Cart</button></a>";
	
		echo "</div>";



	}
} else {
	echo "<div style='text-align:center'>";
	echo "<h1 style='color:white'>Please Log -In First!</h1>";
	echo "<a href='login.php'><input type='submit' name='login' value='Login' style='margin-bottom: 30px;'></input></a>";
	echo "</div>";
}
}

require_once('index.php');
?>