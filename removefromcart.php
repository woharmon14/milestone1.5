<?php

$key = $_GET['key'];
session_start();

unset($_SESSION['cart_items'][$key]);

header('location:cart.php');

?>