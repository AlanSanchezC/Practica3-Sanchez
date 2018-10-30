<?php require_once(VIEW_PATH.'header.inc.php'); ?>

	<form method="POST" action="<?php 
		echo sanitize_output($_SERVER['REQUEST_URI']);?>">

		<p>						
			<label for="nombre">Nombre</label><br />									
			<input id="nombre" name="nombre" type="text" size="75" value="<?php 
				echo sanitize_output($nombre); ?>" autofocus/></p>

		<p>
			<label for="direccion">Direcci�n</label><br />
			<textarea id="direccion" name="direccion"><?php 
				echo sanitize_output($direccion);?></textarea></p>
		<p>
			<label for="telefono">Teléfono</label><br />
			<textarea id="telefono" name="telefono"><?php 
				echo sanitize_output($telefono);?></textarea></p>
		<p>
			<input type="submit"/></p>

	</form>

<?php require_once(VIEW_PATH.'footer.inc.php'); ?>