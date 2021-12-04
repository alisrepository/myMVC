<?php
require 'BaseController.php';
class App extends BaseController{
    public function index(){
        $data = array('VAL'=>'WORKED');
        $this->view('index.php',$data);
        $this->view('footer.php', $data);
    }

    public function footer(){
        $data = array('VAL'=>'footer only');
        $this->view('footer.php', $data);
    }
}