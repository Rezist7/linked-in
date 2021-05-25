<?php

$con=mysqli_connect("localhost","root","","linkin");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


setcookie("username", "John Carter", time()+30*24*60*60);

if(isset($_COOKIE["username"])){
    echo "Hi " . $_COOKIE["username"];
} else{
    echo "Welcome Guest!";
}



/*$sql="SELECT * FROM blogs  WHERE category LIKE '%Entertainments%'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $row_entertainment=mysqli_num_rows($result);
 }
 $sql="SELECT * FROM blogs  WHERE category LIKE '%Styles%'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $row_style=mysqli_num_rows($result);
 }
 $sql="SELECT * FROM blogs  WHERE category LIKE '%Lifestyle%'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $row_life=mysqli_num_rows($result);
 }
 $sql="SELECT * FROM blogs  WHERE category LIKE '%Sports%'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $row_sports=mysqli_num_rows($result);
 }
 $sql="SELECT * FROM blogs  WHERE category LIKE '%Foods%'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $row_food=mysqli_num_rows($result);
 }
  $sql="SELECT * FROM blogs  WHERE category LIKE '%Drinks%'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $row_drinks=mysqli_num_rows($result);
 }

mysqli_close($con);*/
?>