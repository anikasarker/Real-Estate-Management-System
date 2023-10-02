<?php
 require ('config.php'); 
// Get the user id 
$title= $_REQUEST['title'];
  
if ($title!== " ") {
      
 
    $query = mysqli_query($con, "SELECT title FROM property WHERE title='$title'");
  
    $row = mysqli_fetch_array($query);
  
  
}
  
// Store it in a array
$result = array("$title");

?>