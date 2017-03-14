<?php
function display_content(){
?>


<?php
$string = file_get_contents("items.json");
$items = json_decode($string, true);

if(isset($_SESSION['cart_items']))
	echo "<h1 style='text-align:center; color:white'>Cart Items</h1>";
	echo "<a href='data.php'> <h3 style='text-align:center;''> << Back to Items</h3></a>";
	echo "<div  id='grad' class='row footer-1' style='height: 20px; background: linear-gradient(to right, red , yellow)'>
</div>";
{
	foreach ($_SESSION['cart_items'] as $key => $quantity) {
		$title = $items[$key]['title'];
		$artist = $items[$key]['artist'];
		$image = $items[$key]['image'];
		$released = $items[$key]['released'];
		$genre = $items[$key]['genre'];
		$length = $items[$key]['length'];
		$label = $items[$key]['label'];
		$price = $items[$key]['price'];

		
		echo "<div class='col-3 col-md-6 col-sm-12' style='height: 600px; text-align: center; border:5px solid white; color: white; font-size: 1.2em; margin: 50px; box-shadow: 10px 10px 5px grey; background: hsla(0, 100%, 90%, 0.3);'>";
		echo "<div class='item_image'><img src='$image' style='height:75%; width:75%; margin-top: 40px'></div>";

		echo "<h3>$title </h3> <h5></h5> $artist <br> Php $price";
		echo "<a href='removefromcart.php?key=$key'><br><button style='color:Black; margin: 20px;'>Remove</button></a>";

		echo "<div style='clear:both'></div>";
		echo "</div>";
	}
}

?>

<?php }
require_once('index.php');
?>