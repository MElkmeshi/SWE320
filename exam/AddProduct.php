<?php
include_once "ProductClass.php";


if(isset($_POST['Submit'])){ //check if form was submitted
	$Name = $_POST['Name'];
	$Description = $_POST['Description'];
	$Category = $_POST['Category'];
	$Price = $_POST['Price'];
	
	if(Product::InsertinDB_Static($Name,$Description,$Category,$Price)){
		header("Location:index.php");
	}
	
}
?>
<h1>Add Product</h1>
<form action="" method="POST">
  Product Name:<br>
  <input type="text" name="Name"><br>
  Product Description:<br>
  <input type="text" name="Description"><br>
  Product Category:<br>
  <input type="text" name="Category"><br>
  Price:<br>
  <input type="number" name="Price"><br>
<br>
  <input type="submit" value="Done" name="Submit">

</form>