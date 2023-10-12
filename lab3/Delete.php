<?php
//lab task delete the user from database and destroy session
include_once "includes/dbh.inc.php";
session_start();
$sql="DELETE FROM users
WHERE  ID =".$_SESSION['ID'];
	$result=mysqli_query($conn,$sql);
session_destroy();
header("Location:index.php");
?>