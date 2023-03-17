<?php
    class View {
        public static function show($ViewName,$data=null) {
            include_once("header.php");
            include("$ViewName.php");
            include_once("footer.php");
        }
    }
?>