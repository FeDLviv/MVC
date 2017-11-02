<?php
    class Model_main extends Model {

        public function getData() {
            return [
                "title" => "Реалізація MVC в PHP",
                "arr" => [
                    ".htaccess", 
                    "index.php", 
                    "load.php", 
                    "Route.php start()", 
                    "Controller_xxx.php action_xxx()", 
                    "[View.php -> template.php -> view_xxx.php]", 
                    "[View.php generate(xxx, Model_xxx.php getData())]"
                ]
            ];
        }

    }