!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location des voiture</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style_Pic_Login.css">
</head>
<>
    <nav>
        <h1>D & A WHEELS</h1>
        <div class="onglets">
            <a href="Home.php" target="_self">Home</a>
            <a href="produits.php">Nos produits</a>
            <a href="#A propos">A propos</a>
            <a href="Login.php">Login</a>
        
        </div>
    </nav>
   
    <div id="id01" class="modal">
          
        <form class="modal-content animate" action="Loginphp.php" method="post">
          <div class="imgcontainer">
          <?php if (isset($_GET['error'])) { ?>
     		  <p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
            <img src="avatar.jpg" alt="Avatar" class="avatar">
          </div>
      
          <div class="container">
            <label for="uname" style="color: black ;"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" >
      
            <label for="password" style="color:black ;"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" >
              
            <button type="submit">Login</button>
            
          </div>
      
          
        </form>
      </div>
  <div class="slide">    
      <!-- Slideshow container -->
 <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="luxe/luxe4.png" style="width:100%;">
    <div class="text">luxe</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="S_C4.jpg" style="width:100%;">
    <div class="text">Supercars</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="F4.jpg" style="width:100%">
    <div class="text">Familly</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>
 <br>

 <!-- The dots/circles -->
  <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  </div>

  
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
    <!---Login css-->
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        
        /* Full-width input fields */
        input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #cccccc98;
          box-sizing: border-box;
          background-color: rgba(225, 248, 255, 0.973);
          border-radius: 20px 20px 20px 20px;
          
        }
        
        /* Set a style for all buttons */
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
      
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;

        }
        
        img.avatar {
          width: 30%;
          border-radius: 50%;
        }
        
        .container {
          padding: 16px;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
        }
        
        
        /* Modal Content/Box */
        .modal-content {
          background-color: grey;
          margin: 0% 0% 0% 0%;
          border: 1px solid #888;
          width: 30%;
          border-radius: 40px;
          position: absolute;
          right: 96px;
          bottom: 245px;
          
        }
      
     
        </style> 


 
 <script>        
       var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</body>
</html> 