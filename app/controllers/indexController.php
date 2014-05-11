<?php

class IndexController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        //$this->view->name = "Smith Sookkhi";
//        $users = new Users();
//        $this->view->items = $users->getItems();
        
//        $user = Users::findFirst(1);
//        $this->view->setVar("name", $user->getName());
//        $this->view->setVar("email", $user->getEmail());
        $this->view->items = Users::find();
    }

}
