<?php
    class Controller_main extends Controller {

        //екшен по замовчуванню
        public function action_index() {
            $this->model = new Model_main();            
            $this->view->generate("main", $this->model->getData());
        }

    }