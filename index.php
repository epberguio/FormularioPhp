<?php include("include/header.php");?>	
	<div class='container'>
		<form method='post' action='procSaludos.php'>
		<form class="form-horizontal">
  <div class="form-group">
    <label name='nombre'for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input name='nombre'type="text" class="form-control" id="text3" placeholder="Escribe tu nombre">
    </div>
  </div>
  <div class="form-group">
    <label name='email'for="inputPassword3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input name='email' type="email" class="form-control" id="email"placeholder="Escribe tu email" >
    </div>
	<label for="poblacion" class="col-sm-2 control-label">Población</label>
    <div class="col-sm-10">
      <input name='poblacion'type="text" class="form-control" id="text3" placeholder="Escribe tu ciudad">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>
		<!-- <label for='nombre'> Nombre </label> 
		<input name='nombre' type='text'placeholder='Escribe tu nombre' required>
		<label for='password'>Contraseña</label>
		<input name='password' type='password' placeholder='Escribe tu contaseña' required>
		
		<button>Enviar</button>
		</form>
		</div>-->
<?php include("include/footer.php");?>	