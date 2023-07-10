<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location des voiture</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="Style_Forums.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <h1>D & A WHEELS</h1>
        <div class="onglets">
            <a href="index.php">Home</a>
            <a href="productsf.php">Nos produits</a>
            <a href="#A propos">A propos</a>
    
        
        </div>
    </nav>
   

    <form action=""  method="POST" style="border:1px solid #ccc;background-color: rgba(221, 204, 204, 0.788); position:relative ;left: 400px; ">
      <div class="container">
        <h1>Ajouter client</h1>
        <p>Priére de remplire ce formulaire.</p>
        <hr>
        
        <label for="Name"><b>Nom Complet</b></label>
        <input type="text" placeholder="Enter your full name" name="name" required>

        <label for="addresse"><b>Addresse</b></label>
        <input type="text" placeholder="Entrer addresse" name="addresse" required>
    
        <label for="tel"><b>N° telephone</b></label>
        <input type="number" placeholder="Enter votre numero portable" name="tel" required>
    
        <label for="date"><b>Date de reservation </b></label>
        <input type="date"  name="date1" required> <br>

        <label for="date"><b>Date de retour </b></label>
        <input type="date"  name="date2" required> <br>

        <div class="clearfix">
          
          <button type="submit" class="signupbtn" name="ajouter" >Ajouter</button>
        </div>
      </div>
    </form>

   
    
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        button {
          background-color: black;
          color:white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          border-radius: 50px;
        }
        
        button:hover {
          opacity: 0.8;
        }
        </style> 
<?php 
 if(isset($_POST["ajouter"])){

 
include "conn.php";
$client_name=$_POST["name"];
$addresse=$_POST["addresse"];
$tel=$_POST["tel"];
$prise=$_POST["date1"];
$retour=$_POST["date2"];
$id_voiture=$_GET["id"];
if (!empty($client_name) && !empty($addresse) && !empty($tel) && !empty($prise) && !empty($retour) && !empty($id_voiture)){
    $stmt = $conn->prepare("INSERT INTO client (fullname, addresse, tele,prise,retour,id_voiture) VALUES (?, ?, ?,?, ?, ?)");
    $stmt->bind_param("sssssi", $client_name, $addresse, $tel,$prise,$retour,$id_voiture);
    $stmt->execute();
    echo "<script>alert('Success')</script>";
   
    
   /* header("Location: forum_client.php");*/
}
else{
    
    echo "<script>alert('erreur')</script>";
   /* header("Location: forum_client.php");*/
}
 }
?>

 
</body>

</html>