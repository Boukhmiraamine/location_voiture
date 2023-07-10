<?php 
session_start(); 
include "conn.php";
$name=$_POST["name"];
$color=$_POST["color"];
$Price=$_POST["Price"];
$src_file=$_FILES["filename"]["tmp_name"];
$dst_file = "uploads/".$_FILES["filename"]["name"];
$size_file= $_FILES["filename"]["size"];

	$extension= pathinfo($dst_file ,PATHINFO_EXTENSION);


	if($extension=="png" or $extension=="jpg" or $extension=="gif")
		{
			if($size_file<10000000)	
				if(move_uploaded_file($src_file,$dst_file))
				{
					echo "File has been uploaded <br>";
				}
				else
				{
					echo "file has not been uplaoded";
				}
			else
				echo "The selected file is too large";
		}
		else
			echo "Only images are allowed<br>";
	
if (!empty($name) && !empty($color) && !empty($Price) && !empty($dst_file)){
    $stmt = $conn->prepare("INSERT INTO voitures (name, color, Price,filename) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss",$name, $color, $Price, $dst_file);
    $stmt->execute();
    echo "<script>alert('Success')</script>";
   header("Location: admin.php");
}
else{
   echo "<script>alert('erreur')</script>";
   header("Location: admin.php");
}