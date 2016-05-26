<html>
<body>
<style>
div {height:50px;width:100%;}
</style>
<div style="background-color:#FF4500"></div>	
<h1 style="color:red">Llene la siguiente forma:</h1>
	
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
<form action="registro.php" method="GET">
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
		echo "Su nuevo usuario es: " . $newUser . "<br>";
		echo "Su contrasenia es: " . $newPass . "<br>";
		?>
		<div style="color:#7CFC00" class="alert alert-success">
		  <strong>Perfecto!</strong> PDF File creado y fue subido a la nube.
		</div>
		<?php
	}

	echo "<a href='SaradominHealthCenter.php'>Regresar</a>";
}


?>

</body>
</html>