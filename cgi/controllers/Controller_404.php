<?php
    class Controller_404 extends Controller {

        //екшен по замовчуванню
        public function action_index() {            
            $this->view->generate("404");
        }

    }