<?php
$con = mysqli_connect("localhost:3303", "root", "","exam");

class Product
{
	public $Name;
	public $Description;
	public $Category;
	public $Price;

	function __construct($id)	{
		if ($id !=""){
			$sql="select * from Products where ID=$id";
			$User = mysqli_query($GLOBALS['con'],$sql);
			if ($row = mysqli_fetch_array($User)){
				
				$this->Name=$row["Name"];
				$this->Description=$row["Description"];
				$this->Category=$row["Category"];
				$this->Price=$row["Price"];
			}
		}
	}
	static function InsertinDB_Static($Namee,$Descriptionn,$Categoryy,$Pricee)	{
		$sql="insert into Products(Name,Description,Category,Price) values ('$Namee','$Descriptionn','$Categoryy','$Pricee')";
		if(mysqli_query($GLOBALS['con'],$sql))
			return true;
		else
			return false;
	}
	static function SelectAllProductsInDB(){
		$sql="select * from Products";
		$Products = mysqli_query($GLOBALS['con'],$sql);
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($Products)){
			$MyObj= new Product($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}
}

?>