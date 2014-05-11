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
    public function saveAction() {
//        echo 'Save Action';
        $data = array(
            'name'=>'somkid',
            'email' => 'somkid@cstc.ac.th'
        );
        $user = new Users();
        $user->assign($data);
        $user->save();
    }
    public function deleteAction() {
        //echo 'Delete Action';
        $user = Users::findFirst("id=3");
        $user->delete();
    }
}
