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
            <a href="Home.php">Home</a>
            <a href="produits.php">Nos produits</a>
            <a href="#A propos">A propos</a>
            <a href="Login.php">Login</a>
        
        </div>
    </nav>
   
    <form action="action_page.php" style="border:1px solid #ccc;background-color: rgba(221, 204, 204, 0.788); position:relative ;left: 400px; ">
      <div class="container">
        <h1>Add CLIENT</h1>
        <p>Please fill in this form to reserve the car.</p>
        <hr>
        
        <label for="Name"><b>Full Name</b></label>
        <input type="text" placeholder="Enter your full name" name="name" required>

        <label for="age"><b>user_name</b></label>
        <input type="number" placeholder="Entrer l'age" name="age" required>
    
        <label for="tel"><b>N° telephone</b></label>
        <input type="number" placeholder="Enter votre numero portable" name="tel" required>
    
        <label for="date"><b>Date</b></label>
        <input type="date"  name="date" required>
    
       
    
      
        <div class="clearfix">
          
          <button type="submit" class="signupbtn">Ajouter</button>
        </div>
      </div>
    </form>
    <footer>

        <h1>A propos</h1>
        <div class="services">
            <div class="service">
                <p> <br> Bienvenue sur le blog de l'agence D & A. Sur ce site,vous pourrez vous informer des dernières tendances dans le domaine du marketing des voitures. Vous pouvez consulter notre barre de navigation pour découvrir les élémens du note site web.
                    Nous nous faisons un plaisir de toujours vous fournir des contenu de haute qualité.Si vous souhaitez aller plus loin et profiter de nos services.
                    envoyez nous un mail aux admins:Mlle  Douha Nassif & Mr.Mohamed Amine Boukhmira.</p>
            </div>
        </div>

        <p id="A propos">Contact : 0642218284 | &copy; 2022, voitures</p>
    </footer>
    
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
</body>
</html>