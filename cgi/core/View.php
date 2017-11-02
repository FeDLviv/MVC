<?php
    class View {
        
        //метод формує вид
        public function generate($view, $data=[]) {
            require_once("cgi/views/template.php");
        }
        
    }