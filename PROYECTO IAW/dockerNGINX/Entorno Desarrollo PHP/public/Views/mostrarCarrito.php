<div class="container">
    <table class="table">
        <tr> <th style='color:aqua;'>Marca</th> <th style='color:aqua;'>Modelo</th> <th style='color:aqua;'>Tipo de pala</th> <th style='color:aqua;'>Forma de la pala</th> <th style='color:aqua;'>Peso</th> <th style='color:aqua;'>Precio</th></tr>

        <?php
            foreach($data as $palas) {
                echo "<tr>
                <td hidden style='color: white;'>".$palas['id_pala']."</td>
                <td style='color: white;'>".$palas['marca']."</td>
                <td style='color: white;'>".$palas['modelo']."</td>
                <td style='color: white;'>".$palas['tipopala']."</td>
                <td style='color: white;'>".$palas['formapala']."</td>
                <td style='color: white;'>".$palas['peso']."</td>
                <td style='color: white;'>".$palas['precio']."</td>";
                "</tr>";
            }
        ?>
    </table>
</div>