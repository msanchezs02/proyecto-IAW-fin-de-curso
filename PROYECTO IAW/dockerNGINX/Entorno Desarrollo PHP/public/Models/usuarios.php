<?php
    include_once('BD/conexionBD.php');

    class usuarioDAO{
        public $bd_conn;

        public function __construct() {
            $this->bd_conn=Database::conn();
        }

        public function validarUsers($username,$password) {
            $stmt=$this->bd_conn->prepare("Select * from Administrador where username='$username' and password='$password'");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();
            
        }
    }
?>