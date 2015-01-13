<?php include("include/header.php");?>	
<div class='container'>
<?php 
//recojo las variables del formulario
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$poblacion=$_POST['poblacion'];
//los pasamos como parámtros en la función
include('include/funcions.php');
echo '<p>'.sobreMi($nombre,$email,$poblacion).'</p>';		
?>
</div>
<?php include("include/footer.php");?>	
