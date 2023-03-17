<?php
    class DataBase {
        private $BD=null;

        public static function conn() {
            $host='mariadb';
            $bdnombre=getenv('MARIADB_DATABASE');

            try {
                $dsn='mysql:host='.$host.";dbname=".$bdnombre.";charset=UTF8";;
                $dbh=new PDO($dsn, getenv('MARIADB_USER'), getenv('MARIADB_PASSWORD'));
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $dbh;
            } catch(PDOException $a) {
                echo $a->getMessage();
            }
        }
    }
?>