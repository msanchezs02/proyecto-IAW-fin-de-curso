<?php
    include_once('Views/View.php');

    class UserController {
        public function MostrarLogin() {
            View::show("login",null);

        }

        public function IniSesion() {

            $users=array();

            if (isset($_POST['acceder'])) {
                if (!isset($_POST['username']) || strlen($_POST['username'])==0) {
                    $users['username']="El nombre no tiene que estar vacío";
                }

                if (!isset($_POST['password']) || strlen($_POST['password'])==0) {
                    $users['password']="La contraseña no puede estar vacía";
                }


                if (empty($users)) {
                    include('Models/usuarios.php');
                    $usuDAO=new usuarioDAO();

                    if (empty($usuDAO->validarUsers($_POST['username'],$_POST['password']))) {
                        $users['iniciar']="No puedes iniciar sesión";
                        View::show("login",$users);
                    } else {
                        View::show("addPalas",null);
                    }
                } else {
                    View::show('login',$users);
                }
            }
        }
    }
?>