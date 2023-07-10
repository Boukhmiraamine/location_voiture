
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location des voiture</title>
    <link rel="stylesheet" href="styleproducts.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <h1>D & A WHEELS</h1>
        <div class="onglets">
            <a href="index.php" target="_self">Home</a>
            <a href="productsf.php">Nos catégories</a>
            <a href="#A propos">A propos</a>
            <a href="Logoutphp.php">Logout</a> 
        
        </div>
    </nav>
    <div class="secondrow">
        <?php  include "conn.php";
       $sql="select id,name,color,Price,filename from voitures";

       $result=$conn->query($sql);
       while ($row = $result->fetch_assoc()) {
        
       

		         ?>
        <div class="product">
            <img src="<?php echo $row["filename"] ?>">
            <h3>  <?php echo $row["name"] ?> </h3>
            <h2><?php echo $row["Price"] ?> $ </h2> 
            <h4><?php echo $row["color"] ?> </h4> <br>

            
            <a id="R"  name="mod" href="modifier.php?id=<?php echo $row['id'] ?>">Modifier </a> 
            <a id="R"  name="sup" href="supprimer.php?id=<?php echo $row['id'] ?>">Supprimer </a> 
        </div> 
        <?php   } ?> 
        
        
    </div>
        
    <style>
         
        /* Set a style for all buttons */
        #R {
          background-color:white;
          color:black;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 38%;
          border-radius: 50px;
          text-decoration:none;
        }
        #R:hover {
          opacity: 0.8;
        }
     
        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
        }
        .container {
          padding: 16px;
        }
         span.psw {
          float: right;
          padding-top: 16px;
        }       
        
</style>      
</body>
</html>