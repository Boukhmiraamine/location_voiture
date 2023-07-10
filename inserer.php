<?php 
session_start(); 
include "conn.php";
$user_name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["psw"];
if (!empty($user_name) && !empty($email)&& !empty($password)){
    $stmt = $conn->prepare("INSERT INTO admin (user_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user_name, $email, $password);
    $stmt->execute();
    echo "<script>alert('Success')</script>";
   
    
    header("Location: admin.php");
}
else{
    
    echo "<script>alert('erreur')</script>";
    header("Location: admin.php");
}
?>