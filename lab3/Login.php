<?php
  include_once "includes/dbh.inc.php";
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
   <head>
     <title></title>
   </head>

   <body>
      <h1>Login</h1>
      <form action="" method="post">
      <label>Email:</label><br>
      <input type="text" name="Email">  <br>
      <label>Password:</label><br>
      <input type="Password" name="Password"><br>
      <input type="submit" value="Submit" name="Submit">
      <input type="reset">


</form>

 <?php
   //start session
   
   //include database connection file
   
   //grab data from user and see if it exists in database
   if($_SERVER["REQUEST_METHOD"]=="POST"){

    $Email=htmlspecialchars($_POST["Email"]);
	  $Password=htmlspecialchars($_POST["Password"]);
    $sql="SELECT * FROM users Where Email = '$Email'";
	  $result=mysqli_query($conn,$sql);
    
    //select data from database where email and password matches
    //if true then use session variables to use it as long as session is started
    if ($row = mysqli_fetch_array($result)){
    if($row["Password"] == $Password){
      $_SESSION["ID"] = $row["id"];
      $_SESSION["FName"]= $row["FirstName"];
      $_SESSION["LName"] = $row["LastName"];
      $_SESSION["Email"] = $row["Email"];
      $_SESSION["Password"] = $row["Password"];
      $_SESSION["Hobby"] = $row["Hobby"];
      header("Location:index.php");
    }
    else{
      echo "Password Inncrrect";
    }
  }
    else {
      echo "User was not Found";
    } 
   }

 
 ?>
   </body>
</html>
