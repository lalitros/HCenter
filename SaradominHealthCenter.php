<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Saradomin Health Center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #B22222;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #00CED1;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href='SaradominHealthCenter.php'>Saradomin Health Center</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#acercade">ACERCA DE</a></li>
        <li><a href="#iniciarsesion">INICIAR SESIÓN</a></li>
        <li><a href="#services">REGISTRO</a></li>
        <!-- <li><a href="#portfolio">PORTFOLIO</a></li> -->
        <!-- <li><a href="#pricing">PRICING</a></li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Saradomin Health Center</h1> 
  <p>We specialize in your health</p>
  <img src="suizo.jpg" alt="Chicago" width="700" height="400"> 
  <!-- <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address" required>
    <button type="button" class="btn btn-danger">Subscribe</button>
  </form> -->
</div>

<!-- Container (About Section) -->
<div id="acercade" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Hipertensión Arterial Sistémica</h2><br>
      <h4>La Hipertensión Arterial (HTA) es una de las enfermedades crónicas degenerativas que aquejan la vida moderna, se inicia generalmente en la edad productiva, acorta la esperanza de vida e incrementa el riesgo de una calidad de vida precaria. Mientras más elevada es la presión arterial, la esperanza de vida se reduce en forma significativa, independientemente de la edad y el sexo. </h4><br>
      <p>Desde el punto de vista hemodinámico, la hipertensión arterial es la elevación continua y sostenida de las cifras tensionales diastólicas y/o sistólicas. Es la resultante del aumento de las resistencias al libre tránsito de la sangre en las arterias periféricas. La tensión arterial es igual a gasto cardíaco por resistencias periféricas, por lo que cualquier incremento en los parámetros que la determinan, si se mantiene, origina hipertensión arterial.</p>
      <!-- <br><button class="btn btn-default btn-lg">Get in Touch</button> -->
    </div>
    <img src="hipertension.jpg" alt="tension" width="240" height="200" align="right"> 
<!--     <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div> -->
  </div>
</div>

<!-- <div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div> -->

<!-- <form action="paciente.php" method="get"> -->
<!-- Container (Contact Section) -->
<div id="iniciarsesion" class="container-fluid bg-grey">
  <h2 class="text-center">Iniciar Sesión</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contactanos y en menos de 24 horas le responderemos</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Mayab-SC</p>
      <p><span class="glyphicon glyphicon-phone"></span> +01 9992246542</p>
      <p><span class="glyphicon glyphicon-envelope"></span>SaradominHC@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
<!--         <div class="col-sm-6 form-group">
          <input class="form-control" id="usuario" name="usuario" placeholder="Usuario" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="password" name="password" placeholder="Contraseña" type="text" required>
        </div>
      </div> -->
      <div class="dropdown">
  <button class="dropbtn">Iniciar Sesion</button>
  <div class="dropdown-content">
    <a href='pacienteForma.php'>Nueva Cita</a>
    <a href="pacienteHistorial.php">Mi Informacion Medica</a>
  </div>
</div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <!-- <button href="usuariointerface.php" target="_blank" class="btn btn-default pull-right" type="submit" onclick="window.open(this.href,this.target,'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Acceder</button> -->
                <!-- <a href="usuariointerface.php" target="_blank" class="btn btn-default pull-right" onclick="window.open(this.href,this.target,'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Acceder</a>  -->

                <!-- <input type="submit" name="init" value="Iniciar Sesion" onclick="newFile()"/>  -->
        </div>
        <!-- <a href="usuariointerface.php" target="_blank" onclick="window.open(this.href,this.target,'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Acceder</a>  -->
      </div>
    </div>
  </div>
</div>
<!-- </form> -->
<form action="registro2.php">
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>REGISTRO</h2>
  <br>
      <div class="col-sm-12 slideanim">
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="nombre" name="nombre" placeholder="nombre" type="text"  required>
        </div>
        <br><br><br>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="apellido" name="apellido" placeholder="apellido" type="text" required>
        </div><br>
      </div>
 
      <div class="col-sm-24 form-group">
          <input type="radio" name="gender" value="male" checked>Masculino<br>
          <input type="radio" name="gender" value="female" checked>Femenino<br>
          <select name="edad" > 
            <option value="1mes a 12 meses">1mes a 12 meses</option>
            <option value="1 anio a 12 anios">1 anio a 12 anios</option>
            <option value="12 anios a 25 anios">12 anios a 25 anios</option>
            <option value="26 anios a 60 anios">26 anios a 60 anios</option>
            <option value="61 anios+">61 anios+</option>
          </select> <br><br>
          <input type="submit" name="create" value="Registrarse" onclick="newFile()"/> 
      </div><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <!-- <button href="usuariointerface.php" target="_blank" class="btn btn-default pull-right" type="submit" onclick="window.open(this.href,this.target,'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Acceder</button> -->
                <!-- <a href="registro.php" target="_blank" class="btn btn-default pull-right" onclick="window.open(this.href,this.target,'width=400,height=700,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Acceder</a>  -->

        </div>
        <!-- <a href="usuariointerface.php" target="_blank" onclick="window.open(this.href,this.target,'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Acceder</a>  -->
      </div>
    </div>
</div>

</form>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Mas Informacion a cerca de Hipertension Arterial  <a href="https://es.wikipedia.org/wiki/Hipertensi%C3%B3n_arterial" title="Visit w3schools">-Wikipedia :) </a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>