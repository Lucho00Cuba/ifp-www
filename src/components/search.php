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

                    <form class="form-inline" action="/components/search.php" method="post">
                        <label class="my-1 mr-2" for="search">Busquedas</label>
                        <select class="custom-select my-1 mr-sm-2" name="search" id="search" required>
                            <option value="null" selected>Seleciona la busqueda</option>
                            <option value="1">Mostrar todos los datos de los clientes que viven en la calle 'de la vida'</option>
                            <option value="2">Mostrar todos los datos de los clientes cuyo código empiece por a</option>
                            <option value="3">Mostrar todos los datos de los clientes cuyo email sea de gmail</option>
                            <option value="4">Mostrar código del cliente con nombre 'Ramón' y apellidos 'Díaz García'</option>
                            <option value="5">Mostrar el nombre y apellidos del cliente con código 'b06'</option>
                        </select>

                        <br />

                        <div class="form-button mt-3">
                            <br />
                            <button id="submit" name="submit" type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                    </form>
                    <?php
                    include("./utils.php");

                    function one()
                    {
                        $sql = "SELECT * FROM cliente WHERE direccion LIKE '%de la vida%'";
                        showCode($sql);
                        $result = queryDatabase($sql); //$mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table text-center table-hover table-bordered table-dark">
                            <thead>
                              <tr>
                                <th scope="col">codcliente</th>
                                <th scope="col">nombre</th>
                                <th scope="col">apellidos</th>
                                <th scope="col">direccion</th>
                                <th scope="col">telefono</th>
                                <th scope="col">email</th>
                              </tr>
                            </thead>
                            <tbody>';
                            while ($reg = $result->fetch_assoc()) {
                                //echo $reg;
                                echo '<tr>
                                  <td>' . $reg['codcliente'] . '</td>
                                  <td>' . $reg['nombre'] . '</td>
                                  <td>' . $reg['apellidos'] . '</td>
                                  <td>' . $reg['direccion'] . '</td>
                                  <td>' . $reg['telefono'] . '</td>
                                  <td>' . $reg['email'] . '</td>
                                </tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                    }

                    function two()
                    {
                        $sql = "SELECT * FROM cliente WHERE codcliente LIKE 'a%'";
                        showCode($sql);
                        $result = queryDatabase($sql); // $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table text-center table-hover table-bordered table-dark">
                            <thead>
                              <tr>
                                <th scope="col">codcliente</th>
                                <th scope="col">nombre</th>
                                <th scope="col">apellidos</th>
                                <th scope="col">direccion</th>
                                <th scope="col">telefono</th>
                                <th scope="col">email</th>
                              </tr>
                            </thead>
                            <tbody>';
                            while ($reg = $result->fetch_assoc()) {
                                echo $reg;
                                echo '<tr>
                                  <td>' . $reg['codcliente'] . '</td>
                                  <td>' . $reg['nombre'] . '</td>
                                  <td>' . $reg['apellidos'] . '</td>
                                  <td>' . $reg['direccion'] . '</td>
                                  <td>' . $reg['telefono'] . '</td>
                                  <td>' . $reg['email'] . '</td>
                                </tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                    }

                    function three()
                    {
                        $sql = "SELECT * FROM cliente WHERE email LIKE '%gmail%'";
                        showCode($sql);
                        $result = queryDatabase($sql); // $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table text-center table-hover table-bordered table-dark">
                            <thead>
                              <tr>
                                <th scope="col">codcliente</th>
                                <th scope="col">nombre</th>
                                <th scope="col">apellidos</th>
                                <th scope="col">direccion</th>
                                <th scope="col">telefono</th>
                                <th scope="col">email</th>
                              </tr>
                            </thead>
                            <tbody>';
                            while ($reg = $result->fetch_assoc()) {
                                echo $reg;
                                echo '<tr>
                                  <td>' . $reg['codcliente'] . '</td>
                                  <td>' . $reg['nombre'] . '</td>
                                  <td>' . $reg['apellidos'] . '</td>
                                  <td>' . $reg['direccion'] . '</td>
                                  <td>' . $reg['telefono'] . '</td>
                                  <td>' . $reg['email'] . '</td>
                                </tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                    }

                    function four()
                    {
                        $sql = "SELECT * FROM cliente WHERE nombre LIKE '%Ramon%' and apellidos LIKE '%Diaz Garcia%'";
                        showCode($sql);
                        $result = queryDatabase($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table text-center table-hover table-bordered table-dark">
                            <thead>
                              <tr>
                                <th scope="col">codcliente</th>
                                <th scope="col">nombre</th>
                                <th scope="col">apellidos</th>
                                <th scope="col">direccion</th>
                                <th scope="col">telefono</th>
                                <th scope="col">email</th>
                              </tr>
                            </thead>
                            <tbody>';
                            while ($reg = $result->fetch_assoc()) {
                                echo $reg;
                                echo '<tr>
                                  <td>' . $reg['codcliente'] . '</td>
                                  <td>' . $reg['nombre'] . '</td>
                                  <td>' . $reg['apellidos'] . '</td>
                                  <td>' . $reg['direccion'] . '</td>
                                  <td>' . $reg['telefono'] . '</td>
                                  <td>' . $reg['email'] . '</td>
                                </tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                    }

                    function five()
                    {
                        $sql = "SELECT nombre, apellidos FROM cliente WHERE codcliente LIKE 'b06'";
                        showCode($sql);
                        $result = queryDatabase($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table text-center table-hover table-bordered table-dark">
                            <thead>
                              <tr>
                                <th scope="col">nombre</th>
                                <th scope="col">apellidos</th>
                              </tr>
                            </thead>
                            <tbody>';
                            while ($reg = $result->fetch_assoc()) {
                                echo $reg;
                                echo '<tr>
                                  <td>' . $reg['nombre'] . '</td>
                                  <td>' . $reg['apellidos'] . '</td>
                                </tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                    }

                    if (isset($_POST['search'])) {
                        if (strcmp($_POST["search"], 'null') == 0) {
                        } else {
                            if ($_POST['search'] == '1') {
                                one();
                            } elseif ($_POST['search'] == '2') {
                                two();
                            } elseif ($_POST['search'] == '3') {
                                three();
                            } elseif ($_POST['search'] == '4') {
                                four();
                            } elseif ($_POST['search'] == '5') {
                                five();
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>