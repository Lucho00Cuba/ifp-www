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

                    <form class="form-inline" action="/components/view.php" method="post">
                        <label class="my-1 mr-2" for="search">Base de Datos</label>
                        <select class="custom-select my-1 mr-sm-2" name="search" id="search" required>
                            <option value="null" selected>Seleciona la busqueda</option>
                            <option value="1">Clientes</option>
                            <option value="2">Productos</option>
                            <option value="3">Albaran</option>
                            <option value="4">Albaran Linea</option>
                        </select>

                        <br />

                        <div class="form-button mt-3">
                            <br />
                            <button id="submit" name="submit" type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                    </form>
                    <?php
                    include("./utils.php");
                    include("./database.php");

                    function one()
                    {
                        $sql = "SELECT * FROM cliente";
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
                        $sql = "SELECT * FROM producto";
                        showCode($sql);
                        $result = queryDatabase($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table text-center table-hover table-bordered table-dark">
                            <thead>
                              <tr>
                                <th scope="col">codproducto</th>
                                <th scope="col">descripcion</th>
                                <th scope="col">precio</th>
                              </tr>
                            </thead>
                            <tbody>';
                            while ($reg = $result->fetch_assoc()) {
                                echo $reg;
                                echo '<tr>
                                  <td>' . $reg['codproducto'] . '</td>
                                  <td>' . $reg['descripcion'] . '</td>
                                  <td>' . $reg['precio'] . '</td>
                                </tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                    }

                    function three()
                    {
                        $sql = "SELECT * FROM albaran";
                        showCode($sql);
                        $result = queryDatabase($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table text-center table-hover table-bordered table-dark">
                            <thead>
                              <tr>
                                <th scope="col">numalbaran</th>
                                <th scope="col">codcliente</th>
                                <th scope="col">fecha</th>
                              </tr>
                            </thead>
                            <tbody>';
                            while ($reg = $result->fetch_assoc()) {
                                echo $reg;
                                echo '<tr>
                                  <td>' . $reg['numalbaran'] . '</td>
                                  <td>' . $reg['codcliente'] . '</td>
                                  <td>' . $reg['fecha'] . '</td>
                                </tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                    }

                    function four()
                    {
                        $sql = "SELECT * FROM albaranlinea";
                        showCode($sql);
                        $result = queryDatabase($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table text-center table-hover table-bordered table-dark">
                            <thead>
                              <tr>
                                <th scope="col">numalbaran</th>
                                <th scope="col">numlinea</th>
                                <th scope="col">codproducto</th>
                                <th scope="col">cantidad</th>
                              </tr>
                            </thead>
                            <tbody>';
                            while ($reg = $result->fetch_assoc()) {
                                echo $reg;
                                echo '<tr>
                                  <td>' . $reg['numalbaran'] . '</td>
                                  <td>' . $reg['numlinea'] . '</td>
                                  <td>' . $reg['codproducto'] . '</td>
                                  <td>' . $reg['cantidad'] . '</td>
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
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>