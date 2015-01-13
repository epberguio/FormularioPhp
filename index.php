<!doctype html>
<html lang='es'>
<head>
<meta charset='UTF-8'>
<title>Mi primera página en PHP</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
<h1>Mi <a id='enlace' href="#">primera web</a></h1>
<div id="redondo"></div>
<?php
echo'hola mundo';
?>
<?php
echo 5*3;
echo '5'*'3';
echo '<h1>Dolores</h1><p>Hola, primer programa</p>'
echo <<<BIOGRAFIA<h1>Esta es mi vida</h1>
<ol>
	<li>Nazco</li>
	<li>Nazco</li>
	<li>Nazco</li>
	<li>Nazco</li>
</ol>
 ?>
</body>
<script>
document.getElementById('enlace').innerHTML='web javascript';
document.getElementById('enlace').style.color='pink';
</script>
</html>
p