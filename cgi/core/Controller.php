<?php
    abstract class Controller {

        public $model;
        public $view;

        public function __construct() {
            $this->view = new View();
        }

        //екшен по замовчуванню
        abstract public function action_index();
         
    }