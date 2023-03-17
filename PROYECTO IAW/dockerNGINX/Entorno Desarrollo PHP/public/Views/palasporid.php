<?php
    include_once('Views/header.php');
    include_once('Controllers/ProductController.php');

    echo "<html>
        <div class='container'>
        <h1 style='color:white;'>Las mejores palas del mercado</h1>

        <table class='tabla'>
            <tr><th style='color:aqua;'>Marca</th> <th style='color:aqua;'>Modelo</th> <th style='color:aqua;'>Tipo de pala</th> <th style='color:aqua;'>Forma de la pala</th> <th style='color:aqua;'>Peso</th> <th style='color:aqua;'>Precio</th></tr>";
                echo "<tr>
                    <td style='color: white;'>".$data['marca']."</td>
                    <td style='color: white;'>".$data['modelo']."</td>
                    <td style='color: white;'>".$data['tipopala']."</td>
                    <td style='color: white;'>".$data['formapala']."</td>
                    <td style='color: white;'>".$data['peso']."</td>
                    <td style='color: white;'>".$data['precio']."</td>";
                    echo "<img src=".$data['img']." width='200' height='200'></img>";
                    
        echo "</table>";
        echo "</div>";
    echo "</html>";

    include_once('Views/footer.php');
?>