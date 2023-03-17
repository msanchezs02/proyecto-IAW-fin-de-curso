<?php
    include('Views/View.php');

    class ProductController {
        public function getAllProducts() {
            require_once('Models/palas.php');

            $palaDAO=new PalasDAO();
            $palas=$palaDAO->getAllProducts();
            $palaDAO=null;
            View::show("ShowPalas",$palas);
        }

        public function aniadirPalas() {
            $errores=array();

            if (isset($_POST['insertar'])) {
                if (!isset($_POST['marca']) || strlen($_POST['marca'])==0){
                    $errores['marca']="Tienes que insertar la marca";
                }

                if (!isset($_POST['modelo']) || strlen($_POST['modelo'])==0) {
                    $errores['modelo']="Inserte el modelo de la pala";
                }

                if (!isset($_POST['tipopala']) || strlen($_POST['tipopala'])==0) {
                    $errores['tipopala']="¿Tipo de la pala?";
                }

                if (!isset($_POST['formapala']) || strlen($_POST['formapala'])==0) {
                    $errores['formapala']="Si no tiene forma una pala eso no es una pala ni es na";
                }

                if (!isset($_POST['peso']) || strlen($_POST['peso'])==0) {
                    $errores['peso']="Peso invalido o inexistente";
                }

                if (!isset($_POST['precio']) || strlen($_POST['precio'])==0) {
                    $errores['precio']="Introduce otro precio anda";
                }



                if (empty($errores)) {
                    include('Models/palas.php');
    
                    $palaDAO=new PalasDAO();

                    if ($palaDAO->insertPalas($_POST['marca'],$_POST['modelo'],$_POST['tipopala'],$_POST['formapala'],$_POST['peso'],$_POST['precio'])) {
                        $this->getAllProducts();
                    } else {
                        $errores['insercion']="Los datos no se han insertado correctamente";
                        View::show("addPalas",$errores);
                    } 
                } else {
                    View::show("addPalas", $errores);
                }
    
                

            } else {
                View::show("addPalas", null);
            }

            
        }


        public function PalasporID() {
            if (isset($_GET['id_pala'])){
                require_once('Models/palas.php');

                $palaDAO=new PalasDAO();
                $palas=$palaDAO->PalasporID($_GET['id_pala']);
                $palaDAO=null;
                View::show("palasporid",$palas);
            }
            
        }

        public function aniadirCarrito() {
            if (isset ($_GET['id_pala'])) {
                array_push($_SESSION['carrito'],$_GET['id_pala']);
                include_once('Models/palas.php');
                $palaDAO=new PalasDAO();
                $palas=$palaDAO->getAllProducts();
                $palaDAO=null;
                View::show("ShowPalas",$palas);
            }
        }


        public function mostrarCarrito() {
            include_once('Models/palas.php');
            $palaDAO=new PalasDAO();
            $arrayCarro=array();
            foreach($_SESSION['carrito'] as $posicion=>$id_pala) {
                $palas=$palaDAO->PalasporID($id_pala);
                array_push($arrayCarro,$palas);
            }
            View::show("mostrarCarrito",$arrayCarro);
        }
    }
?>