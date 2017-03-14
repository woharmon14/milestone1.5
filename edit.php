<?php
function display_content(){
	$key = $_GET['key'];
	//JSON FILE
	$string = file_get_contents("items.json");
	$items = json_decode($string, true);

	//to edit
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
//replace an entire array
			$items[$key] = $new_item;
//save
			$fp = fopen('items.json', 'w');
			fwrite($fp, json_encode($items, JSON_PRETTY_PRINT));
			fclose($fp);
//relocate after click
			header('location:admin.php');
		}
	}

echo "<div class='col-12' style='text-align:center; color: white; line-height: 35px; font-size: 1.2em'>
		<h2>Edit Items</h2>
		<form method='POST'>
			<label>Image URL</label> <br>
			<input type='text' name='image'  style='width:40%' value='".$items[$key]['image']."'></input><br>
			<label>Title</label> <br>
			<input type='text' name='title'  style='width:40%' value='".$items[$key]['title']."'></input> <br>
			<label>Artist</label> <br>
			<input type='text' name='artist' style='width:40%'  value='".$items[$key]['artist']."'></input><br>	
			<label>Release Date</label> <br>
			<input type='text' name='released' style='width:40%' value='".$items[$key]['released']."'></input><br>
			<label>Genre</label> <br>
			<input type='text' name='genre'  style='width:40%' value='".$items[$key]['genre']."'></input><br>
			<label>Length</label> <br>
			<input type='text' name='length' style='width:40%'  value='".$items[$key]['length']."'></input><br>
			<label>Label</label> <br>
			<input type='text' name='label'  style='width:40%' value='".$items[$key]['label']."'></input><br>
			<label>Price</label> <br>
			<input type='text' name='price'  style='width:40%' value='".$items[$key]['price']."'></input><br>
			<input type='submit' value='SAVE' name='save' style='margin:10px 20px; width:100px;'></input>
		</form>
		 </div>";

}

require_once('index.php');
?>
