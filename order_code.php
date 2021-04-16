<?php
require_once('second connection.php');
$name = $phone = $address = $food_name = $food_type = '';

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$food_name = $_POST['food_name'];
$food_type = $_POST['food_type'];


$sql = 
INSERT INTO `tblorder` (`name`, `phone`, `address`, `food_name`, `food_type`) VALUES ('Juni Chakma', '01645763117', 'college gate, khagrachari sadar', 'burger 2pcs', 'non-veg');
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: header1.php");
}
else
{
	echo "Error :".$sql;
}
?>
