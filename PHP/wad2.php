<!DOCTYPE html>
<html>
<body style="background-image:url(giphy.gif)">
<title>Retete culinare</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Acasa</a>
  <a href="supeciorbe.html" onclick="w3_close()" class="w3-bar-item w3-button">Supe si ciorbe</a>
  <a href="#peste.html" onclick="w3_close()" class="w3-bar-item w3-button">Peste</a>
  <a href="#fructe_mare.html" onclick="w3_close()" class="w3-bar-item w3-button">Fructe de mare</a>
  <a href="#dulciuri.html" onclick="w3_close()" class="w3-bar-item w3-button">Dulciuri</a>
  <a href="#recenzii.html" onclick="w3_close()" class="w3-bar-item w3-button">Recenzii</a>
  <a href="#contact.html" onclick="w3_close()" class="w3-bar-item w3-button">Contact</a>
</nav>



<head> 
<style type="text/css">
    
    #buttons{
      position: relative;
      top: 0px;
      right: 0px;
    }
    .button { 
      width: 150px; 
      padding: 10px; 
      background-color: #FF8C00; 
      box-shadow: -8px 8px 10px 3px rgba(0,0,0,0.2);
      font-weight:bold; 
      text-decoration:none;
    } 
    .cover{ 
      position:fixed; 
      top:0;
      left:0; 
      background:rgba(0,0,0,0.6); 
      z-index:5; width:100%;
      height:100%; display:none; 
    } 
    #loginScreen,#registerScreen{ 
      height:250px;
      width:500px; 
      margin:auto auto auto 30%; 
      position:fixed;
      z-index:10; 
      display:none; 
      background-color: #EEE;
      border:5px solid #cccccc; 
      border-radius:10px; 
      overflow: hidden;
    } 

    #loginScreen:target, #registerScreen:target,
    #registerScreen:target + .cover,
    #loginScreen:target + .cover{ 
      display:block;
      opacity:2; 
      overflow: hidden;
    } 
    .cancel { 
      display:block; 
      position:absolute;
      top:3px; 
      right:2px; 
      background:rgb(245,245,245);
      color:black; 
      height:30px; 
      width:35px; 
      font-size:30px;
      text-decoration:none; 
      text-align:center; 
      font-weight:bold;
      
    } 
    #loginpannel,#registerpannel {
      height:180%;
      width:100%;
      top:-50px;
      
    }
    .w3-top {
      position: relative !important;
    }
    iframe { overflow:hidden; }
         </style> </head> <body>
            
            
            <div id="loginScreen"> <a href="#" class="cancel">&times;</a> <iframe id="loginpannel"src="index.php"></iframe></div> <div class="cover" ></div>
            <div id="registerScreen"> <a href="#" class="cancel">&times;</a> <iframe height="100px" width="100px" scrolling="no" id="registerpannel"src="register.php"></iframe></div> 
            <div class="cover" ></div> 
</body>


<!-- Top menu -->
<div class="w3-top">
  
  <div class="w3-red w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <!--<div class="w3-right w3-padding-16">Contact</div>-->
    <div class="w3-center w3-padding-16">Rețete culinare</div>
  </div>
</div>
<div id="buttons"align="right"> <br><br><br><br> <a href="#loginScreen" 
            class="button">Log In</a> 
            <a href="#registerScreen"
            class="button">Register</a>
          </div> 
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="mancare">
    <div class="w3-quarter">
      <img src="supa.jpg" alt="Supa" style="width:100%">
      <h3>Supe tradiționale</h3>
    </div>
    <div class="w3-quarter">
      <img src="ciorba.jpg" alt="Ciorba de burta" style="width:100%">
      <h3>Ciorbe tradiționale</h3>
    </div>
    <div class="w3-quarter">
      <img src="poze/sarmale.jpg" alt="Sarmale" style="width:100%">
      <h3>Sarmale în foi de varză și vită</h3>
    </div>
    <div class="w3-quarter">
      <img src="cartofi.jpg" alt="Cartofi taranesti" style="width:100%">
      <h3>Cartofi țărănești la cuptor</h3>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="spaghete-bolognese(1).jpg" alt="Spaghete bolognese" style="width:100%">
      <h3>Paste și spaghete</h3>
    </div>
    <div class="w3-quarter">
      <img src="quatro.jpg" alt="Spaghete quatro-formaggi" style="width:100%">
      <h3>Paste și spaghete</h3>
    </div>
    <div class="w3-quarter">
      <img src="somn.jpg" alt="Peste" style="width:100%">
      <h3>Pește</h3>
     
    </div>
    <div class="w3-quarter">
      <img src="creveti.jpg" alt="Creveti" style="width:100%">
     <h3>Creveți</h3>
    </div>
  </div>

<div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="caracatita.jpg" alt="Caracatita" style="width:100%">
      <h3>Pește și fructe de mare</h3>
    </div>
    <div class="w3-quarter">
      <img src="midii.jpg" alt="Midii" style="width:100%">
      <h3>Pește și fructe de mare</h3>
    </div>
    <div class="w3-quarter">
      <img src="cupcake.jpg" alt="Briose" style="width:100%">
      <h3>Brioșe</h3>
    </div>
    <div class="w3-quarter">
      <img src="papanasi.jpg" alt="Papanasi" style="width:100%">
      <h3>Papanași</h3>
    </div>
  </div>


  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>Despre noi, </h3><br>
    <div class="w3-padding-32">
      <p>Pasionate de gastronomie, iubitoare ale mâncărurilor tradiționale românești, dar și culese de pe alte meleaguri, ne-am adunat cunoștințele în domeniu și împreună am pus bazele acestui site cu rețete. O mare parte dintre acestea sunt extrase din cărțile vechi ale bunicii, altele reinterpretate, și unele gândite și experimentate chiar de noi. Sperăm ca aceste rețete să vă inspire și să vă scoată din cumpănă dacă ați epuizat mâncărurile din meniul dumneavoastră și vă așteptăm părerile în secțiunea "Contact" unde vă stăm la dispoziție cu orice nelămurire întâmpinați. Vă dorim mult spor în bucătărie și poftă bună!</p>
    </div>
  </div>
  <hr>
  

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>
