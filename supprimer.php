<?php
 include "conn.php";
 $delete_id = $_GET['id'];

 $stmt = $conn->prepare("DELETE FROM voitures WHERE id=?");
 $stmt->bind_param("i", $delete_id);
 $stmt->execute();
 echo "<script>alert('Success')</script>";
   
    
 header("Location: admin.php");
  
 ?>