<?php
    include_once('BD/conexionBD.php');

    class PalasDAO{
        public $bd_conn;

        public function __construct() {
            $this->bd_conn=Database::conn();
        }

        public function getAllProducts() {
            $stmt=$this->bd_conn->prepare("Select * from Palas");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            try {
                $stmt->execute();
            } catch (PDOException $a) {
                echo $a->getMessage();
            }


            return $stmt->fetchAll();
        }

        public function PalasporID($id_pala) {
            $stmt=$this->bd_conn->prepare("Select * from Palas where id_pala=$id_pala");

            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            try {
                $stmt->execute();
            } catch (PDOException $a) {
                echo $a->getMessage();
            }
            

            return $stmt->fetch();
        }


        public function insertPalas($marca,$modelo,$tipopala,$formapala,$peso,$precio) {
            $stmt=$this->bd_conn->prepare("Insert into Palas(marca,modelo,tipopala,formapala,peso,precio) values(:marca,:modelo,:tipopala,:formapala,:peso,:precio)");

            $stmt->bindParam(':marca',$marca);
            $stmt->bindParam(':modelo',$modelo);
            $stmt->bindParam(':tipopala',$tipopala);
            $stmt->bindParam(':formapala',$formapala);
            $stmt->bindParam(':peso',$peso);
            $stmt->bindParam(':precio',$precio);

            try {
                return $stmt->execute();
            } catch (PDOException $a) {
                echo $a->getMessage();
            }
        }
    }
?>