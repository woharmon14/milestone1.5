<?php
function display_content(){

if($_SESSION['role']=='admin'){

	if(isset($_POST['save'])){
		$string = file_get_contents("items.json");
		$items = json_decode($string, true);

		$new_item['image'] = $_POST['image'];
		$new_item['title'] = $_POST['title'];
		$new_item['artist'] = $_POST['artist'];
		$new_item['released'] = $_POST['released'];
		$new_item['genre'] = $_POST['genre'];
		$new_item['length'] = $_POST['length'];
		$new_item['label'] = $_POST['label'];
		$new_item['price'] = $_POST['price'];

		$items[] = $new_item;
		
		$fp = fopen('items.json', 'w');
		fwrite($fp, json_encode($items, JSON_PRETTY_PRINT));
		fclose($fp);
	}

$string = file_get_contents("items.json");
$album = json_decode($string, true);

// For Each
	foreach ($album as $key => $row) {
		$title = $row['title'];
		$artist = $row['artist'];
		$image = $row['image'];
		$released = $row['released'];
		$genre = $row['genre'];
		$length = $row['length'];
		$label = $row['label'];
		$price = $row['price'];
		
//Form of Arrays to be displayed	
		echo "<div class='col-3 col-md-6 col-sm-12' style='height: 800px; text-align: center; border:3px solid white; color: white; font-size: 1.2em; margin: 10px'>";
		echo "<img src='$image' style='height: 300px; width: 300px; margin-top:30px;'>";
		echo "<h3 style='border-bottom: 2px solid grey; margin: 20px 0; padding-bottom: 15px;'>$title</h3>";
		echo "<p>Artist: $artist</p>";
		echo "<p>Released: $released</p>";
		echo "<p>Genre: $genre</p>";
		echo "<p>Length: $length</p>";
		echo "<p>Label: $label</p>";
		echo "<p>Price: $price</p>";
		echo "<a href='edit.php?key=$key'><button style='color:Black; margin: 20px;'>Edit</button></a>";
		echo "<a href='delete.php?key=$key' onclick='myFunction()'><button style='color:Black; margin: 20px;'>Delete</button></a>";
		echo "</div>";

			}


//Adding Items Form
		echo "
			<div class='col-12' style='text-align:center; color:white; line-height: 40px;'>
			<h2>Add Items</h2>
			<form method='POST'>
				<label>Image URL</label> <br>
				<input type='text' name='image' style='width:40%'></input><br>
				<label>Title</label> <br>
				<input type='text' name='title' style='width:40%'></input> <br>
				<label>Artist</label> <br>
				<input type='text' name='artist' style='width:40%'></input><br>	
				<label>Release Date</label> <br>
				<input type='text' name='released' style='width:40%'></input><br>
				<label>Genre</label> <br>
				<input type='text' name='genre' style='width:40%'></input><br>
				<label>Length</label> <br>
				<input type='text' name='length' style='width:40%'></input><br>
				<label>Label</label> <br>
				<input type='text' name='label' style='width:40%'></input><br>
				<label>Price</label> <br>
				<input type='text' name='price' style='width:40%'></input><br>
				<input type='submit' value='SAVE' name='save' style='margin:10px 20px; width:100px;'></input>
			</form>
			 </div>";

	} else {
		echo "You are not an ADMIN!";
	}
}

require_once('index.php');
?>