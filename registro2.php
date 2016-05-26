<html>
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
        <!-- <li><a href="#portfolio">PORTFOLIO</a></li> -->
        <!-- <li><a href="#pricing">PRICING</a></li> -->
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br>
<?php 


  if($_GET){
      if(isset($_GET['edad'])){
          
          $name = $_GET['nombre'];
          $GLOBALS['pene'] = $name;
          $sname = $_GET['apellido'];
          $sexo = $_GET['gender'];
          $edad = $_GET['edad'];
      }
  }
?>
<form action="registro2.php" method="GET">
  <?php  
    $name = $_GET['nombre'];
    $sname = $_GET['apellido'];
      $sexo = $_GET['gender'];
      $edad = $_GET['edad'];

  ?>
  <input type = "hidden" name="nombre" value="<?php echo $name; ?>">
  <input type = "hidden" name="apellido" value="<?php echo $sname; ?>">
  <input type = "hidden" name="gender" value="<?php echo $sexo; ?>">
  <input type = "hidden" name="edad" value="<?php echo $edad; ?>">
  <link rel="stylesheet" type="text/css" href="datepicker.css"/> 
  <script type="text/javascript" src="datepicker.js"></script>
  <input type="text" name="hola" id='start_dt' class='datepicker'required>


  <br><br>
  La medicion de su HTA Sistolica<br> 
  <input type="text" name="sistolica" placeholder="(mm Hg)"required/>
  <br><br>
  La medicion de su HTA Diastolica<br>
  <input type="text" name="diastolica" placeholder="(mm Hg)"required/>
  <br><br>
  <input type="submit" name="submit" value="Terminar"></input>
</form>

<?php
if (isset($_GET['submit'])) {
  $HS = $_GET['sistolica'];
    $HD = $_GET['diastolica'];
    $fecha = $_GET['hola'];
  newFile($name,$sname,$sexo,$edad,$HS,$HD,$fecha);
  prueba($HS,$HD,$fecha);
}
?>


<?php
//Importo mis clases, equivale al import en java
use Aws\S3\S3Client;
//Importar las excepciones
use Aws\S3\Exception\S3Exception;
use Aws\S3\Exception\BucketAlreadyOwnedByYou;

function newFile($nombre1,$nombre2,$sexoo,$edadd,$var1,$var2,$var3){

  require('/home/bogar/Escritorio/PDFlib64/fpdf181/fpdf.php');
  $filename = "/var/www/html/aws/Ordinario/" . $nombre1 . $var3 . ".pdf";
  $filename2=$nombre1 . $var3 . ".pdf";
  $pdf=new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',16);
  $arreglo = "Doctor: Dr. Barroso" . "\n". "Fecha:" . $var3 . "\n" . "Nombre: " . $nombre1 . "\n" . "Apellido: " . $nombre2 . "\n" . "Sexo: " . $sexoo  . "\n" . "Edad: " . $edadd . "\n" . "HTA Sistolica: " . $var1 . " mm" . "\n" . "HTA Diasotolica: " . $var2 . " mm";
  $pdf->MultiCell(80,10,$arreglo);
  $pdf->Output($filename,'F');
  require '/home/bogar/vendor/autoload.php';
  
  $newUser = $nombre1[0] . $nombre2;
  $newPass = $nombre1[0] . $nombre2;

  $AccessKeyID = 'AKIAJOGNWNUGEEINKYGQ';
  $SecretAccessKey = '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';


      $clienteS3 = new S3Client([
          'version'     => 'latest',
          'region'      => 'us-west-2',
          'scheme'      => 'https',
          'credentials' => [
              'key'    => $AccessKeyID,
              'secret' => $SecretAccessKey
          ]
      ]);
      
      
      $bucketName = $nombre1[0] . $nombre2;
      $count=0;
    try{
      $result = $clienteS3->createBucket([
          'ACL' => 'public-read-write',
          'Bucket' => $bucketName // REQUIRED

      ]); 
      
    } catch(S3Exception $e){
      echo "Usted ya esta registrado, su usuario es: $bucketName , inicie sesion <br>";
      $count=1;
    } catch(BucketAlreadyOwnedByYou $e){
      echo "Usted ya esta registrado, su usuario es: $bucketName , inicie sesion <br>";
      $count=1;
      //echo $e->getMessage();
    }

        $response = $clienteS3->putObject(array(
            'Bucket' => $bucketName,
            'Key'    => $filename2,
            'SourceFile' => $filename,
        ));
 
  ?>

  <?php
  if($count==0){
    ?>
    <div style="color:#7CFC00" class="alert alert-success">
      <strong>Perfecto!</strong> PDF File creado y fue subido a la nube.
    </div>
    <?php
    echo "Su nuevo usuario es: " . $newUser . "<br>";
    echo "Su contrasenia es: " . $newPass . "<br>";

  }

  echo "<a href='SaradominHealthCenter.php'>Regresar</a>";
}


?>

</body>	
</html>
