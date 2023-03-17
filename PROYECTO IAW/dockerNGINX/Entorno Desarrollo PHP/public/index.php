<?php
    include_once('Views/header.php');
    include('Controllers/ProductController.php');
    include('Controllers/UserController.php');

    if (isset($_REQUEST['action']) && isset($_REQUEST['controller'])) {
        $action=$_REQUEST['action'];
        $control=$_REQUEST['controller'];


        $controller=new $control();
        $controller->$action();
    } else {
        echo '<html>
                <head>
                    <title>Carousel/Slideshow</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                    <style>
                        .carousel-inner > .item > img,
                        .carousel-inner > .item > a > img {
                            width: 60%;
                            margin: auto;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                    <br>
                    <div id="theCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicadores -->
                        <ol class="carousel-indicators">
                        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#theCarousel" data-slide-to="1"></li>
                        <li data-target="#theCarousel" data-slide-to="2"></li>
                        <li data-target="#theCarousel" data-slide-to="3"></li>
                        
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="FotoProductos/starvie.jpeg" width="50" height="50"> 
                                <div class="carousel-caption d-none d-md-block">
                                <h3 style="color:yellow">StarVie Triton</h3>
                            </div>
                        </div>

                        
                        
                        <div class="item">
                            <img src="FotoProductos/adidas.jpeg" width="50" height="50"> 
                            <div class="carousel-caption d-none d-md-block">
                        <h3 style="color:brown">Adidas Metalbone Carbon</h3>
                    </div>
                        </div>

                        <div class="item">
                            <img src="FotoProductos/babolat.jpeg" width="50" height="50">
                            <div class="carousel-caption d-none d-md-block">
                            <h3 style="color:red">Babolat Viper</h3>
                        </div>
                        </div>
                        <div class="item">
                            <img src="FotoProductos/nox.jpeg" width="50" height="50"> 
                            <div class="carousel-caption d-none d-md-block">
                        <h3 style="color:white">NOX ML10</h3>
                    </div>
                        </div>


                        <a class="left carousel-control" href="#theCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">anterior</span>
                        </a>
                        <a class="right carousel-control" href="#theCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">siguiente</span>
                        </a>
                    </div>
                    </div>

                </body>
            </html>';
    }




    require_once('Views/footer.php');
?>













<?php
    include_once('Views/footer.php');
?>