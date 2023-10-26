<table>
<tr>
    <th>Name</th>
    <th>Description</th>
    <th>Category</th>
    <th>Price</th>
  </tr>
  <?php
  include_once "ProductClass.php";
  $obj=Product::SelectAllProductsInDB();
  for ($i=0;$i<count($obj);$i++){
      echo "<tr>";
      echo "<th>". $obj[$i]->Name."</th>";
	echo "<th>". $obj[$i]->Description."</th>";
	echo "<th>". $obj[$i]->Category."</th>";
	echo "<th>". $obj[$i]->Price."</th>";
    echo "</tr>";
	}
    
    ?>

</table>
