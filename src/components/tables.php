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

                    <form class="form-inline" action="/components/tables.php" method="post">

                        <label class="my-1 mr-2" for="action">Accion</label>
                        <select class="custom-select my-1 mr-sm-2" name="action" id="action" required>
                            <option value="null" selected>Seleciona la accion</option>
                            <option value="add">Crear</option>
                            <option value="remove">Remover</option>
                        </select>

                        <br />

                        <label class="my-1 mr-2" for="table">Base de Datos</label>
                        <select class="custom-select my-1 mr-sm-2" name="table" id="table" required>
                            <option value="null" selected>Seleciona la tabla</option>
                            <option value="producto">00 - Producto</option>
                            <option value="cliente">00 - Cliente</option>
                            <option value="albaran">01 - Albaran</option>
                            <option value="albaranlinea">02 - Albaran Linea</option>
                        </select>

                        <div class="form-button mt-3">
                            <br/>
                            <button id="submit" name="submit" type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                    <?php
                    include("./database.php");

                    function contentFile($file)
                    {
                        // Open your file in read mode
                        $input = fopen($file, "r");

                        // Display a line of the file until the end 
                        echo '<br><p>';
                        echo '<code>';
                        echo '-- view code executed <br>';
                        while (!feof($input)) {

                            // Display each line
                            echo fgets($input) . "<br>";
                        }
                        echo '</code>';
                        echo '</p>';
                    }

                    if (isset($_POST['action']) and isset($_POST['table'])) {
                        if (strcmp($_POST["action"], 'null') == 0) {
                        } else {
                            if (strcmp($_POST["table"], 'null') == 0) {
                            } else {
                                //echo '<br/><p>Action : ' . $_POST['action'] . '<br>Database : ' . $_POST['database']  . '</p>';
                                if ($_POST['action'] == 'add') {
                                    if ($_POST['table'] == 'producto') {
                                        $file_db = "../sql/product.sql";
                                    } elseif ($_POST['table'] == 'cliente') {
                                        $file_db = "../sql/client.sql";
                                    } elseif ($_POST['table'] == 'albaran') {
                                        $file_db = "../sql/albaran.sql";
                                    } elseif ($_POST['table'] == 'albaranlinea') {
                                        $file_db = "../sql/albaranlinea.sql";
                                    }
                                    //echo $file_db;
                                    contentFile($file_db);
                                    echo sqlImport($file_db);
                                    //if ($conn->exec($sql) === TRUE) {
                                    //  showCode("Database created successfully");
                                    //} else {
                                    //  showCode("Error creating database");
                                    //}
                                } elseif ($_POST['action'] == 'remove') {
                                    $sql = "DROP TABLE " . $_POST['table'];
                                    echo '<br><p>';
                                    echo '<code>';
                                    echo $sql . ';' . '<br>';
                                    $mysqli = pointer();
                                    if ($mysqli->query($sql) === TRUE) {
                                        echo "Database remove successfully";
                                    } else {
                                        echo "Error removing database: " . $mysqli->error;
                                    }
                                    echo '</code>';
                                    echo '</p>';
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>