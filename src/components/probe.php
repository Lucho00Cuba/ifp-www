<?php
include("./base.php");
?>

<div class="form-body">
	<div class="row-md">
		<div class="form-holder">
			<div class="form-content">
				<div class="form-items">
					<h3>Base de Datos iFP</h3>
					<p>CRUD Base de Datos.</p>
					<form action="/components/probe.php" method="post" class="requires-validation">

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="addresss">Direccion del Servidor</label>
								<input type="text" class="form-control" id="addresss" name="addresss" placeholder="localhost">
							</div>
							<div class="form-group col-md-4">
								<label for="username">Usuario</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="root">
							</div>
							<div class="form-group col-md-4">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="password">
							</div>
						</div>

						<div class="form-button mt-3">
							<?php
							if (isset($_POST['probe'])) {
								echo '<a href="/components/probe.php" id="submit" name="submit" type="submit" class="btn btn-primary">Atras</a>';
							} else {
								echo '<button id="submit" name="probe" type="submit" class="btn btn-primary">Prueba de Conexion</button>';
							}
							?>
							<!-- <button id="submit" name="probe" type="submit" class="btn btn-primary">Prueba de Conexion</button> -->
							<br />
						</div>
					</form>
					<?php

					function databaseTest($server, $username, $password)
					{
						try {
							$conn = new mysqli($server, $username, $password);
							if (!$conn) {
								//echo "<p>" . "Connection failed: " . mysqli_connect_error() . "</p>";
								$result = "State: Connection failed: " . $conn->connect_error;
								showLine("danger", $result);
							} else {
								$result = "State: Connected successfully <br>Server: " . $server . "<br>Username: " . $username . "<br>Password: **********";
								showLine("success", $result);
							}
							mysqli_close($conn);
						} catch (Exception $e) {
							$result = "State: Connection failed: " . $e->getMessage() . "<br>" . "Server: " . $server . "<br>Username: " . $username . "<br>Password: **********";
							showLine("danger", $result);
							//echo "<p>" . "Connection failed: " . mysqli_connect_error() . "</p>";
						}
					}

					include("./utils.php");
					include("./database.php");
					if (isset($_POST['probe'])) {
						if (strcmp($_POST["addresss"], '') == 0 or strcmp($_POST["username"], '') == 0 or strcmp($_POST["username"], '') == 0) {
							///showLine("warning", "Formulario Incompleto");
							databaseTest($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password']);
						} else {
							databaseTest($_POST['addresss'], $_POST['username'], $_POST['password']);
						}
					} else {
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>