<?php 
include "conn.php";
$sql = "SELECT * FROM voitures WHERE id=".$_GET['id']." ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location des voiture</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="Style_Forums.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <style>
        .sidebar {
  height: 83%;
  width: 160px;
  position: absolute;
  z-index: 1;
  top: 45px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

/* Style sidebar links */
.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

/* Style links on mouse-over */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Style the main content */
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

/* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
    </style>
</head>
<body>
    <nav>
        <h1>D & A WHEELS</h1>
        <div class="onglets">
            <a href="Home.php" target="_self">Home</a>
            <a href="productsSM.php">Nos produits</a>
            <a href="#A propos">A propos</a>
            <a href="Logoutphp.php">Logout</a>
        
        </div>
    </nav>
    <div class="sidebar">
  <a href="#"><i class="fa fa-fw fa-home"></i>Dashboard</a>
 
     </div>

    <form   action="" method="POST" enctype="multipart/form-data" style="border:1px solid #ccc;background-color:rgba(221, 204, 204, 0.788);">
      <div class="container">
        <h1>Modifier tes voitures</h1>
        <p>Please fill in this form to modifie your car.</p>
        <hr>
        
        <label for="Name"><b>Nom</b></label>
        <input type="text" placeholder="Enter your full name" name="name"  value="<?php echo $row['name'] ?>" required>
        
        <label for="color"><b>Couleur</b></label>
        <input type="text"  name="color" value="<?php echo $row['color'] ?>"  required>
        
        <label for="Price"><b>Prix</b></label>
        <input type="text" placeholder="Enter Price"name="Price" value="<?php echo $row['price'] ?>"  required>   
        <input type="hidden" placeholder="Enter id"name="id" value="<?php echo $row['id'] ?>"  required>     
        
        <div class="clearfix">
          
          <input type="file" id="myFile" name="filename" style="background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;" required>
          <input type="submit" name="btmod" value="mettre a jour" style="background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;">
          <p> <a href="admin.php"  class="submit"> RETOUR AU Dashboard </a> </p>
          <label style="text-align:center ; color: black;">
          
          
        </div>
      </div>
    </form>
    <?php 
    if (isset($_POST['btmod'])){
      $name=$_POST["name"];
      $color=$_POST["color"];
      $Price=$_POST["Price"];
      $src_file=$_FILES["filename"]["tmp_name"];
      $modifier=$_POST['id'];
      $dst_file = "uploads/".$_FILES["filename"]["name"];
      move_uploaded_file($src_file,$dst_file);
        $stmt = $conn->prepare("UPDATE voitures SET name=?, color=? , price=?, filename=? WHERE id=?");
        $stmt->bind_param("ssssi",$name, $color, $Price,$dst_file,$modifier);
        $stmt->execute();
        echo "<script>alert('mise a jour done')</script>";
  } 
  ?>
        
</body>
</html>