<div class="container">
    <h1 style="color:white;">Las mejores palas del mercado</h1>

    <table class='tabla'>
        <tr> <th style='color:aqua;'>Marca</th> <th style='color:aqua;'>Modelo</th> <th style='color:aqua;'>Tipo de pala</th> <th style='color:aqua;'>Forma de la pala</th> <th style='color:aqua;'>Peso</th> <th style='color:aqua;'>Precio</th> <th style='color:aqua;'>Detalles</th></tr>
        <?php
            print_r($_SESSION['carrito']);
            foreach ($data as $palitas) {
                $carro='<a href="index.php?controller=ProductController&action=aniadirCarrito&id_pala='.$palitas['id_pala'].'">Añadir al carrito</a>';
                echo "<tr>
                <td hidden style='color: white;'>".$palitas['id_pala']."</td>
                <td style='color: white;'>".$palitas['marca']."</td>
                <td style='color: white;'>".$palitas['modelo']."</td>
                <td style='color: white;'>".$palitas['tipopala']."</td>
                <td style='color: white;'>".$palitas['formapala']."</td>
                <td style='color: white;'>".$palitas['peso']."</td>
                <td style='color: white;'>".$palitas['precio']."</td>";
                $enlace='<a href="index.php?controller=ProductController&action=PalasporID&id_pala='.$palitas['id_pala'].'">Ver más...</a>';
                echo "<td>".$enlace."</td>
                <td>".$carro."</td>";
                "</tr>";
                
            }
        ?>
    </table>
</div>