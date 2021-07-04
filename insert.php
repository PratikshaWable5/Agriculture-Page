<?php

include_once "conn_database.php";

$name=$_POST['name1'];
$email=$_POST['email1'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$password=$_POST['pass1'];
$selection=$_POST['selection'];		
  

$query="insert into internship (name,email,address,contact,password,Type) values ('$name','$email','$address','$contact','$password','$selection')";

$run=mysqli_query($conn,$query);
if($run)
{
echo "success";
header('location: ../login.php');
}
else
{
	echo "no";

}


error_reporting(0); 


  $msg = ""; 
  
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "image/".$filename; 
          
    $db = mysqli_connect("localhost", "root", "rutu@2900", "sonoo"); 
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO photos (filename) VALUES ('$filename')"; 
  
        // Execute query 
        mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
  $result = mysqli_query($db, "SELECT * FROM image"); 

  
?> 

