<?php
    include_once('header.php');
?>


<div class="container">
    <h5 style="color:white">Introduce los datos de la pala</h5>

    <form class="form" action="index.php?controller=ProductController&action=aniadirPalas" method="post">
        <div class="form-group">
            <label class="form-label" for="marca" style="color:white">Marca</label>
            <input class="form-control" type="text" name="marca" maxlength="50" value=""><br>
            <?php
                if (isset($data) && isset($data['marca'])) {
                    echo "<div class='alert alert-danger'>"
                        .$data['marca'].
                    "</div>";
                }
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="modelo" style="color:white">Modelo</label>
            <input class="form-control" type="text" name="modelo" maxlength="50" value=""><br>
            <?php
                if (isset($data) && isset($data['modelo'])) {
                    echo "<div class='alert alert-danger'>"
                        .$data['modelo'].
                    "</div>";
                }
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="tipopala" style="color:white">Tipo de pala</label>
            <input class="form-control" type="text" name="tipopala" maxlength="50" value=""><br>
            <?php
                if (isset($data) && isset($data['tipopala'])) {
                    echo "<div class='alert alert-danger'>"
                        .$data['tipopala'].
                    "</div>";
                }
            ?>
        </div>


        <div class="form-group">
            <label class="form-label" for="formapala" style="color:white">Forma de la pala</label>
            <input class="form-control" type="text" name="formapala" maxlength="50" value=""><br>
            <?php
                if (isset($data) && isset($data['formapala'])) {
                    echo "<div class='alert alert-danger'>"
                        .$data['formapala'].
                    "</div>";
                }
            ?>
        </div>


        <div class="form-group">
            <label class="form-label" for="peso" style="color:white">Peso</label>
            <input class="form-control" type="text" name="peso" maxlength="50" value=""><br>
            <?php
                if (isset($data) && isset($data['peso'])) {
                    echo "<div class='alert alert-danger'>"
                        .$data['peso'].
                    "</div>";
                }
            ?>
        </div>


        <div class="form-group">
            <label class="form-label" for="precio" style="color:white">Precio</label>
            <input class="form-control" type="text" name="precio" maxlength="50" value=""><br>
            <?php
                if (isset($data) && isset($data['precio'])) {
                    echo "<div class='alert alert-danger'>"
                        .$data['precio'].
                    "</div>";
                }
            ?>
        </div>


        <div class="form-group">
            <input class="form-control" type="submit" name="insertar" value="Enviar">
        </div>
    </form>
</div>


<?php
    include_once('footer.php');
?>