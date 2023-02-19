<?php
include("./base.php");
?>

<div class="form-body">
	<div class="row-md">
		<div class="form-holder">
			<div class="form-content">
				<div class="form-items">
					<h3>Agenda iFP</h3>
					<p>Recopilacion de Informacion.</p>
					<form action="/components/agenda.php" method="post" class="requires-validation">
						<div class="col-md-12">
							<?php
							if (isset($_POST['nombre'])) {
								echo "<p>Nombre : " . $_POST["nombre"] . "</p>";
							} else {
								echo '<input class="form-control" id="validationDefaultUsername" type="text" name="nombre" placeholder="Nombre" required>';
							}
							?>
						</div>
						<div class="col-md-12">
							<?php
							if (isset($_POST['apellidos'])) {
								echo "<p>Apellidos : " . $_POST["apellidos"] . "</p>";
							} else {
								echo '<input class="form-control" type="text" name="apellidos" placeholder="Apellidos" required>';
							}
							?>
						</div>
						<div class="col-md-12">
							<?php
							if (isset($_POST['telefono'])) {
								echo "<p>Telefono : " . $_POST["telefono"] . "</p>";
							} else {
								echo '<input class="form-control" type="text" name="telefono" placeholder="Telefono" required>';
							}
							?>
						</div>
						<div class="col-md-12">
							<?php
							if (isset($_POST['direccion'])) {
								echo "<p>Direccion : " . $_POST["direccion"] . "</p>";
							} else {
								echo '<input class="form-control" type="text" name="direccion" placeholder="Direccion" required>';
							}
							?>
						</div>
						<div class="col-md-12">
							<?php
							if (isset($_POST['poblacion'])) {
								echo "<p>Poblacion : " . $_POST["poblacion"] . "</p>";
							} else {
								echo '<input class="form-control" type="text" name="poblacion" placeholder="Poblacion" required>';
							}
							?>
						</div>
						<div class="col-md-12">
							<?php
							if (isset($_POST['provincia'])) {
								echo "<p>Provincia : " . $_POST["provincia"] . "</p>";
							} else {
								echo '<input class="form-control" type="text" name="provincia" placeholder="Provincia" required>';
							}
							?>
						</div>
						<div class="form-button mt-3">
							<br>
							<?php
							if (isset($_POST['submit'])) {
								echo '<a href="/components/agenda.php" id="submit" name="submit" type="submit" class="btn btn-primary">Atras</a>';
							} else {
								echo '<button id="submit" name="submit" type="submit" class="btn btn-primary">Enviar</button>';
							}
							?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>