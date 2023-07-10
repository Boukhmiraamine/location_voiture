<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

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
     
    <form action="inserer.php" method="POST" style="border:1px solid #ccc;background-color: rgba(221, 204, 204, 0.788);">
      <div class="container">
        <h1>Ajouter des admins</h1>
        <p>Priére de remplire ce formulaire.</p>
        <hr>
        
        <label for="Name"><b>Nom Complet</b></label>
        <input type="text" placeholder="Enter your full name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
    
        <label for="psw"><b>mot de pass </b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <div class="clearfix">
          
          <button type="submit" class="signupbtn">Ajouter</button>
        </div>
      </div>
    </form>

    <form   action="insererimg.php" method="POST" enctype="multipart/form-data" style="border:1px solid #ccc;background-color:rgba(221, 204, 204, 0.788);">
      <div class="container">
        <h1>Ajouter des voitures </h1>
        <p>Priére de remplire ce formulaire </p>
        <hr>
        
        <label for="Name"><b>NOM</b></label>
        <input type="text" placeholder="Enter your full name" name="name" required>
        
        <label for="color"><b>Couleur</b></label>
        <input type="text"  name="color" required>
        
        <label for="price"><b>Prix</b></label>
        <input type="number" placeholder="Enter Price" name="Price" required>        
        
        <div class="clearfix">
          
          <input type="file" id="myFile" name="filename" style="background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;">
          <input type="submit" style="background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;">
        </div>
      </div>
    </form>


    
    
    <?php 
}else{
     header("Location: Login.php");
     exit();
}
 ?>
  
        
</body>
</html>