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
                    <br>
                    <form action="/components/write.php" method="post">
                        <div class="form-row">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="producto">Codigo Producto</label>
                                    <select id="inputState" name="codproducto" class="form-control">
                                        <option value="null" selected>Choose...</option>
                                        <?php
                                        include("./database.php");
                                        $sql = "SELECT * FROM producto";
                                        $result = queryDatabase($sql);
                                        if ($result->num_rows > 0) {
                                            while ($reg = $result->fetch_assoc()) {
                                                echo '<option value="' . $reg['codproducto'] . '">' . $reg['codproducto'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="descripcion">Descripcion</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="precio">Precio</label>
                                    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio">
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox my-1 mr-sm-2">
                            <input type="checkbox" class="custom-control-input" name="remove" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Eliminar</label>
                        </div>
                        <br>
                        <button class="btn btn-primary" id="submit" name="submit" type="submit">Escribir</button>

                    </form>
                    <?php
                    function update($sql)
                    {
                        $mysqli = pointer();
                        if ($mysqli->query($sql) === TRUE) {
                            echo "Update successfully";
                        } else {
                            echo "Error updating: " . $mysqli->error;
                        }
                        $mysqli->close();
                    }

                    function upgrade()
                    {
                        $sql = "UPDATE producto SET " . "descripcion = '" .  $_POST['descripcion'] . "', precio = '" .  $_POST["precio"] . "' WHERE codproducto = '" . $_POST["codproducto"] . "'";
                        echo '<br><p>';
                        echo '<code>';
                        echo '-- view code executed <br>';
                        echo $sql . ';' . '<br>';
                        update($sql);
                        echo '</code>';
                        echo '</p>';
                    }

                    function remove()
                    {
                        $sql = "DELETE FROM producto WHERE codproducto = '" . $_POST["codproducto"] . "'";
                        echo '<br><p>';
                        echo '<code>';
                        echo '-- view code executed <br>';
                        echo $sql . ';' . '<br>';
                        update($sql);
                        echo '</code>';
                        echo '</p>';
                    }


                    if (isset($_POST['codproducto']) and isset($_POST['remove'])) {
                        remove();
                    } else {
                        if (isset($_POST['codproducto'])) {
                            if (strcmp($_POST["descripcion"], '') == 0 or strcmp($_POST["precio"], '') == 0) {
                                showLine("warning", "Formulario Incompleto");
                            } else {
                                upgrade();
                            }
                        } else {
                            // non-code
                            //echo '<p>here</p>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>